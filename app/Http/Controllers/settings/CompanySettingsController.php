<?php

namespace App\Http\Controllers\settings;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Societe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanySettingsController extends Controller
{

    public function createCompanySitting(){
        $countreis = Country::all();
        $companyInfo = Societe::all()->first();
        return view('./dashboard/settings/company_settings/company',[
            'countreis'=> $countreis,
            'companyInfo' => $companyInfo
        ]);
    }

    public function storeCompanySitting(Request $request){

        $request ->validate([
            'email'=>'email'
        ],[
            'email.email'=>"L’e-mail « ". $request ->  email. "» n’est pas valide."
        ]);
        if(Societe::count() == 0){
            $company = new Societe();
            $company -> nom = $request -> nom ;
            $company -> web_site = $request ->  web_site;
            $company -> email = $request ->  email;
            $company -> tel = $request ->  tel;
            $company -> id_country = $request ->  country;
            $company -> address1 = $request ->  address1;
            $company -> address2= $request -> address2;
            $company -> codePostal= $request -> codePostal;
            $company -> ville= $request -> ville;
            $company -> logo= $request -> logo;
            $company -> facebook= $request -> facebook;
            $company -> twitter= $request -> twitter;
            $save = $company -> save();
            if($save){
                return back()->with('success','Vos paramètres ont été mis à jour.');
            }else{
                return back()->with('fail','');
            }
        }
        return back();
    }
    public function editCompanySitting(Request $request,$id){

            $request ->validate([
                'email'=>'email',
                'logo' => 'image|mimes:jpeg,png,jpg,gif'
            ],[
                'email.email'=>"L’e-mail « ". $request ->  email. "» n’est pas valide."
            ]);
            $company = Societe::find($id)->first();
            $company -> nom = $request -> nom ;
            $company -> web_site = $request ->  web_site;
            $company -> email = $request ->  email;
            $company -> tel = $request ->  tel;
            $company -> id_country = $request ->  country;
            $company -> address1 = $request ->  address1;
            $company -> address2= $request -> address2;
            $company -> codePostal= $request -> codePostal;
            $company -> ville= $request -> ville;
            $company -> facebook= $request -> facebook;
            $company -> twitter= $request -> twitter;

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = $file->storeAs('public/images/logo', $filename);
                $company ->logo = $filename;
            }
            
            $save = $company -> save();

            if($save){
                return redirect()->route('setting.company-settings.create')->with('success','Vos paramètres ont été mis à jour.');
            }else{
                return redirect()->route('setting.company-settings.create')->with('fail','');
            }
        
    }
}