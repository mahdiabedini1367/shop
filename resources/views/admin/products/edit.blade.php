@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویرایش محصول </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('products.update', $product)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">نام محصول</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label for="slug"> اسلاگ</label>
                            <input type="text" class="form-control" name="slug" id="slug" value="{{$product->slug}}">
                        </div>

                        <div class="form-group">
                            <label for="cost">قیمت محصول</label>
                            <input type="number" class="form-control" name="cost" id="cost" value="{{$product->cost}}">
                        </div>

                        <div class="form-group">
                            <label for="category_id">دسته بندی محصول</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}"
                                        @if($category->id == $product->category_id) selected @endif>
                                        {{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="brand">برند محصول</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                @foreach($brands as $brand)
                                    <option
                                        value="{{$brand->id}}" @if($brand->id == $product->brand_id) selected @endif >
                                        {{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">توضیحات محصول</label>
                            <textarea class="form-control" name="description"
                                      id="description">{{$product->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="image">تصویر</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{str_replace('public','/storage',$product->image)}}" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="submit" name="submin" id="submit" value="ثبت" class="btn btn-primary">
                        </div>
                    </form>
                    @include('errors')
                </div>
            </div>
        </div>
    </div>

@endsection
