<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request )
    {
        $validateData = Validator::make($request->all(), [
            "email"=> 'required',
            "password"=> 'required',
            "first_name"=> 'required',
            "last_name"=> 'required',
            "adress"=> 'required'

        ]) ;

        if($validateData->fails()){
            return [
                "errors" => $validateData->errors(),
                'status' => 'failed'
            ];
        }

        // $user = User::create([
        //     // "firstname"=>$request->firstname,
        //     // "lastname"=>$request->lastname,
        //     "email"=>$request->email,
        //     "password"=>Hash::make($request->password)
        // ]);
        // $token = $user->createToken("API_TOKEN")->plainTextToken;
        // return $token;
    }
    public function login(Request $request )
    {
        $validateData = Validator::make($request->all(), [
            "email"=> 'required',
            "password"=> 'required'
        ]) ;

        if($validateData->fails()){
            return [
                "errors" => $validateData->errors(),
                'status' => 'failed'
            ];
        }

        // $user = User::create([
        //     // "firstname"=>$request->firstname,
        //     // "lastname"=>$request->lastname,
        //     "email"=>$request->email,
        //     "password"=>Hash::make($request->password)
        // ]);
        // $token = $user->createToken("API_TOKEN")->plainTextToken;
        // return $token;
    }
}
