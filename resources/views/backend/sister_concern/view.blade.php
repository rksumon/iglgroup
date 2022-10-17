@extends('backend.layouts.master')

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
                                <th>Name</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>url</th>
                                <th>logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sisters as $sister)
                            <tr>
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
