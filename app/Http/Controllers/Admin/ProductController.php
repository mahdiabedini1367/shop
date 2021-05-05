<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('admin.products.create', [
            'brands' => Brand::all(),
            'categories' => Category::all(),
        ]);
    }


    public function store(ProductRequest $request)
    {
        $path = $request->file('image')->store('public/image/products');

        Product::query()->create([
            'category_id' => $request->get('category_id'),
            'brand_id' => $request->get('brand_id'),
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'cost' => $request->get('cost'),
            'description' => $request->get('description'),
            'image' => $path,
        ]);
        return redirect(route('products.index'));
    }


    public function show(Product $product)
    {
        dd("hello to show admin manager");
    }


    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $slugIsUsed=Product::query()
                            ->where('slug',$request->get('slug'))
                            ->where('id','!=',$product->id)
                            ->exists();
        if ($slugIsUsed){
            return back()->withErrors(['slug' => 'این اسلاگ قبلا استفاده شده است']);
        }


        $path = $product->image;
//        dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/image/products');
        }

        $product->update([
            'category_id' => $request->get('category_id',$product->category_id),
            'brand_id' => $request->get('brand_id', $product->brand_id),
            'name' => $request->get('name', $product->name),
            'slug' => $request->get('slug', $product->slug),
            'cost' => $request->get('cost', $product->cost),
            'description' => $request->get('description', $product->description),
            'image' => $path,
        ]);
        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        Storage::delete($product->image);

        $product->delete();

        return redirect(route('products.index'));
    }
}
