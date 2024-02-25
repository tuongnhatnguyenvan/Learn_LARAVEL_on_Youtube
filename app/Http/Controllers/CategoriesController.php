<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
        if ($request->is('categories')) {
            echo '<h3>Xin Chao nha</h3>';
        }
    }

    public function index(Request $request)
    {
        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
        // $allData = $request->all();
        // dd($allData);
        // $path = $request->path();
        // echo $path;
        // $url = $request->url();
        // $fullUrl = $request->fullUrl();
        // $method = $request->method();
        // if($request->isMethod('get')){
        //     echo 'Phuong thuc GET';
        // }
        // $ip = $request->ip();
        // echo 'IP la:' . $ip;
        // $server = $request->server();
        // dd($_SERVER['HTTP_USER_AGENT']);
        // $header = $request->header('User-Agent');
        // echo $header;
        // $id = $request->input('id');
        // echo $id;
        // $input = $request->input();
        // $id = $request->id;
        // $name = $request->name;
        // dd($name);
        // dd(request());
        $id =request('id','Unicode');
        dd($id);
        return view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function updateCategory($id)
    {
        return 'Submit sua chuyen muc ' . $id;
    }

    public function addCategory(Request $request)
    {
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');
    }

    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // return 'Submit them chuyen muc ';
        // return redirect(route('categories.add'));
        // if($request->isMethod('POST')){
        //     echo 'Phuong thuc POST';
        // }
    }

    public function deleteCategory($id)
    {
        return 'Submit xoa chuyen muc ' . $id;
    }
}
