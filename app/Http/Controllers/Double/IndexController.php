<?php

namespace App\Http\Controllers\Double;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \PHPGangsta_GoogleAuthenticator;
 
class IndexController extends Controller
{

    // __construct
    public function __construct()
    {
    }

    // init 开启二次验证
    public function init(Request $request){
        $ga = new PHPGangsta_GoogleAuthenticator();
        $secret = $ga->createSecret();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
        $oneCode = $ga->getCode($secret);
        return view('double.init',compact('secret','qrCodeUrl'));
    }

    // doInit 注册时判断二次验证码是否正确
    public function doInit(Request $request){
        $email=$request->input('email');
        $oneCode=$request->input('oneCode');
        $secret=$request->input('secret');
        //判断验证码是否正确
        $ga = new PHPGangsta_GoogleAuthenticator();
        $checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
        if ($checkResult) {
            $user=user::where('email',$email)->first();
            $user->secret=$secret;
            $res=$user->save();
            if($res){
                var_dump( 'true');
            return redirect('/oauth');

            }else{
                return 'false';
            }
        } else {
           var_dump('验证码错误') ;
            return redirect('/double/init');
        }
        // dd('验证双重认证设置完成，成功则跳回callback 失败则 重试');
    }

    // auth 
    public function auth(Request $request){
        return view('double.auth');
    }


    // authd 登录时判断验证码是否正确
    public function doAuth(Request $request){
        $email=$request->input('email');
        $oneCode=$request->input('oneCode');
        $user=user::where('email',$email)->first();
        $secret=$user['secret'];
        $api_token=$user['api_token'];
        //判断验证码是否正确
        $ga = new PHPGangsta_GoogleAuthenticator();
        $checkResult = $ga->verifyCode($secret, $oneCode, 2);  
        if($checkResult){
            return true;
        }else{
            return false;
        }



        // echo ('验证双重认证是否成功，成功则跳回callback 失败则 重试');
    }

 
}
