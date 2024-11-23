<?php 

namespace SecTheater\Http;

// Assuming Request and Response are part of the SecTheater\Http namespace.
use SecTheater\Http\Request;
use SecTheater\Http\Response;
use SecTheater\View\View;
require_once 'C:/xampp/htdocs/MVC/src/view/view.php';
class Route 
{
    public Request $request;
    public Response $response;
    
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    protected static array $routes = [];
    
    // Method to define GET routes
    public static function get($route, $action = null)
    {
        self::$routes['get'][$route] = $action;
    }
    
    // Method to define POST routes
    public static function post($route, $action = null)
    {
        self::$routes['post'][$route] = $action;
    }
    public function resolve(){
        $path  = $this -> request -> path();
        $method = $this -> request -> method();
        $action = self :: $routes[$method][$path]?? false;

    if (!array_key_exists($path, self:: $routes [$method]))
    {
        View::makeError('404');
    }

if (! $action) {
            return;
        }
    
    
    if (is_callable($action)){
        call_user_func_array($action,[]);
    }
    if (is_array($action)){
        call_user_func_array([new $action[0], $action[1]],[]);
    }
}
}
