<?php

class Auth extends User
{
    private static ?User $_user = null;

    private static function setUser($name, $username, $password)
    {
        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->password = $password;

        self::$_user = $user;
    }
    public static function check()
    {
        return var_dump(self::$_user);
        if (self::$_user == null) {
            return Route::redirect('/login');
        }
    }
    public static function user()
    {
        return self::$_user;
    }
    public static function login($username, $password): bool
    {
        $user = parent::where('username', $username, '=');
        if ($user == null) {
            return false;
        }
        if (!password_verify($password, $user['password'])) {
            return false;
        }

        self::setUser($user['name'], $user['username'], $user['password']);

        return true;
    }
}
