<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index()
    {
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

    public function addCategory()
    {
        return view('clients/categories/add');
    }

    public function handleAddCategory()
    {
        // return 'Submit them chuyen muc ';
        return redirect(route('categories.add'));
    }

    public function deleteCategory($id)
    {
        return 'Submit xoa chuyen muc ' . $id;
    }
}
