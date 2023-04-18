@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-3 text-uppercase text-center font-weight-bolder text-warning">aggiungi un nuovo comics</h1>
<div class="row">
    <div class="col-12">
        <form action="{{route("comics.store")}}" method="POST">
          @csrf
            <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">TITOLO</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
              </div>
            </div>

            <div class="row mb-3">
                <label for="thumb" class="col-sm-2 col-form-label">THUMB</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
              </div>

              <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">PREZZO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="price" name="price">
                </div>
              </div>
  
              <div class="row mb-3">
                  <label for="series" class="col-sm-2 col-form-label">SERIE</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="series" name="series">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="sale-date" class="col-sm-2 col-form-label">DATA DI USCITA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sale-date" name="sale_date">
                    </div>
                  </div>
      
                  <div class="row mb-3">
                      <label for="type" class="col-sm-2 col-form-label">TIPOLOGIA</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="type" name="type">
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 200px" ></textarea>
                        <label class="text-black" for="description">INSERISCI DESCRIZIONE</label>
                      </div>
            {{-- CHECKBOX --}}
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkbox">
                        <label class="form-check-label" for="flexCheckDefault">
                          RESTA NELLA PAGINA DI CREAZIONE
                        </label>
                      </div>


            <button type="submit" class="btn btn-primary">AGGIUNGI NUOVO COMICS</button>
          </form>
    </div>
</div>




@endsection