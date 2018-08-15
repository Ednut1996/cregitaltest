<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function companies(){
        return view('pages.companies');
    }

    public function employees(){
        return view('pages.employees');
    }
    
}
