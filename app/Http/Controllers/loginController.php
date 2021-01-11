<?php

namespace App\Http\Controllers;
use App\Http\Controllers\loginController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(){
    	return view('login');
}

public function verify(Request $req){
    	
    

     $user = DB::table('users')
                ->where('userid', $req->userid)
                ->where('password', $req->password)
                ->first();

                return redirect()->route('home.index');

    /*$user = User::where('username', $req->username)
                ->where('password', $req->password)
                ->first();*/

    if(count($user) > 0){
        $req->session()->put('userid', $req->userid);
        $req->session()->put('type', $req->userid);
        
        return redirect()->route('home.index');
    }else{
        $req->session()->flash('msg', 'invalid userid/password');
        return redirect('/login');
        //return view('login.index');
    }
}

}