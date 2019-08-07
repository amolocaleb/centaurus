@extends('layouts.app')

@section('content')
@include('partials.masthead')
@include('partials.services')
    
@endsection

@push('styles')
<link rel="stylesheet" href="{{secure_asset('css/main.css')}}" />



@endpush