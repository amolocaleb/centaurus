@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h3>New About Us</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong> Whoops</strong>there is prob with you input. <br>
                <ul>
                    @foreach($errors as $error)
                        <li>{{$error}}</li>
                        @endforeach
                </ul>
            </div>
            @endif

        <form action="{{route('admabout.store')}}" method="post">

            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>Title:</strong>

                    <input type="text" name="title" class="form-control" placeholder="Keep calm">
                </div>

                <div class="col-md-12">
                    <strong>Description:</strong>
                    <textarea class="form-control" placeholder="description" name="description"
                    rows="8" cols="80"
                    >

                    </textarea>

                </div>
                <div class="col-md-12">
                    <a href="{{route('admabout.index')}}" class="btn btn-success">Back</a>
                    <button type="submit" name="button" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>


    </div>

    @endsection
