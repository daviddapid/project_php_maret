<?php
require_once 'Model.php';

class User extends Model
{
    public $name;
    public $username;
    public $password;

    // public function __construct($name, $username, )
    // {
    //     $this->name = $name;
    //     $this->username = $username
    //     $
    // }

    public static function where($column, $value, $operator_condition)
    {
        switch ($operator_condition) {
            case '=':
            case '!=':
            case '>':
            case '>=':
            case '<':
            case '<=':
                $conn = parent::startConnection();
                $sql = "SELECT * FROM users WHERE $column $operator_condition '$value'";
                $result = $conn->query($sql)->fetch_assoc();

                $conn->close();

                return $result;

                break;

            default:
                return 'make sure used correct operator condition';
                break;
        }
    }
    public function save()
    {
        try {
            $conn = parent::startConnection();

            // CHECK IF THIS USERNAME IS EXISTED IN DB ? redirect to register 
            $sql_check_existed = "SELECT * FROM users WHERE username = '$this->username'";
            $result = $conn->query($sql_check_existed);
            if ($result->num_rows > 0) {
                $conn->close();
                return false;
            }

            $hashed_pass = password_hash($this->password, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (name, username, password) VALUES ('$this->name', '$this->username', '$hashed_pass')";

            $result = $conn->query($sql_insert);
            $conn->close();
            return $result;
        } catch (\Throwable $th) {
            $conn->close();
            return $th->getMessage();
        }
    }
}
