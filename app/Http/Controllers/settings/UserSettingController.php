<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function users(){
        return view('./dashboard/settings/users/users');
    }
    public function createUser(){
        return view('./dashboard/settings/users/createUser');
    }
    public function editUser($id){
        return view('./dashboard/settings/users/editUser');
    }
    
    
}