<?php
namespace App\Controllers;
use SecTheater\view\view;
class HomeController
{
    public function index()
    {
        return view("home");
    }
}