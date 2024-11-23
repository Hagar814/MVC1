<?php 
// Ensure the class name matches the namespace and class
use SecTheater\Http\Route;
use App\Controllers\HomeController;
// Make sure to include the Route file before using the class
require_once 'C:/xampp/htdocs/MVC/src/Http/route.php';

// Define a route
Route::get('/', [HomeController::class,'index']);
