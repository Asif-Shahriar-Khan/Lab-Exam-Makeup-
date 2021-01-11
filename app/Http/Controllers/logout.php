<?php

namespace App\Http\Controllers;
use App\Http\Controllers\logout;

use Illuminate\Http\Request;

class logout extends Controller
{
    public function index(Request $req){

    	$req->session()->flush();
    	return redirect('/login');
    }
}
