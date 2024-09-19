<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Operator;

class AuthController extends Controller
{
    function login(Request $request):void{
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required'
        ]);
        
        $user = User::where('email',$request->email)->first();

        if(! $user|| !Hash::check($request->password,hashedValue:$user->password)){
            
        }
    }
}
