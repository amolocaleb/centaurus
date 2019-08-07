@extends('layouts.app')

@section('content')

@include('partials.services')
    
@endsection

@push('styles')
<link rel="stylesheet" href="{{secure_asset('css/main.css')}}" />



@endpush