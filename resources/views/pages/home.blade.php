@extends('layouts.app')

@section('content')
    @include('pages.home.masthead')
    @include('pages.home.services')
    @include('pages.home.team')
    <button class="submit">Submit Me</button>
@endsection

@push('styles')
<link rel="stylesheet" href="/css/main.css" />
@endpush