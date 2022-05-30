<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //Create new user
    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ]);

        User::create($request->post());
        return response()->json([
            'message'=>'User created successfully'
        ]);

    }
}
