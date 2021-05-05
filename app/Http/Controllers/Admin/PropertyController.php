<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\PropertyGroup;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.properties.index',[
            'properties'=>Property::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.properties.create',[
            'groups'=>PropertyGroup::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(PropertyRequest $request)
    {
        Property::query()->create([
            'title'=>$request->get('title'),
            'property_group_id'=>$request->get('property_group_id')
        ]);

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Property $property)
    {
        return view('admin.properties.edit',[
            'property'=>$property,
            'groups' =>PropertyGroup::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return
     */
    public function update(PropertyRequest $request, Property $property)
    {
        $property->update([
            'title'=>$request->get('title',$property->title),
            'property_group_id'=>$request->get('property_group_id',$property->property_group_id),
        ]);

        return redirect(route('properties.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return
     */
    public function destroy(Property $property)
    {

        return redirect(route('properties.index'));

    }
}
