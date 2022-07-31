@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <h3>Skicka din ansökan redan idag!</h3>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsa officiis eaque autem, porro incidunt quam, laudantium necessitatibus sint perspiciatis soluta. Beatae atque nisi ipsum, ipsa qui possimus repellat sunt molestias at distinctio tempora soluta iste in dignissimos dolorum deserunt.
            </p>
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
                placeholder="Hur många år har du jobbat inom lokalvård?" >
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected> 1 år</option>
                <option value="1">2 år</option>
                <option value="2">3 år</option>
                <option value="3">4 år</option>
                <option value="4">5 år</option>
                <option value="6">6 år</option>
                <option value="8">7 år</option>
                <option value="7">8 år</option>
                
            </select>

            <div class="mb-3">
                <input type="file" class="form-control" id="squr" aria-describedby="textHelp"
                placeholder="Uppload ditt cv ">
            </div>
            <div class="mb-3">
                <label for="meddelande">Skriv några rader om dig själv!</label>
                <textarea class="form-control" id="meddelande" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button  class="btn btn-block blue-background border rounded-pill" type="submit">Skicka in</button>
            </div>

           

        </div>
        
    </div>
   
</div>
    
@endsection