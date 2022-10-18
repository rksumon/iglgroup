@extends('backend.layouts.master')
@section('style')

@endsection
@section('topbar')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">View Gallery</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Gallery</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="bi bi-plus-circle"></i>
                    <a  href="{{url('admin/gallery/create')}}">Create New</a></button>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row el-element-overlay">
        <div class="col-md-12">
            <h4 class="card-title">Gallery page</h4>
            <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6></div>
        @if(!$galleries->isEmpty())
            @foreach($galleries as $gallery)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class=" el-overlay-1"><a href="{{url('admin/gallery/photos/'.$gallery->id)}}"><img src="{{asset('image/gallery/'.$gallery->image)}}" alt="user" /></a>
                                <div class="">
                                    <ul class="el-info">
                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('image/gallery/'.$gallery->image)}}"><i class="icon-magnifier"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title"><a href="{{url('admin/gallery/photos/'.$gallery->id)}}">{{$gallery->program}}</a></h3>
                                <br/> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            No data found !
        @endif


    </div>
    {{--    <div class="card">--}}
    {{--        @if ($message = Session::get('success'))--}}
    {{--            <div class="alert alert-success alert-block">--}}
    {{--                <strong>{{$message}}</strong>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <div class="card-body">--}}
    {{--            <h4 class="card-title">Gallery </h4>--}}
    {{--            <h6 class="card-subtitle">All photos</h6>--}}
    {{--            <div class="table-responsive m-t-40">--}}
    {{--                <table id="myTable" class="table table-striped border">--}}
    {{--                    <thead>--}}
    {{--                    <tr>--}}
    {{--                        <th>No</th>--}}
    {{--                        <th>Year</th>--}}
    {{--                        <th>Program Name</th>--}}
    {{--                        <th>Caption</th>--}}
    {{--                        <th>Action</th>--}}
    {{--                    </tr>--}}
    {{--                    </thead>--}}
    {{--                    <tbody>--}}
    {{--                    @php--}}
    {{--                        $id = 0;--}}
    {{--                    @endphp--}}
    {{--                    @foreach($galleries as $gallery)--}}
    {{--                    <tr>--}}
    {{--                        <td>{{$id+=1}}</td>--}}
    {{--                        <td>{{$gallery->year}}</td>--}}
    {{--                        <td>{{$gallery->program}}</td>--}}
    {{--                        <td>{{$gallery->caption}}</td>--}}
    {{--                        <td>--}}
    {{--                            <a class="btn btn-danger" onclick="return confirm('Are you want to delete')" href="{{url('admin/gallery/delete/'.$gallery->id)}}">Delete</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    @endforeach--}}
    {{--                    </tbody>--}}
    {{--                </table>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection
{{--@section('content')--}}
{{--    <div class="row el-element-overlay">--}}
{{--        <div class="col-md-12">--}}
{{--            <h4 class="card-title">Gallery page</h4>--}}
{{--            <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6></div>--}}
{{--        @if ($message = Session::get('success'))--}}
{{--            <div class="alert alert-success alert-block">--}}
{{--                <strong>{{$message}}</strong>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @foreach($galleries as $gallery)--}}
{{--        <div class="col-lg-3 col-md-6">--}}
{{--            <div class="card">--}}
{{--                <div class="el-card-item">--}}
{{--                    <div class="el-card-avatar el-overlay-1"> <img src="{{asset('image/gallery/'.$gallery->image)}}" alt="user" />--}}
{{--                        <div class="el-overlay">--}}
{{--                            <ul class="el-info">--}}
{{--                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('image/gallery/'.$gallery->image)}}"><i class="icon-magnifier"></i></a></li>--}}
{{--                                <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="el-card-content">--}}
{{--                        <h3 class="box-title">{{$gallery->caption}}</h3> <span> {{$gallery->program}}</span> ,<span> {{$gallery->year}}</span>--}}
{{--                        <small>--}}
{{--                            <br>--}}
{{--                            <a class="btn btn-danger" onclick="return confirm('Are you want to delete')" href="{{url('admin/gallery/delete/'.$gallery->id)}}">Delete</a>--}}
{{--                        </small>--}}
{{--                        <br/> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}

{{--    </div>--}}


{{--@endsection--}}
