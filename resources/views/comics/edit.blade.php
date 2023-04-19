@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-3 text-uppercase text-center font-weight-bolder text-danger">modifica il comic: <br>  {{$comic->title}}</h1>
<div class="row">
    <div class="col-12">
        <form action="{{route("comics.update", $comic)}}" method="POST">
          @csrf
          @method("PUT")

            <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">TITOLO</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
              </div>
            </div>

            <div class="row mb-3">
                <label for="thumb" class="col-sm-2 col-form-label">THUMB</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">PREZZO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>
              </div>
  
              <div class="row mb-3">
                  <label for="series" class="col-sm-2 col-form-label">SERIE</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="sale-date" class="col-sm-2 col-form-label">DATA DI USCITA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sale-date" name="sale_date" value="{{$comic->sale_date}}">
                    </div>
                  </div>
      
                  <div class="row mb-3">
                      <label for="type" class="col-sm-2 col-form-label">TIPOLOGIA</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"  style="height: 200px" >{{$comic->description}}
                        </textarea>
                        <label class="text-black" for="description">MODIFICA DESCRIZIONE

                        </label>
                      </div>
            
            <button type="submit" class="btn btn-primary">AGGIORNA COMICS</button>
          </form>

          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
  
    </div>
</div>




@endsection