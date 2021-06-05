@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">دسته بندی ویژه</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('featuredCategory.store')}}" method="post">
                        @csrf



                        <div class="form-group">
                            <label for="category_id">دسته ویژه</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>دسته ویژه را انتخاب کنید ..</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                    @if($featuredCategory->category_id == $category->id) selected  @endif
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
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
