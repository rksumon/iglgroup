@extends('backend.layouts.master')
@section('style')

@endsection
@section('topbar')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Trash</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Gallery</a></li>
                    <li class="breadcrumb-item active">Trash</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i>
                    <a  href="{{url('admin/gallery/view')}}">View</a></button>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Gallery Trash </h4>
            <h6 class="card-subtitle">All deleted photos</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-striped border">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Year</th>
                        <th>Program Name</th>
                        <th>image</th>
                        <th>Caption</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 0;
                    @endphp
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{$id+=1}}</td>
                            <td>{{$gallery->year}}</td>
                            <td>{{$gallery->program}}</td>
                            <td><img src="{{asset('image/gallery/'.$gallery->image)}}" height="50" width="80" alt=""></td>
                            <td>{{$gallery->caption}}</td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you want to delete')" href="{{url('admin/gallery/trash/restore/'.$gallery->id)}}">Restore</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
