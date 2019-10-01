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
<div class="card uper">
  <div class="card-header">
    Add New Developers
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
        <div class="col-md-6">

        <form method="post" action="{{ route('developers.store') }}" enctype="multypart/form-data">
            <div class="form-group">
                @csrf
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="price">Date of Birth :</label>
                <input type="text" class="form-control" name="dob"/>
            </div>
            <div class="form-group">
                <label for="quantity">Email :</label>
                <input type="text" class="form-control" name="email"/>
            </div>
            <div class="form-group">
              <label for="quantity">Marital Status:</label>
              <input type="text" class="form-control" name="status"/>
          </div>
          <div class="form-group">
              <label for="quantity">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="quantity">Bio:</label>
              <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="quantity">Profile Pic: </label>
            <p>Jpeg images</p>
            <br>
            <input type="file"  name="profile_pic"/>
        </div>
            <button type="submit" class="btn btn-primary">Add Developer</button>
        </form>
    </div>
    </div>
     
  </div>
</div>
@endsection