<?php

namespace App\Http\Controllers\Signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class IndexController extends Controller
{

    // __construct
    public function __construct()
    {
    }

    // index
    public function index(Request $request){
        return view('signup.index');
    }

    // indexd
    public function indexd(Request $request){
        return redirect('/signup/verified');
    }


    // verified
    public function verified(Request $request){
        return view('signup.verified');
    }

    // verified do
    public function doVerified(Request $request){
        return redirect('double/init');
    }

 
}
