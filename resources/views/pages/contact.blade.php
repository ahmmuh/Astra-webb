@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-5">
             <h4>Kontakta oss</h4>
             <p>072888394</p>
             <p>info@astrastad.se</p>
         </div>
         <div class="col-7">
            <form>
                <div class="mb-3">
                  <label for="firstname" class="form-label">Förnamn</label>
                  <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">Efternamn</label>
                  <input type="text" class="form-control" id="lastname">
                </div>

                <div class="mb-3">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="number" class="form-control" id="telefon">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">E-post</label>
                    <input type="email" class="form-control" id="email">
                  </div>

                  <select class="form-select" aria-label="Default select example">
                      <option selected>Välj service</option>
                      <option value="1">Vill beställa tjänst</option>
                      <option value="2">Problem</option>
                      <option value="3">Missnöjd</option>
                  </select>

                  <div class="mb-3">
                      <label for="meddelande" class="form-label">Meddelande</label>
                      <textarea class="form-control" id="meddelande" rows="3"></textarea>
                  </div>
              
                <button type="submit" class="btn btn-primary">Skicka</button>
              </form>
        </div>
     </div>
 </div>
@endsection