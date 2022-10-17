@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upload Image</h4>
                    @if(count($errors) > 0 )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <h6 class="card-subtitle"></h6>
                    <form method="POST" enctype="multipart/form-data" action="{{url('admin/gallery/submit')}}" class="form-horizontal p-t-20">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Year*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                    <select  name="year" class="form-select" aria-label="Default select example">
                                        <option selected>Select Year</option>
                                        <option value="">2020</option>
                                        <option value="">2021</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Program Name*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-pencil-alt2"></i></span>
                                    <input type="text" name="program" class="form-control" id="exampleInputEmail3" >


                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-image"></i></span>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail3" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image Caption*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti-smallcap"></i></span>
                                    <input type="text" name="caption" class="form-control" id="exampleInputEmail3" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
