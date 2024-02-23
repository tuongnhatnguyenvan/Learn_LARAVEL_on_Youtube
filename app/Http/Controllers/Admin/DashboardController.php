<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // return 'Khoi dong may';
        // echo 'Khoi dong may';
    }
    public function index(){
        return '<h2>Dashboard</h2>';
    }
}
