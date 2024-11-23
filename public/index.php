<?php 
use SecTheater\Http\Route;
use SecTheater\Http\Response;
use SecTheater\Http\Request;
use Dotenv\Dotenv;
require_once 'C:/xampp/htdocs/MVC/src/Http/route.php';
require_once 'C:/xampp/htdocs/MVC/src/Http/response.php';
require_once 'C:/xampp/htdocs/MVC/src/Http/request.php';
require_once __DIR__ . '/../vendor/autoload.php' ;
require_once __DIR__ .'/../routes/web.php';
require_once __DIR__ .'/../src/support/helpers.php';

$env = Dotenv::createImmutable(base_path());
$env->load();
app() -> run();