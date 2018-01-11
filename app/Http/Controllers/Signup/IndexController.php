<?php

namespace App\Http\Controllers\Signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


use App\Models\User; 
use App\Models\MailToken;
use App\Models\Event;
use App\Models\Note;
class IndexController extends Controller
{

    // __construct
    public function __construct()
    {
    }
    public function test(Request $request)
    {
        return response()
                        ->json(['secret' =>'11111'])
                        ->withCallback($request->input('callback')); 
    }
    public function test1(Request $request)
    {
        return response()
                        ->json(['secret' =>'222'])
                        ->withCallback($request->input('callback')); 
    }
    // index 返回注册页面
    public function index(Request $request){
        return view('signup.index'); 
    }

    // indexd 添加邮箱名称并发送邮件
    public function indexd(Request $request){
        // agrs
        $email = $request->input('email', '');
        // validate
        $validate = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ], [
            'email.required'=> trans('login.signup_email_required'),
            'email.email'=> trans('login.signup_email_email'),
            'email.unique'=> trans('login.signup_email_unique'),
        ]);
         // validate fail
        if($validate->fails()){
            return response()->json([
                'errcode' => 1001,
                'errmsg' => $validate->errors()->first(),
            ]);
        }
         // save
        $user = new User;
        $user->email = $email;
        $user->password = '';
        $user->api_token = '';
        $user->pin = '';
        $user->lang = 'en';
        // fail
        if (!$user->save()) {
            return response()->json([
                'errcode' => 9001,
                'errmsg' => trans('system.9001'),
            ]);
        }
         // 加入事件
        $agent = new Agent();
        $event = new Event;
        $event->user_id = $user->id;
        $event->ipaddr = $request->getClientIp();
        $event->device = $agent->browser().' on '.$agent->platform();
        $event->action = 'ACCOUNT_CREATE';
        $event->save();
        // 加入消息
        // $note = new Note;
        // $note->user_id = $user->id;
        // $note->subject = trans('note.welcome_title');
        // $note->content = trans('note.welcome_content');
        // $note->save();
        // success
         if ($user->save()) { 
           // return response()->json([
           //      'errcode' => 0,
           //      'errmsg' => '',
           //  ]); 
           
           return redirect('/signup/verified');
           

        }

    }


    // verified 返回添加密码的页面
    public function verified(Request $request){
        return view('signup.verified');
    }

    // verified do 执行添加密码的操作
    public function doVerified(Request $request){
        // agrs
        $token = $request->input('token', '');
        $password = $request->input('password', '');
        // validate
        $validate = Validator::make($request->all(), [
            'token' => 'required',
            'password' => 'required|between:6,32',
        ], [
            'token.required'=> trans('login.password_token_required'),
            'password.required'=> trans('login.password_required'),
            'password.between'=> trans('login.password_between'),
        ]);
           // validate fail
        if($validate->fails()){
            return response()->json([
                'errcode' => 1001,
                'errmsg' => $validate->errors()->first(),
            ]);
        }
         // 验证TOKEN
        // $token = MailToken::where('token', $token)
        //                     // ->where('created_at', 'like', date('Y-m-d').'%')
        //                     ->first();

        // // TOKEN 无效
        // if(!$token){
        //     return response()->json([
        //         'errcode' => 1002,
        //         'errmsg' => trans('login.password_token_error'),
        //     ]);
        // }
        // // save
        // $user = $token->user;
        // $user->password = Hash::make($password);
        //  // fail
        // if (!$user->save()) {
        //     return response()->json([
        //         'errcode' => 9001,
        //         'errmsg' => trans('system.9001'),
        //     ]);
        // }
        //  // 删除token
        // $token->delete();
         // 加入事件
        // $agent = new Agent();
        // $event = new Event;
        // $event->user_id = $user->id;
        // $event->ipaddr = $request->getClientIp();
        // $event->device = $agent->browser().' on '.$agent->platform();
        // $event->action = 'PASSWORD_SET';
        // $event->save();
         // success
        // return response()->json([
        //         'errcode' => 0,
        //         'errmsg' => '',
        //     ]);
        return redirect('double/init');
    }

 
}
