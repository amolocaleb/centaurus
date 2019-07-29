@extends('layouts.app')

@section('content')

@include('partials.services')
    
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('css/main.css')}}" />



@endpush