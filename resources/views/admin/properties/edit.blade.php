@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویرایش مشخصات </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('properties.update',$property)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$property->title}}">
                        </div>

                        <div class="form-group">
                            <label for="property_group_id"> گروه مشخصات</label>
                            <select name="property_group_id" id="property_group_id" class="form-control">
                                @foreach($groups as $group)

                                    <option value="{{$group->id}}"
                                            @if($group->id == $property->property_group_id) selected @endif
                                    >{{$group->title}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="submit" name="submin" id="submit" value="ثبت" class="btn btn-primary">
                        </div>


                    </form>
                </div>
                @include('errors')
            </div>
        </div>
    </div>

@endsection
