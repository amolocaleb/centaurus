@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-10">
                <h2>About Crud</h2>
            </div>

            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{route('admabout.create')}}">Create New About</a>
            </div>
        </div>

        @if($message=Session::get('success'))

            <div class="alert alert-success">
              <p>{{$message}}</p>

            </div>
            @endif
        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"><b>No.</b></th>
                <th width="300px"><b>Title</b></th>
                <th>Description</th>
                <th width="180px">Action</th>
            </tr>

            @foreach($abouts as $about)

                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->description}}</td>

                    <td>
              <form action="{{route('admabout.destroy',$about->id)}}" method="post">
                  <a class="btn btn-sm btn-success" href="{{route('admabout.show',$about->id)}}">Show</a>
                  <a class="btn btn-sm btn-warning" href="{{route('admabout.edit',$about->id)}}">Edit</a>

                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>

                    </td>

                </tr>
                @endforeach


        </table>
        {!! $abouts->links() !!}

    </div>

    @endsection
