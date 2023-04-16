<?php
require 'C:\xampp\htdocs\tugas smk\project_php_maret\app\models\Post.php';

class HomeController extends Controller
{


    public static function index()
    {
        $data = [
            'posts' => Post::all()
        ];
        parent::view('home/index', $data);
    }
    public static function detail($request)
    {

        $data = [
            'post' => Post::find($request['postId']),
        ];
        parent::view('home/detail', $data);
    }
}
