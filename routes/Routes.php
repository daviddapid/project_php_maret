<?php
require_once '../app/controllers/CobaController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AdminController.php';

class Routes
{
    public static $routes = [
        'get' => [
            '/' => [HomeController::class, 'index'],
            '/detail' => [HomeController::class, 'detail'],
            '/home/coba' => [CobaController::class, 'index'],
            '/login' => [AuthController::class, 'login'],
            '/logout' => [AuthController::class, 'logout'],
            '/register' => [AuthController::class, 'register'],
            '/admin' => [AdminController::class, 'index'],
            '/admin/post/create' => [AdminController::class, 'create'],
            '/admin/post/edit' => [AdminController::class, 'edit'],
        ],
        'post' => [
            '/login' => [AuthController::class, 'loginAction'],

            '/register' => [AuthController::class, 'registerAction'],
            '/home/post' => [CobaController::class, 'store'],
            '/admin/post/store' => [AdminController::class, 'store'],
            '/admin/post/update' => [AdminController::class, 'update'],
            '/admin/post/delete' => [AdminController::class, 'delete']
        ]
    ];
}
