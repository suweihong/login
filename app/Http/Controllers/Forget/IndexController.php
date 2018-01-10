<?php

namespace App\Http\Controllers\Forget;

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
        return view('forget.index');
    }

    // doIndex
    public function doIndex(Request $request){
        return redirect('/forget/verified');
    }


    // verified
    public function verified(Request $request){
        return view('forget.verified');
    }

    // verified do
    public function doVerified(Request $request){
        return redirect('/oauth');
    }

 
}
