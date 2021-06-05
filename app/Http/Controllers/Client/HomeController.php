<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\FeaturedCategory;
use App\Models\Product;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $category =Category::query()->where('id',11)->first();
//        dd($category->getAllSubCategoryProducts());

//        dd(Category::query()->where('category_id',null)->get(),);
        return view('client.home',[
            'featuredCategory'=>FeaturedCategory::getCategory(),
            'sliders'=>slider::all(),
            ]);
    }
}
