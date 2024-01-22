<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll(Request $request)
    {
        $medicaments = User::paginate(12);
        return view('medicaments', ['medicaments'=>$medicaments]);
    }
}
