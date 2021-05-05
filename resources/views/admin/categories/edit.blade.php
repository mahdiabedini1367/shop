@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویرایش دسته بندی</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('categories.update', $category)}}" method="post">
                        @csrf
                        @method('PATCH')


                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" class="form-control" name="title" id="title"
                                   value="{{$category->title}}">
                        </div>

                        <div class="form-group">
                            <label for="category_id">دسته والد</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>
                                @foreach($categories as $parent)
                                    <option
                                        @if($parent->id == $category->category_id)
                                        selected
                                        @endif
                                        value="{{$parent->id}}">{{$parent->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>تخصیص گروه مشخصات </label>
                            <div class="row">
                                @foreach($properties as $property)
                                    <label for="{{$property->id}}" class="col-sm-2">
                                        <input type="checkbox" name="properties[]" value="{{$property->id}}"
                                               id="{{$property->id}}"
                                               style="opacity: 1 !important;position: static !important; left: 0;right: 0;padding: 2px;margin: 3px;"
                                               @if($category->hasPropertyGroup($property)) checked="checked"  @endif
                                        >{{$property->title}}
                                    </label>
                                @endforeach
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
