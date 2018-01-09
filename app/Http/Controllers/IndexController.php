<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    // homepage
    public function index(Request $request)
    {
        return redirect('/oauth');
    }
    
}
