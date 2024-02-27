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
        // $id = $request->query('id');
        $query = $request->query();
        // $name = $request->name;
        // dd($name);
        // dd(request());
        // $id =request('id','Unicode');
        dd($query);
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
        // $path = $request->path();

        $categoryName = $request->old('category_name', 'Mac dinh');
        echo $categoryName;
        // echo $old;
        return view('clients/categories/add', compact('categoryName'));
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
        // $category = $request->id;
        if ($request->has('category_name')) {
            $category = $request->category_name;
            $request->flash();
            return redirect(route('categories.add'));
            // dd($category);
        } else {
            return 'Khong co ten category';
        }
    }

    public function deleteCategory($id)
    {
        return 'Submit xoa chuyen muc ' . $id;
    }

    //xu ly day thong tin file
    public function handleFile(Request $request)
    {
        // $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $file = $request->photo;
                // $path = $file->path();
                // $path = $file->store('file-txt', 'local');
                // $path = $file->storeAs('file-txt', 'khoa-hoc.txt');
                $ext = $file->extension();
                // $fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()). '.'. $file->extension();
                dd($fileName);
            }else{
                return 'Upload khong thanh cong';
            }
        }else{
            return 'Vui long chon  file';
        }

        // dd($file);
    }

    public function getFile(Request $request)
    {
        return view('clients/categories/file');
    }
}
