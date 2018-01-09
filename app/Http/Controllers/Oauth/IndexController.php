<?php

namespace App\Http\Controllers\Oauth;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
 
class IndexController extends BaseController
{

    // __construct
    public function __construct()
    {
    }

    // index
    public function oauth(Request $request){
        return view('oauth.index');
    }

    // doOAuth
    public function doOAuth(Request $request){
        return redirect('/double/auth');
        dd('验证登录是否成功，if success [goto double auth] else [back]');
    }

 
}
