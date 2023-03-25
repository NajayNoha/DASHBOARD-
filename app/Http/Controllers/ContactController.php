<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Employe;
use App\Models\Country;
use App\Models\Fournisseur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function clients()
    {
        $data = Client::get();
        return view('dashboard/contacts/clients/clientsList' , compact('data'));
    }
    public function add_client()
    {
        $countries = Country::get();
        return view('./dashboard/contacts/clients/addClient', compact('countries'));
    }
    public function save_client(Request $request)
    {



        // data validation
        $request->validate(
            [
                'id' => 'required|unique:clients,id',
                'name' => 'required',
                'email' => 'required|email',
                'website' => 'required',
                'tel' => 'required',
                'taxe_number' => 'required',
                'adresse_lib' => 'required',
                'adresse_type' => 'required',
                'adresse_tel' => 'required',
                'pays' => 'required',
                'adresse1' => 'required',
                'adresse2' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'price_level' => 'required',
                'devise' => 'required',
                'discount' => 'required',
                'taxe_type' => 'required',
                'taxes' => 'required'
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'name.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'website.required' => 'ce champ est obligatoire',
                'tel.required' => 'ce champ est obligatoire',
                'taxe_number.required' => 'ce champ est obligatoire',
                'adresse_lib.required' => 'ce champ est obligatoire',
                'adresse_type.required' => 'ce champ est obligatoire',
                'adresse_tel.required' => 'ce champ est obligatoire',
                'pays.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'price_level.required' => 'ce champ est obligatoire',
                'devise.required' => 'ce champ est obligatoire',
                'discount.required' => 'ce champ est obligatoire',
                'taxe_type.required' => 'ce champ est obligatoire',
                'taxes.required' => 'ce champ est obligatoire'
            ]
        );

        // insertion des donnees :
        $client = new Client();
        $client->id = $request->id;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->website = $request->website;
        $client->tel = $request->tel;
        $client->taxe_number = $request->taxe_number;
        $client->adresse_lib = $request->adresse_lib;
        $client->adresse_type = $request->adresse_type;
        $client->adresse_tel = $request->adresse_tel;
        $client->pays = $request->pays;
        $client->adresse1 = $request->adresse1;
        $client->adresse2 = $request->adresse2;
        $client->postalCode = $request->postalCode;
        $client->city = $request->city;
        $client->price_level = $request->price_level;
        $client->devise = $request->devise;
        $client->discount = $request->discount;
        $client->taxe_type = $request->taxe_type;
        $client->taxes = $request->taxes;
        $client->save();

        // session:
        return redirect()->back()->with('success' , "Client ajouté avec succés");
    }
    public function client_profile($id)
    {
        $data = Client::where('id' , '=' , $id)->first();
        return view('./dashboard/contacts/clients/clientProfile', compact('data'));
    }

    public function update_client(Request $request)
    {
        $request->validate(
            [
                'id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'website' => 'required',
                'tel' => 'required',
                'taxe_number' => 'required',
                'adresse_lib' => 'required',
                'adresse_type' => 'required',
                'adresse_tel' => 'required',
                'pays' => 'required',
                'adresse1' => 'required',
                'adresse2' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'price_level' => 'required',
                'devise' => 'required',
                'discount' => 'required',
                'taxe_type' => 'required',
                'taxes' => 'required'
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'name.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'website.required' => 'ce champ est obligatoire',
                'tel.required' => 'ce champ est obligatoire',
                'taxe_number.required' => 'ce champ est obligatoire',
                'adresse_lib.required' => 'ce champ est obligatoire',
                'adresse_type.required' => 'ce champ est obligatoire',
                'adresse_tel.required' => 'ce champ est obligatoire',
                'pays.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'price_level.required' => 'ce champ est obligatoire',
                'devise.required' => 'ce champ est obligatoire',
                'discount.required' => 'ce champ est obligatoire',
                'taxe_type.required' => 'ce champ est obligatoire',
                'taxes.required' => 'ce champ est obligatoire'
            ]
        );
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $website = $request->website;
        $tel = $request->tel;
        $taxe_number = $request->taxe_number;
        $adresse_lib = $request->adresse_lib;
        $adresse_type = $request->adresse_type;
        $adresse_tel = $request->adresse_tel;
        $pays = $request->pays;
        $adresse1 = $request->adresse1;
        $adresse2 = $request->adresse2;
        $postalCode = $request->postalCode;
        $city = $request->city;
        $price_level = $request->price_level;
        $devise = $request->devise;
        $discount = $request->discount;
        $taxe_type = $request->taxe_type;
        $taxes = $request->taxes;

        Client::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'website' => $website,
            'tel' =>$tel,
            'taxe_number'=>$taxe_number,
            'adresse_lib' => $adresse_lib,
            'adresse_type' => $adresse_type,
            'adresse_tel'=>$adresse_tel,
            'pays'=>$pays,
            'adresse1'=>$adresse1,
            'adresse2'=>$adresse2,
            'postalCode'=>$postalCode,
            'city'=>$city,
            'price_level'=>$price_level,
            'devise'=>$devise,
            'discount'=>$discount,
            'taxe_type'=>$taxe_type,
            'taxes'=>$taxes,
        ]);
        return redirect()->back()->with('success' , "Client modifié avec succés");
    }
    public function delete_client($id)
    {
        Client::where('id','=',$id)->delete();
        return redirect()->back()->with('success' , "Client supprimé avec succés");
    }
    public function employes()
    {
        $data = Employe::get();
        //
        // return $data;
        return view('./dashboard/contacts/employes/employeesList' , compact('data'));
    }

    public function add_employe()
    {
        $countries = Country::get();
        return view('./dashboard/contacts/employes/addEmploye' , compact('countries'));
    }

    public function save_employe(Request $request){
        // data validation
        $request->validate(
            [
                'id' => 'required|unique:clients,id',
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'pays' => 'required',
                'adresse1' => 'required',
                'adresse2' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'employer'=>'required',
                'position' => 'required'
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'firstName.required' => 'ce champ est obligatoire',
                'lastName.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'tel.required' => 'ce champ est obligatoire',
                'pays.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'employer.required' => 'ce champ est obligatoire',
                'position.required' => 'ce champ est obligatoire',
            ]
        );

        // insertion des donnees :
        $employe = new Employe();
        $employe->id = $request->id;
        $employe->firstName = $request->firstName;
        $employe->lastName = $request->lastName;
        $employe->email = $request->email;
        $employe->tel = $request->tel;
        $employe->pays = $request->pays;
        $employe->adresse1 = $request->adresse1;
        $employe->adresse2 = $request->adresse2;
        $employe->postalCode = $request->postalCode;
        $employe->city = $request->city;
        $employe->employer = $request->employer;
        $employe->position = $request->position;
        $user = new User();
        $user->name = $request->firstName . $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->email . "EYSI");
        if($employe->save() && $user->save()){
            // session:
            return redirect()->back()->with('success' , "Employé ajouté avec succés");
        }else {
            return redirect()->back()->with('failed' , "il y a un problem dans la creation d'employe essaye encore ");
        }
    }

    public function employee_profile($id)
    {
        $countries = Country::get();
        $data = Employe::where('id' , '=' , $id)->first();
        // return view('./dashboard/contacts/clients/clientProfile', compact('data'));
        return view('./dashboard/contacts/employes/profileEmploye', compact('data' , 'countries'));
    }

    public function delete_employe($id)
    {
        Employe::where('id','=',$id)->delete();
        return redirect()->back()->with('success' , "Employé supprimé avec succés");
    }

    public function update_employe(Request $request){
        $request->validate(
            [
                'id' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'adresse1' => 'required',
                'adresse2' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'employer'=>'required',
                'position' => 'required'
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'firstName.required' => 'ce champ est obligatoire',
                'lastName.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'tel.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'employer.required'=>'ce champ est obligatoire',
                'position.required'=>'ce champ est obligatoire'
            ]
        );
        $id = $request->id;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $tel = $request->tel;
        $pays = $request->pays;
        $adresse1 = $request->adresse1;
        $adresse2 = $request->adresse2;
        $postalCode = $request->postalCode;
        $city = $request->city;
        $employer = $request->employer;
        $position = $request->position;

        Employe::where('id','=',$id)->update([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'tel' =>$tel,
            'pays'=>$pays,
            'adresse1'=>$adresse1,
            'adresse2'=>$adresse2,
            'postalCode'=>$postalCode,
            'city'=>$city,
            'employer' =>$employer,
            'position'=>$position
        ]);
        return redirect()->back()->with('success' , "Employé modifié avec succés");
    }

    public function fournisseurs()
    {
        $data = Fournisseur::all();
        return view('./dashboard/contacts/fournisseurs/fournisseursList' , compact('data'));
    }

    public function add_fournisseur()
    {
        $countries = Country::get();
        return view('./dashboard/contacts/fournisseurs/addFournisseur' , compact('countries'));
    }
    public function save_fournisseur(Request $request)
    {
        // data validation
        $request->validate(
            [
                'id' => 'required|unique:clients,id',
                'name' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'pays' => 'required',
                'adresse1' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'devise' => 'required',
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'name.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'tel.required' => 'ce champ est obligatoire',
                'pays.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'price_level.required' => 'ce champ est obligatoire',
                'devise.required' => 'ce champ est obligatoire',
                'discount.required' => 'ce champ est obligatoire',
                'taxes.required' => 'ce champ est obligatoire'
            ]
        );

        // insertion des donnees :
        $fournisseur = new Fournisseur();
        $fournisseur->identifient = $request->id;
        $fournisseur->name = $request->name;
        $fournisseur->email = $request->email;
        $fournisseur->tel = $request->tel;
        $fournisseur->pays = $request->pays;
        $fournisseur->adresse1 = $request->adresse1;
        $fournisseur->adresse2 = $request->adresse2;
        $fournisseur->postalCode = $request->postalCode;
        $fournisseur->city = $request->city;
        $fournisseur->price_level = $request->price_level;
        $fournisseur->devise = $request->devise;
        $fournisseur->discount = $request->discount;
        $fournisseur->taxes = $request->taxes;
        $fournisseur->save();

        // session:
        return redirect()->back()->with('success' , "Fournisseur ajouté avec succés");
    }
    public function update_fournisseur(Request $request)
    {
        $request->validate(
            [
                'id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'pays' => 'required',
                'adresse1' => 'required',
                'postalCode' => 'required',
                'city' => 'required',
                'price_level' => 'required',
                'devise' => 'required',
                'taxes' => 'required'
            ],
            [
                'id.required' => 'ce champ est obligatoire',
                'name.required' => 'ce champ est obligatoire',
                'email.required' => 'ce champ est obligatoire',
                'email.email' => 'veuillez entrer un email valide',
                'tel.required' => 'ce champ est obligatoire',
                'pays.required' => 'ce champ est obligatoire',
                'adresse1.required' => 'ce champ est obligatoire',
                'adresse2.required' => 'ce champ est obligatoire',
                'postalCode.required' => 'ce champ est obligatoire',
                'city.required' => 'ce champ est obligatoire',
                'price_level.required' => 'ce champ est obligatoire',
                'devise.required' => 'ce champ est obligatoire',
                'discount.required' => 'ce champ est obligatoire',
                'taxes.required' => 'ce champ est obligatoire'
            ]
        );
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $pays = $request->pays;
        $adresse1 = $request->adresse1;
        $adresse2 = $request->adresse2;
        $postalCode = $request->postalCode;
        $city = $request->city;
        $price_level = $request->price_level;
        $devise = $request->devise;
        $discount = $request->discount;
        $taxes = $request->taxes;

        Fournisseur::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'tel' =>$tel,
            'pays'=>$pays,
            'adresse1'=>$adresse1,
            'adresse2'=>$adresse2,
            'postalCode'=>$postalCode,
            'city'=>$city,
            'price_level'=>$price_level,
            'devise'=>$devise,
            'discount'=>$discount,
            'taxes'=>$taxes,
        ]);
        return redirect()->back()->with('success' , "Fournisseur modifié avec succés");
    }
    public function fournisseur_profile($id)
    {
        $data = Fournisseur::where('id' , '=' , $id)->first();
        $countries = Country::get();
        return view('./dashboard/contacts/fournisseurs/fournisseurProfile', compact('data' , 'countries'));
    }
    public function delete_fournisseur($id)
    {
        Fournisseur::where('id','=',$id)->delete();
        return redirect()->back()->with('success' , "Fournisseur supprimé avec succés");
    }
}
