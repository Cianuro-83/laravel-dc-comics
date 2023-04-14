@extends('layouts.app')

@section('content')
<div class="container">
   <h1 class="text-uppercase fw-bolder text-info text-center"> {{$comic->title}}</h1>
</div>
   <div class="container scb-row">
        <div class="col-6">
            <img src="{{$comic->thumb}}" alt=""></div>
        <div class="col-6 ms-4">
            <p class="text-uppercase fw-bolder   text-warning">descrizione:</p>
            <p class="">{{$comic->description}}</p>
            <p class="text-uppercase fw-bold text-danger"> nome serie: {{$comic->series}} </p>
        </div>
    </div>
    <div class="container py-5 d-flex justify-content-center">
    <col-3> 
        <p class="text-uppercase fw-bold text-warning"> prezzo: {{$comic->price}} $ </p>
    </col-3>
    <col-3 class="mx-4">
        <p class="text-uppercase fw-bold text-success"> disponibile dal: {{$comic->sale_date}} </p>
    </col-3>
    <col-3>
    <p class="text-uppercase fw-bold text-info"> tipologia: {{$comic->type}} </p>
    </col-3>

@endsection