<?php

class Storage
{
    private static  $_root = 'C:/xampp/htdocs/tugas smk/project_php_maret/storage';

    public static function save($file, $destination)
    {

        if (!isset($file)) {
            return 'not isset file' . $file;
        }
        $filename = $destination . '/' . date('Y-m-D-s') . $file['name'];
        $path =  self::$_root . $filename;
        move_uploaded_file($file['tmp_name'], $path);
        return $filename;
    }
    public static function get($path)
    {
        return '/tugas smk/project_php_maret/storage' . $path;
    }
    public static function delete($path)
    {
        try {
            if (file_exists(self::$_root . $path)) {
                unlink(self::$_root . $path);
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}
