@extends('layouts.email')
@section('content')
    <div class="container">
        <p>The <code class="h2">body</code> of evidence is here</p>
        <a href="twitter.com/hecklemaniac" class="btn btn-sm btn-primary">Hecklemaniac</a>
        {{html_entity_decode($data->msg)}}
    </div>
@endsection
