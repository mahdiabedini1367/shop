@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h1 class="box-title">
                        محصولات
                    </h1>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>

                                <th>#</th>
                                <th>نام محصول</th>
                                <th>قیمت</th>
                                <th>برند</th>
                                <th>دسته بندی</th>
                                <th>تاریخ ایجاد</th>
                                <th>تصویر</th>
                                <th>گالری تصاویر</th>
                                <th>تخفیف</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                @php
                                    @endphp
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->cost}}</td>
                                    <td>{{$product->brand->name}}</td>
                                    <td>{{$product->category->title}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <img src="{{str_replace('public','/storage',$product->image)}}"
                                             style="min-width: 50px;max-width: 50px;min-height: 50px;max-height: 50px;"
                                        />
                                    </td>
                                    <td>

                                        <a href="{{route('products.pictures.index',[$product])}}"
                                           class="btn btn-sm btn-warning">
                                            گالری
                                        </a>
                                    </td>
                                    <td>

                                        @if(!$product->hasDiscount() )
                                            <a class="btn btn-sm btn-app"
                                               href="{{route('products.discounts.create',$product)}}">
                                                <span
                                                    class="badge bg-teal"> @if($product->hasDiscount())    {{$product->discount->value}} @else
                                                        0 @endif </span>
                                                <i class="fa fa-inbox"></i> ایجاد تخفیف
                                            </a>
                                        @else
                                            <p>{{$product->discount->value}}</p>
                                            <form action="{{route('products.discounts.destroy',['product'=>$product,'discount' => $product->discount])}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" value="حذف" class="btn btn-sm btn-danger">

                                            </form>
                                        @endif

                                        {{--                                        <a href="{{route('products.pictures.index',[$product])}}"--}}
                                        {{--                                           class="btn btn-sm btn-warning">--}}
                                        {{--                                            --}}
                                        {{--                                        </a>--}}
                                    </td>
                                    <td>
                                        <a href="{{route('products.edit', $product)}}"
                                           class="btn btn-sm btn-primary">ویرایش</a>
                                    </td>
                                    <td>
                                        <form action="{{route('products.destroy', $product)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>نام محصول</th>
                                <th>قیمت</th>
                                <th>برند</th>
                                <th>دسته بندی</th>
                                <th>تاریخ ایجاد</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Superieur Admin for Data Table -->
    <script src="/admin/js/pages/data-table.js"></script>


@endsection
