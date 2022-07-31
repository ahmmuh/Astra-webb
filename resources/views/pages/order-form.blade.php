@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <h3>Beställning av tjänst(er)</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam magni architecto quibusdam aliquam quia eius consequatur velit esse beatae! Praesentium?</p>
        </div>

        <div class="col-lg-7">
            <div class="mb-3">
                <input type="text" class="form-control" id="firstname" aria-describedby="textHelp"
                placeholder="Förnamn">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="lastname" aria-describedby="textHelp" placeholder="Efternamn">
            </div>
            <div class="mb-3">

                <input type="email" class="form-control" id="email" aria-describedby="textHelp" placeholder="E-post">
            </div>

            <div class="form-group">

                <input type="number" class="form-control" id="telefon" aria-describedby="textHelp" placeholder="Telefon">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="squr" aria-describedby="textHelp"
                placeholder="Hur många kvadratmeter gäller det? t.ex 300m² " >
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Välj tjänst</option>
                <option value="1">Kontorstädning</option>
                <option value="2">Butikstädning</option>
                <option value="3">Lagerstädning</option>
                <option value="4">Byggstädning</option>
                <option value="6">Golvvård</option>
                <option value="8">Flyttstädning</option>
                <option value="7">Hemstädning</option>
                <option value="9">Trappstädning</option>
                
            </select>

            <div class="mb-3">
                <input type="date" class="form-control" id="squr" aria-describedby="textHelp"
                placeholder="Start datum t.ex 2022-08-25 ">
            </div>

            <div class="mb-3">
                <input type="date" class="form-control" id="squr" aria-describedby="textHelp"
                placeholder="Slut datum t.ex 2022-09-25 ">
            </div>


            <div class="mb-3">
                <textarea class="form-control" id="meddelande" rows="3">Extra information
                </textarea>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button  class="btn btn-block blue-background border rounded-pill" type="submit">Beställ</button>
            </div>

           

        </div>
        
    </div>
   
</div>
    
@endsection