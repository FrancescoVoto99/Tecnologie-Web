<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmmController extends Controller
{ 
   

    public function __construct() {
        $this->middleware('can:isAmm');
        
        
    }

    public function index() {
        return view('amm');
    }
   
    
    }
