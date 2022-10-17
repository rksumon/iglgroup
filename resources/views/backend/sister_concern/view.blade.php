@extends('backend.layouts.master')
@section('topbar')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Sister Concern</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Sister Concern</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i>
                    <a  href="{{url('admin/sister_concern/create')}}">Create New</a></button>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sister Concern</h4>
                    <div class="table-responsive">
                        <table class="table color-table dark-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>url</th>
                                <th>logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $id = 0;
                            @endphp
                            @foreach($sisters as $sister)
                            <tr>
                                <td>{{$id+=1}}</td>
                                <td>{{$sister->name}}</td>
                                <td>{{$sister->short_description}}</td>
                                <td>{{$sister->long_description}}</td>
                                <td>{{$sister->url}}</td>
                                <td><img src="{{asset('image/concern/'.$sister->logo)}}" height="50px" alt=""></td>
                                <td><a class="btn btn-info" href="{{url('admin/sister_concern/edit/'.$sister->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{url('admin/sister_concern/delete/'.$sister->id)}}">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
