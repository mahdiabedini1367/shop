{{-- @dd(666555)--}}
{{--@dd(session()->get('success') )--}}
@if(session()->has('success'))
{{--    <div class="row">--}}
{{--        <div class="col-sm-12 p-5 m-autos">--}}
            <div class="alert alert-success alert-dismissible ">
                <button class="close" data-dismiss="alert" area-hidden="true">x</button>

                <h4><i class="icon fa fa-check"></i>پیام سیستم</h4>

                {{session()->get('success')}}
            </div>
{{--        </div>--}}
{{--    </div>--}}
@endif
