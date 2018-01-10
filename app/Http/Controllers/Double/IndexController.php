<?php

namespace App\Http\Controllers\Double;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class IndexController extends Controller
{

    // __construct
    public function __construct()
    {
    }

    // init
    public function init(Request $request){
        return view('double.init');
    }

    // doInit
    public function doInit(Request $request){
        dd('验证双重认证设置完成，成功则跳回callback 失败则 重试');
    }

    // auth
    public function auth(Request $request){
        return view('double.auth');
    }


    // authd
    public function doAuth(Request $request){
        echo ('验证双重认证是否成功，成功则跳回callback 失败则 重试');
    }

 
}
