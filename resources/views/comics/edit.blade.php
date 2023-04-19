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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$comic->title)}}">
                @error('title')
                    <div class="invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
                <label for="thumb" class="col-sm-2 col-form-label">THUMB</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
                  @error('thumb')
                    <div class="invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">PREZZO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price)}}">
                  @error('price')
                    <div class="invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
  
              <div class="row mb-3">
                  <label for="series" class="col-sm-2 col-form-label">SERIE</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series)}}">
                    @error('series')
                    <div class="invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="sale-date" class="col-sm-2 col-form-label">DATA DI USCITA</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
                      @error('sale_date')
                    <div class="invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
                    </div>
                  </div>
      
                  <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">TIPOLOGIA</label>
                    <select class="scb-select form-select form-select-md mb-1 @error('type') is-invalid @enderror" aria-label="Default select example" name="type" id="type">
                      <option selected>Scegli tra le tipologie disponibili</option>
                      @foreach ($types as $key=>$value)
                      <option @selected( old('type', $comic->type) == $key ) value="{{$key}}">{{$value}}</option>
                      @endforeach
                    </select>
                    @error('type')
                    <div class="scb-sel invalid-feedback fw-bold">
                      {{ $message }}
                    </div>
                  @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Leave a comment here" id="description" name="description"  style="height: 200px" >{{ old('description',$comic->description)}}
                        </textarea>
                        @error('description')
                  <div class="invalid-feedback fw-bold">
                    {{ $message }}
                  </div>
                @enderror
                        <label class="text-black" for="description">MODIFICA DESCRIZIONE

                        </label>
                      </div>
            
            <button type="submit" class="btn btn-primary">AGGIORNA COMICS</button>
          </form>

    </div>
</div>




@endsection