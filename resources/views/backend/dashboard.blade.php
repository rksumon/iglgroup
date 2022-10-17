@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <div class="container col-10">

            <h3>Add Sister Concern</h3>
            <br>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sister Concern Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Short Description</label>
                    <input type="text" name="short_description" class="form-control" id="exampleInputPassword1" placeholder="Short desc...">
                </div>
                <br>
                <div class="form-group">
                    <label for="longDescription">Long Description</label>
                    <textarea name="long_description" class="form-control" id="longDescription" rows="3"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
