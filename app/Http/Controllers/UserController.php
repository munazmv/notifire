<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RegisterUserRequest;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
    	
    	$user = \App\User::create([

    		'name' => $request->name,
    		'password' => bcrypt($request->password),
    		'email' => $request->email,
    		'user_type' => $request->user_type

    	]);


    	return response()->json([

    		'result' => 'User Created Successfully',
            'result_code' => 100,
    		'data' => $user

    	], 200);

    }
}
