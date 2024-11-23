<?php 
namespace SecTheater\Http;
class Response 
{
    public function getMethode()
    {
        return $_SERVER['REQUEST_METHOD'];   
    }
}