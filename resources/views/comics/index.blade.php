@extends('layouts.app')

@section('content')
<h1 class="py-3">INDEX</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Thumb</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data uscita</th>
            <th scope="col">Tipo</th>
            <th scope="col">Anteprima</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
              <th scope="row">{{$comic->id}}</th>
              <td>{{$comic->title}}</td>
              <td class=""><p class="truncate">{{$comic->description}}</p></td>
              <td><img src="{{$comic->thumb}}" alt="" class="scb-thumb"></td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->sale_date}}</td>
              <td>{{$comic->type}}</td>
              <td><a href=""><button>SEE MORE</button></a></td>
              
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection