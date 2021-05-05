@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویرایش برند {{ $brand->name }} </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('brands.update', $brand)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">نام</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$brand->name}}">
                        </div>

                        <div class="form-group">
                           <div class="row">
                               <div class="col-sm-6">
                                   <label for="image">تصویر</label>
                                   <input type="file" class="form-control" name="image" id="image" >
                               </div>
                               <div class="col-sm-6">
                                   <img src="{{str_replace('public','/storage',$brand->image)}}"
                                        style="min-width: 50px;max-width: 50px;min-height: 50px;max-height: 50px;"
                                   />
                               </div>
                           </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submin" id="submit" value="ثبت" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
