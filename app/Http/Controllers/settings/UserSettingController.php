<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserSettingController extends Controller
{
    public function users(){
        $Admin = Admin::all();
        $nbrUsersActif = Admin::where('actif',1)->count();
        return view('./dashboard/settings/users/users',[
            'admins'=>$Admin,
            'nbrUsersActif'=> $nbrUsersActif
        ]);
    }
    public function createUser(){
        return view('./dashboard/settings/users/createUser');
    }
    public function editUser($id){
        $user = User::find($id);
        return view('./dashboard/settings/users/editUser',[
            'user'=>$user
        ]);
    }
    public function storeUser(Request $request){
        
        $request->validate([
            'email'=>'required|unique:admins'
        ],[
            'email.required'=>'Le champ E-mail est requis.',
            'email.unique' => 'ce email déjà existé.'
        ]);

        $user = new User();
            $user -> name = $request ->  nom ;
            $user -> email = $request -> email;
            $user -> role = $request ->  type_user;
            $user ->password = Hash::make($request->email);
            // $lastAdmin = Admin::latest()->first(); 
            // $user -> id_admin = $lastAdmin->id;
            $saveUser = $user -> save();
    
        if($saveUser){
            $admin = new Admin();
            $admin ->  prenom= $request -> prenom;
            $admin -> nom = $request ->  nom;
            $admin -> email = $request -> email;
            $admin -> tele = $request ->  tele;
            $admin ->  nom_affichage = $request ->  nom_affichage;
            $admin -> langue = $request ->  langue;
            $admin -> id_user = User::latest()->first()->id;
            $saveAdmin  = $admin -> save();
            
            if($saveUser){
                return redirect()->route('settings.users');
            }
        }
    }
    public function changeActive(Request $request ,  $id){
        $admin = Admin::find($id);
        if($request->actif == 0){
            $admin -> actif = 1 ;
            $admin ->save();
        }
        if($request->actif == 1){
            $admin -> actif = 0 ;
            $admin -> save() ;
        }
        return redirect()->route('settings.users');
    }
    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'password_actuel' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ], [
            'password_actuel.required' => 'Le champ Mot de passe actuel est requis.',
            'new_password.required' => 'Le champ Nouveau mot de passe est requis.',
            'confirm_password.required' => 'Le champ Confirmer le Nouveau mot de passe est requis.'
        ]);
    
        $password_actuel = $request->password_actuel;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;
    
        if ($new_password !== $confirm_password) {
            return back()->with('fail', 'Les mots de passe ne correspondent pas.');
        }
    
        $user = User::find($id);
    
        if ($user) {
            if (Hash::check($password_actuel, $user->password)) {
                $user -> password = $new_password ;
                $user -> save();
                return back()->with('success','Le mot de passe a été changé avec succès');
            } 
            else {
                return back()->with('fail', 'Mot de passe incorrect.');
            }
        };
        return back();
    }
    
    public function updateUser(Request $request,$id){
        
        $request->validate([
            'email'=>'required|unique:admins'
        ],[
            'email.required'=>'Le champ E-mail est requis.',
            'email.unique' => 'ce email déjà existé.'
        ]);
        
        $user =User::find($id);
        if($user){
            $user -> name = $request ->  nom ;
            $user -> email = $request -> email;
            $saveUser = $user->save();

            if($saveUser){
                $admin = Admin::where('id',$user->id_admin)->first();
                $admin ->  prenom= $request -> prenom;
                $admin -> nom = $request ->  nom;
                $admin -> email = $request -> email;
                $admin -> tele = $request ->  tele;
                $admin ->  nom_affichage = $request ->  nom_affichage;
                $admin -> langue = $request ->  langue;
                $saveAdmin  = $admin -> save();
                if($saveAdmin){
                    return redirect()->route('settings.users');
                }
            }
        }

    }
}