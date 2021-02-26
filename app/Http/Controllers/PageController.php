<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Welcomee";
    }
    public function about(){
        echo "My Name is Rajendraa Rakha NIM 1941720080";
    }
    public function article($id){
        echo "Articles Page With ID ".$id;
    }
}
