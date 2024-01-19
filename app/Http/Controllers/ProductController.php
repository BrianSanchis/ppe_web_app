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
        $medicaments = Category::find(2)->products()->take(12)->get();
        return view('medicaments', ['medicaments'=>$medicaments]);
    }

    public function showMachines(Request $request)
    {
        $machines = Category::find(1)->products()->take(12)->get();
        return view('machines', ['machines'=>$machines]);
    }
}
