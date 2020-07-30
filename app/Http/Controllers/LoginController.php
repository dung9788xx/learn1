<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function main(Request $request)
    {
        $validator=Validator::make($request->only(['email','password']),$this->rules());
        if($validator->fails()){
            return response()->json([
                'code' => 400,
                'message' => $validator->errors()->first()
            ]);
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user= Auth::user();
            $token=$user->createToken('login')->accessToken;
            return response()->json([
                'code' => 200,
                'data' => [
                    'access_token' => $token,
                    'user' => $user
                ]
            ]);
        }
        return response()->json([
            'code' => 403,
            'message' => "Invalid user name password"
        ]);
    }

    public function rules()
    {
        return [
            'email' => 'required|string',
            'password' => 'required|string'
        ];
    }
}
