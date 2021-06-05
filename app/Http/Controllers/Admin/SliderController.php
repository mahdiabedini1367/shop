<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    public function index()
    {
        return view('admin.sliders.index',[
            'sliders'=>Slider::all(),
        ]);
    }


    public function create()
    {
        return view('admin.sliders.create');
    }


    public function store(SliderRequest $request)
    {


        $path = $request->file('image')->store('public/image/sliders');
        Slider::query()->create([
            'link' => $request->get('link'),
            'image' => $path,
        ]);
        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',[
            'slider'=>$slider,
        ]);
    }


    public function update(Request $request, Slider $slider)
    {
        $path = $slider->image;

//        برای ذخیره کردن فایل با نام تولید شده در برنامه که دچار تداخل نشیم
        if ($request->hasFile('image')) {
            Storage::delete($slider->image);
            $path = $request->file('image')->store('public/image/sliders/');
        }

        $slider->update([
            'link' => $request->get('link'),
            'image' => $path
        ]);


        return redirect(route('sliders.index'));

    }


    public function destroy(Slider $slider)
    {
        Storage::delete($slider->image);

        $slider->delete();

        return redirect(route('sliders.index'));
    }
}
