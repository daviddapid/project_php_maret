<?php
require_once 'Controller.php';

class AdminController extends Controller
{

    public static function index()
    {
        if (!Auth::is_login()) {
            return Route::redirect('/login');
        }
        $data = [
            'posts' => Auth::user()->posts()
        ];
        parent::view('admin/index', $data);
    }
}
