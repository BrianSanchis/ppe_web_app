<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('profil');
    }

    public function showAll(Request $request){
        $utilisateurs = User::paginate(10);
        return view('showUsers', ['utilisateurs'=>$utilisateurs]);
    }
}
