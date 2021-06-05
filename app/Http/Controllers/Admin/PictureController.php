<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPictureRequest;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{

    public function store(ProductPictureRequest $request, Product $product)
    {
        $path = $request->file('image')->store('public/image/products');;
        $product->pictures()->create([
            'path' => $path,
            'mime' => $request->file('image')->getClientMimeType(),
            'size' => $request->file('image')->getSize(),
        ]);

        return redirect()->back();
    }


    public function index(Product $product)
    {
//        dd($product);
        return view('admin.pictures.index',[
            'product'=>$product
        ]);
    }

    public function create(Product $product)
    {
    }


    public function show(Picture $picture)
    {
    }


    public function edit(Product $product  ,Picture $picture)
    {
    }


    public function update(Product $product  ,Request $request, Picture $picture)
    {
    }


    public function destroy(Product $product  ,Picture $picture)
    {

        Storage::delete($picture->path);
        $picture->delete();
        $product->deletePicture($picture);


        return redirect()->back();
    }
}
