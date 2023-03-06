<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function clients()
    {
        return view('./dashboard/contacts/clients/clientsList');
    }
    public function add_client()
    {
        return view('./dashboard/contacts/clients/addClient');
    }
    public function client_profile($id)
    {
        return view('./dashboard/contacts/clients/clientProfile', [ 'id' => $id]);
    }

    public function employes()
    {
        return view('./dashboard/contacts/employes/employeesList');
    }

    public function add_employe()
    {
        return view('./dashboard/contacts/employes/addEmploye');
    }

    public function employee_profile($id)
    {
        return view('./dashboard/contacts/employes/profileEmploye', [ 'id' => $id]);
    }

    public function fournisseurs()
    {
        return view('./dashboard/contacts/fournisseurs/fournisseursList');
    }

    public function add_fournisseur()
    {
        return view('./dashboard/contacts/fournisseurs/addFournisseur');
    }

    public function fournisseur_profile($id)
    {
        return view('./dashboard/contacts/fournisseurs/fournisseurProfile', [ 'id' => $id]);
    }

}
