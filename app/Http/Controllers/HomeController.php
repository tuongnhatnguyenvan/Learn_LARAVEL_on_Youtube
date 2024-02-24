<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use function Termwind\render;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home hoc lap trinh web';
        $content = 'Hoc Laravel tren Youtube';
        // $dataView = [
        //     'title' => $title,
        //     'content' => $content
        // ];
        return view('home')->with(['title' => $title, 'content' => $content]);
        // return view('home', compact('title', 'content'));
        // return view::make('home', compact('title', 'content'));
        // return view::make('home')->with(['title' => $title, 'content' => $content]);
        // $contentView = view('home');
        // $contentView = $contentView->render();
        // dd($contentView);
        // echo $contentView;
    }
    public function getNews()
    {
        return 'sanh sanh  tn tuc';
    }
    public function getCategories()
    {
        return 'danh muc';
    }
    public function getProductsDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
