<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// homepage
$router->get('/', 'IndexController@index');

// OAUTH 登录
$router->get('/oauth', 'Oauth\IndexController@oauth');
$router->post('/oauth', 'Oauth\IndexController@doOAuth');

// 双重认证[登录后进行]
$router->get('/double/auth', 'Double\IndexController@auth');
$router->post('/double/auth', 'Double\IndexController@doAuth');


// 注册过程
$router->get('/signup', 'Signup\IndexController@index');
$router->post('/signup', 'Signup\IndexController@indexd');

// 验证完成 设置密码
$router->get('/signup/verified', 'Signup\IndexController@verified');
$router->post('/signup/verified', 'Signup\IndexController@doVerified');

// 初始化双重认证
$router->get('/double/init', 'Double\IndexController@init');
$router->post('/double/init', 'Double\IndexController@doInit');


// 忘记密码
$router->get('/forget', 'Forget\IndexController@index');
$router->post('/forget', 'Forget\IndexController@doIndex');

// 忘记密码验证完成 设置新密码
$router->get('/forget/verified', 'Forget\IndexController@verified');
$router->post('/forget/verified', 'Forget\IndexController@doVerified');


// API 相关
// ............