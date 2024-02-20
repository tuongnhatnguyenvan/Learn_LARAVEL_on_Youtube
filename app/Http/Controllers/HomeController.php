<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Home';
    }
    public function getNews(){
        return 'sanh sanh  tn tuc';
    }
    public function getCategories(){
        return 'danh muc';
    }
}
