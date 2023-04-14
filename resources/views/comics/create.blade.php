@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-3 text-uppercase text-center font-weight-bolder text-warning">aggiungi un nuovo comics</h1>
<div class="row">
    <div class="col-12">
        <form>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">TITOLO</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputComic1">
              </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">THUMB</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputComic2">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">PREZZO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputComic3">
                </div>
              </div>
  
              <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">SERIE</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputComic4">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">DATA DI USCITA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputComic5">
                    </div>
                  </div>
      
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">TIPOLOGIA</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputComic6">
                      </div>
                    </div>
                   
                   
                   
                   
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="imputComics7" style="height: 200px" ></textarea>
                        <label class="text-black" for="floatingTextarea2Disabled">INSERISCI DESCRIZIONE</label>
                      </div>
            
            <button type="submit" class="btn btn-primary">AGGIUNGI NUOVO COMICS</button>
          </form>
    </div>
</div>




@endsection