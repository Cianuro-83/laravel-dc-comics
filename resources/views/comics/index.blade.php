@extends('layouts.app')

@section('content')
<h1 class="py-3 text-center fw-bolder">INDEX</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th class="text-white text-uppercase" scope="col">#</th>
            <th class="text-white text-uppercase" scope="col">Titolo</th>
            <th class="text-white text-uppercase" scope="col">Descrizione</th>
            <th class="text-white text-uppercase" scope="col">Thumb</th>
            <th class="text-white text-uppercase" scope="col">Prezzo</th>
            <th class="text-white text-uppercase" scope="col">Serie</th>
            <th class="text-white text-uppercase" scope="col">Data uscita</th>
            <th class="text-white text-uppercase" scope="col">Tipo</th>
            <th class="text-white text-uppercase" scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
              <th class="text-white" scope="row">{{$comic->id}}</th>
              <td class="text-white">{{$comic->title}}</td>
              <td class="text-white"><p class="truncate">{{$comic->description}}</p></td>
              <td><img src="{{$comic->thumb}}" alt="" class="scb-thumb"></td>
              <td class="text-white">{{$comic->price}} $ </td>
              <td class="text-white">{{$comic->series}}</td>
              <td class="text-white">{{$comic->sale_date}}</td>
              <td class="text-white">{{$comic->type}}</td>
              <td> 
                <div class="mb-3">
                  <a href="{{route('comics.edit',$comic )}}">
                  <button type="button" class="btn btn-outline-warning">MODIFICA</button></a>

                </div>
                <div>
                  <a href="{{route('comics.show',$comic )}}">
                    <button type="button" class="btn btn-outline-success">DETTAGLI</button></a>
                    
                  </div>
                  
                  
                  
                  
                  <td> 
              </td>
              </td>

              
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection