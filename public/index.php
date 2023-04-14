<?php

require_once '../utils/Debug.php';
require_once '../routes/Route.php';

session_start();



switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        Route::Get($_REQUEST['url']);
        break;
    case 'POST':
        Route::Post($_REQUEST['url']);
        break;

    default:
        Debug::dd('Error ngab ');
        break;
}
