@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد تخفیف برای محصول {{$product->name}} </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('products.discounts.store',$product)}}" method="post" >
                        @csrf

                        <div class="form-group">
                            <label for="value">میزان تخفیف :</label>
                            <input type="number" class="form-control" name="value" id="value" min="1" max="100">
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
