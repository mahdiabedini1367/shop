<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $category =Category::query()->where('id',11)->first();
//        dd($category->getAllSubCategoryProducts());

//        dd(Category::query()->where('category_id',null)->get(),);
        return view('client.home',[
            ]);
    }
}
