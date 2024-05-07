<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Controllers;

class ProductController extends Controller
{
    public function showMedicaments(Request $request)
    {
        $medicaments = Category::find(2)->products()->paginate(12);
        return view('medicaments', ['medicaments'=>$medicaments]);
    }

    public function showMachines(Request $request)
    {
        $machines = Category::find(1)->products()->paginate(12);
        return view('machines', ['machines'=>$machines]);
    }

    public function searchMedicaments(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = session('search_results_medicaments');

        if ($products && $products->isNotEmpty()) {
            $request->session()->forget('search_results_medicaments');
        }
        $newProducts = Product::where('Libelle', 'like', '%'.$searchTerm.'%')->paginate(1);
        $request->session()->put('search_results_medicaments', $newProducts);

        return view('medicaments', ['products' => $newProducts]);
    }

    public function searchMachines(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = session('search_results');

        if ($products && $products->isNotEmpty()) {
            $request->session()->forget('search_results');
        }
        $newProducts = Product::where('Libelle', 'like', '%'.$searchTerm.'%')->paginate(1);
        $request->session()->put('search_results', $newProducts);

        return view('machines', ['products' => $newProducts]);
    }
}
