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
            '/register' => [AuthController::class, 'register'],
            '/admin' => [AdminController::class, 'index']
        ],
        'post' => [
            '/login' => [AuthController::class, 'loginAction'],
            '/register' => [AuthController::class, 'registerAction'],
            '/home/post' => [CobaController::class, 'store']
        ]
    ];
}
