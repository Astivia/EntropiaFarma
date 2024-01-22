@extends('layouts.master',['page'=>'services'])
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
@section('Content')
<!-- Title -->
<section class="Title">
    <div class="container-fluid text-white text-center">
        <h1>@foreach ($Title as $titulo){!!$titulo->name!!}@endforeach</h1>
    </div>
</section>
@endsection