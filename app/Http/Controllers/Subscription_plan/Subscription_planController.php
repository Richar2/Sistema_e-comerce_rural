<?php

namespace App\Http\Controllers\Subscription_plan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Subscription_planController extends Controller
{
    public function teste()
    {
        return view('public_template.templade_t');  
    }
    
    public function user()
    {
        return view('public_template.user');  
    }
    public function planos()
    {
        return view('public_template.plans');  
    }
    public function anuncio()
    {
        return view('public_template.cad');  
    }
    





}
