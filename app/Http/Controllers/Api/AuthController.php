<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'type_user' => 'required|string'
        ],
        [
            'nom.required' => 'veuillez entrer votre nom',
            'prenom.required' => 'veuillez entrer votre prenom',
            'email.unique'=> 'cet email est déja utilisé',
            'email.required' => 'veuillez entrer votre email',
            'email.email' => 'veuillez entrer un email valide',
            'password.required' => 'veuillez entrer votre mot de passe',
            'type_user.required' => 'veuillez choisir votre fonction'
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => $request->password,
            'type_user'=>$request->type_user,
        ]);
        return view('dashboard.home');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'veuillez entrer votre email',
            'email.email' => 'veuillez entrer un email valide',
            'password.required' => 'veuillez entrer votre mot de passe',
        ]);
        $user = User::where('email' , $request->email)->first();
        if(!$user){
            return "<script>alert('cet email ne correspond a aucun compte')</script>" . view('auth.login');
        }else if($user && $request->password != $user->password){
            return "<script>alert('mot de passe incorrect')</script>". view('auth.login');
        }else{
            return view('dashboard.home');
        }
    }
}
