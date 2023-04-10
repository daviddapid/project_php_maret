<?php
require_once 'Model.php';

class Post extends Model
{


    public static function all()
    {
        $conn = parent::startConnection();

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        $conn->close();

        return $result;
    }
    public static function find($id)
    {
        $conn = parent::startConnection();
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = $conn->query($sql)->fetch_assoc();
        $conn->close();

        return $result;
    }
}
