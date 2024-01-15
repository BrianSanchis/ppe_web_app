<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Controllers;

class ProductController extends Controller
{
    public function showMedicaments(Request $request)
    {
        $m = Product::paginate(12);
        return view('medicaments', ['medicaments'=>$m]);
    }
}
