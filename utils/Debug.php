<?php

class Debug
{
    public static function dd(...$any)
    {
        echo '<pre>';
        var_dump($any);
        echo '</pre>';
    }
}
