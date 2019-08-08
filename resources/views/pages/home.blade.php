@extends('layouts.app')

@section('content')
@include('partials.masthead')
@include('partials.services')
    <button class="submit">Submit Me</button>
@endsection

@push('styles')
<link rel="stylesheet" href="/css/main.css" />



@endpush