<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PaymentMethodController extends Controller
{
    //
    public function paymentMethods(){
        return view('./dashboard/settings/payment_methods/paymentMethods');
    }
}