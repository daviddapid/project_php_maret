<?php

class Auth extends User
{

    private static function setUser($id, $name, $username, $password)
    {
        $user = [
            "id" => $id,
            "name" => $name,
            "username" => $username,
            "password" => $password,
        ];
        $_SESSION['user'] = $user;
    }
    public static function is_login()
    {
        return isset($_SESSION['user']);
    }
    public static function user()
    {
        $_user = $_SESSION['user'];
        $user = new User();
        $user->id = $_user['id'];
        $user->name = $_user['name'];
        $user->username = $_user['username'];
        $user->password = $_user['password'];
        return $user;
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

        self::setUser($user['id'], $user['name'], $user['username'], $user['password']);

        return true;
    }
    public static function logout()
    {
        $_SESSION['user'] = null;
    }
}
