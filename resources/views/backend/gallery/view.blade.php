@extends('backend.layouts.master')
@section('style')

<h2>hello</h2>
@endsection
@section('content')
    <div class="row el-element-overlay">
        <div class="col-md-12">
            <h4 class="card-title">Gallery page</h4>
            <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6></div>
        @foreach($galleries as $gallery)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="{{asset('image/gallery/'.$gallery->image)}}" alt="user" />
                        <div class="el-overlay">
                            <ul class="el-info">
                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('image/gallery/'.$gallery->image)}}"><i class="icon-magnifier"></i></a></li>
                                <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h3 class="box-title">{{$gallery->caption}}</h3> <span> {{$gallery->program}}</span> ,<span> {{$gallery->year}}</span>
                        <small>
                            <br>
                            <a class="btn btn-danger" onclick="prompt(confirm('Are you want to delete'))" href="{{url('admin/gallery/delete/'.$gallery->id)}}">Delete</a>
                        </small>
                        <br/> </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>


@endsection
