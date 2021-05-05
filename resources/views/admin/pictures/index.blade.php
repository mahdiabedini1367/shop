@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="card p-5">
            <div class="cord-body">
                <form action="{{route('products.pictures.store',[$product])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">آپلود</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="ارسال" class="btn btn-sm btn-outline-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
    @include('errors')

    <div class="row">
        @foreach($product->pictures as $picture)
            <div class="col-md-12 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{str_replace('public','/storage',$picture->path)}}" alt="Card image cap">
                    <div class="card-body">
                        <form
                            action="{{route('products.pictures.destroy',['product'=>$product,'picture'=>$picture])}}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-sm btn-danger">

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        @endforeach
    </div>
@endsection
