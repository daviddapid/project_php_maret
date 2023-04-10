<?php
require_once 'Controller.php';

class CobaController extends Controller
{
    public static function index($request)
    {
        parent::view('home');
    }
    public static function store($request)
    {
        if ($request['nama'] == 'david' && $request['password'] == 'password') {
            Route::redirect('/home/coba');
        } else {
            Route::redirect('/login');
        }
        var_dump($request);
    }
}
