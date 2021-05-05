<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.brands.index', [
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Requests\Admin\BrandRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(BrandRequest $request)
    {
//        این تابع اسم خود فایلی که کاربر بر روی فایل اش گذاشته را بر میگرداند
        $namefile = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/image/brands', $namefile);
        $path = $request->file('image')->store('public/image/brands');
        Brand::query()->create([
            'name' => $request->get('name'),
            'image' => $path,
        ]);
        return redirect(route('brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $path = $brand->image;
//        dd($request->hasFile('image'));
//        برای ذخیره کردن با اسمی که کاربر برای نام فایل اش گذاشته
//        if ($request->hasFile('image')) {
//            $path = $request->file('image')->storeAs(
//                'public/image/brands/', $request->file('image')->getClientOriginalName()
//            );
//        }
//        برای ذخیره کردن فایل با نام تولید شده در برنامه که دچار تداخل نشیم
        if ($request->hasFile('image')) {
            Storage::delete($brand->image);
            $path = $request->file('image')->store('public/image/brands/');
        }

        $brand->update([
            'name' => $request->get('name'),
            'image' => $path
        ]);

        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Brand $brand)
    {
        Storage::delete($brand->image);

        $brand->delete();


        return redirect(route('brands.index'));
    }
}
