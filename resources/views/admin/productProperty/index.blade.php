@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویژگی های محصول {{$product->name}}</h3>
                    <a  class="btn btn-success"
                        href="{{route('products.properties.create' , $product)}}">تغییر مقادیر ویژگی ها</a>
                </div>


                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>مقدار</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product->properties as $property)
                                <tr>
                                    <td>{{$property->id}}</td>
                                    <td>{{$property->title}}</td>
                                    <td>{{$property->pivot->value}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>مقدار</th>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

