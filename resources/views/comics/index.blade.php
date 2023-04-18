@extends('layouts.app')

@section('content')
<h1 class="py-3 text-center fw-bolder text-warning">COMICS LIST'S</h1>
<div class="container">
  <div class="my-4 d-flex justify-content-end">
    <form action="{{route('comics.destroy.all')}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" class="btn btn-danger btn fw-bolder text-end" value="CANCELLA TUTTO">
    </form>
</div>     
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
              <td class="scb-action">
                <div class="mt-2">
                  <a href="{{route('comics.show',$comic )}}">
                 <button type="button" class="btn btn-outline-success btn-sm fw-bolder scb-btn">DETTAGLI</button>
               </a>
               </div>

               <div class="mt-2">
                <a href="{{route('comics.edit',$comic )}}">
                  <button type="button" class="btn btn-outline-warning btn-sm me-3 fw-bolder scb-btn">MODIFICA</button>
                </a>
             </div>
             <div class="mt-2">
                <form action="{{route('comics.destroy',$comic )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-outline-danger btn-sm fw-bolder scb-btn" value="CANCELLA">
                </form>
           </div>     
              </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection