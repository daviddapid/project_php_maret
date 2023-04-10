<?php
require_once 'Controller.php';

class AdminController extends Controller
{

    public static function index()
    {
        // Auth::check();
        parent::view('admin/index');
    }
}
