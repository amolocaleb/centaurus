@extends('layouts.app')

@section('content')

@push('styles')
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
@endpush



@section('content')
<style>
  .uper {
    margin: 40px 0px;

  }
</style>
<div class="container">
<div class="uper">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div><br />
        @endif
</div>

 
<div class="col-md-8">
  @if(count($developers)>0)



        <table class="table table-striped">
          <thead>
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Title</td>
                <td colspan="3">Action</td>
              </tr>
          </thead>
          <tbody>
              @foreach($developers as $developer)
              <tr>
                  <td>{{$developer->id}}</td>
                  <td>{{$developer->name}}</td>
                  <td>{{$developer->email}}</td>
                  <td>{{$developer->title}}</td>

                  <td><a href="/developers/{{$developer->id}}/edit" class="btn btn-primary">Edit</a></td>
                  <td>
                      <form action="{{ route('developers.destroy', $developer->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                  </td>
                  <td>
                    <a href="/developers/{{$developer->id}}" class="btn btn-success">View</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        @else
        <h2>No developers Found</h2>
        @endif
      </div>
      
      <div class="col-md-4">
        <a href="/developers/create" class="btn btn-primary">Add Developer</a>
      </div>
      <div>
        </div>
          @endsection