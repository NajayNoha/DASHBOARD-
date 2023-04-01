<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(){
        $clients = DB::table('clients')->count();
        $employes = DB::table('employes')->count();
        $fournisseurs = DB::table('fournisseurs')->count();
        $products = DB::table('products')->count();
        $services = DB::table('service')->count();
        // dd([$clients , $employes , $fournisseurs , $products , $services]);
        return view('index',['clients' => $clients ,
                            'employes' => $employes ,
                            'fournisseurs' => $fournisseurs ,
                            'products' => $products ,
                            'services' => $services]);
    }
}
