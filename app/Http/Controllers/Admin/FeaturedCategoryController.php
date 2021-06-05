<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureCategoryRequest;
use App\Models\Category;
use App\Models\FeaturedCategory;
use Illuminate\Http\Request;

class FeaturedCategoryController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
        return view('admin.featureCategory.create',[
            'featuredCategory'=>FeaturedCategory::query()->first(),
            'categories' =>Category::query()->where('category_id',null)->get(),
        ]);
    }

    public function store(FeatureCategoryRequest $request)
    {
        FeaturedCategory::query()->delete();
        FeaturedCategory::query()->create([
            'category_id'=>$request->get('category_id'),
        ]);
        return redirect(route('featuredCategory.create'));
    }

    public function show(FeaturedCategory $featuredCategory)
    {
    }

    public function edit(FeaturedCategory $featuredCategory)
    {
    }

    public function update(Request $request, FeaturedCategory $featuredCategory)
    {
    }

    public function destroy(FeaturedCategory $featuredCategory)
    {
    }
}
