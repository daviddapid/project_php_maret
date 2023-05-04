<?php
require_once 'Controller.php';
require_once 'C:\xampp\htdocs\tugas smk\project_php_maret\app\models\User.php';
require_once 'C:\xampp\htdocs\tugas smk\project_php_maret\app\services\Auth.php';
class AuthController extends Controller
{
    public static function login()
    {
        parent::view('auth/login');
    }
    public static function loginAction($request)
    {
        $success_login = Auth::login($request['username'], $request['password']);

        if ($success_login) {
            var_dump(Auth::user());
            Route::redirect('/admin');
        } else {
            $_SESSION['failed-login'] = true;
            return Route::redirect('/login');
        }
    }
    public static function logout()
    {
        Auth::logout();
        return Route::redirect('/');
    }

    public static function register()
    {
        parent::view('auth/register');
    }
    public static function registerAction($request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->password = $request['password'];
        $result = $user->save();

        if ($result) {
            Route::redirect('/admin');
        } else {
            $_SESSION['failed-register'] = $user->username;
            Route::redirect('/register');
        }
    }
}
