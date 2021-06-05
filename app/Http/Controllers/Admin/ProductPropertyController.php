<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPropertyController extends Controller
{
    public function index(Product $product)
    {
        return view('admin.productProperty.index',[
           'product'=>$product,
        ]);
    }


    public function create(Product $product)
    {
        return view('admin.productProperty.create',[
            'product'=>$product,

        ]);
    }

    public function store(Request $request,Product $product)
    {


        $properties =collect($request->get('properties'))->filter(function ($item){
//            dd($item['value']);
            if (!empty($item['value'])){
                return $item;
            }
        })
        ;

//        dd($properties,gettype($properties) ,$properties,$request->get('properties'))    ;
//        dd($properties, $request->get('properties'));


        $product->properties()->sync($properties);

        return redirect()->back();


    }

}
