@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد اسلاید جدید</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="link">لینک</label>
                            <input type="text" class="form-control" name="link" id="link">
                        </div>

                        <div class="form-group">
                            <label for="image">تصویر</label>
                            <input type="file" name="image" id="image" class="form-control">
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
