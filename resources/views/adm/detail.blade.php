@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>About Us</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group"><strong>Title </strong> {{$about->title}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description : </strong> {{$about->description}}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('admabout.index')}}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>


    </div>
@endsection
