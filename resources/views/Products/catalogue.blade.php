@extends('layouts.master',['page'=>'products'])
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
@section('Content')
<!-- Title -->
<section class="Title">
    <div class="container-fluid text-white text-center">
        <h1>@foreach ($Title as $titulo){!!$titulo->name!!}@endforeach</h1>
    </div>
</section>
<section class="Popular">
    <div class="container">
        <div class="row">
            <h2>Producto Destacado!!</h2>
            <div class="outstanding">
                <img src="" alt="Outstanding product">
            </div>
        </div>
    </div>
</section>

@endsection