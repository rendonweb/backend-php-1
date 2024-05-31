<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\PersonController;

$controller = new PersonController();

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'GET':
        switch ($requestUri) {
            case '/':
                $controller->index();
                break;
            case '/create':
                $controller->create();
                break;
            default:
                if (preg_match('/\/edit\?id=\d+/', $requestUri)) {
                    $id = $_GET['id'];
                    $controller->edit($id);
                } elseif (preg_match('/\/delete\?id=\d+/', $requestUri)) {
                    $id = $_GET['id'];
                    $controller->delete($id);
                } else {
                    echo "404 Not Found";
                }
                break;
        }
        break;

    case 'POST':
        switch ($requestUri) {
            case '/create':
                $controller->create();
                break;
            default:
                if (preg_match('/\/edit\?id=\d+/', $requestUri)) {
                    $id = $_GET['id'];
                    $controller->update($id);
                } else {
                    echo "404 Not Found";
                }
                break;
        }
        break;

    default:
        echo "404 Not Found";
        break;
}


