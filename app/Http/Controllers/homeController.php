<?php

namespace App\Http\Controllers;

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index(){
        
        return view('home'); 
    }
    public function create(){
        $users = User::select('userid', 'name')->get();
        return view('register', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->userid = $request->userid;
        
        $user->password = $request->password;
        $user->confpass = $request->confpass;
        $user->name = $request->name;
        $user->type = $request->type;
        
        
        $user->save();

        

        session()->flash('success', 'user has been created !');
        return redirect()->route('user.show');
    }

    public function show(){
        $users = User::all();
        return view('userlist', compact('users')); 
    }

    public function changepass(){
        
        return view('changepass'); 
}
}
