<?php

namespace App\Http\Controllers\Oauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class IndexController extends Controller
{

    // __construct
    public function __construct()
    {
    }

    // Oauth 授权登录
    public function oauth(Request $request){

        // 检查app 和 callback 参数
        // $app = $request->input('app');
        // $callback = $request->input('callback');

        // // empty
        // if(empty($app) || empty($callback)){
        //     abort(403);
        // }

        // // session save
        // session('oauth_app', $app);
        // session('oauth_callback', $callback);

        // view
        return view('oauth.index');
    }

    // doOAuth
    public function doOauth(Request $request){
        return redirect('/double/auth');
        dd('验证登录是否成功，if success [goto double auth] else [back]');
    }

 
}
