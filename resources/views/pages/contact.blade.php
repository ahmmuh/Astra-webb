@extends('layouts.app')
@section('content')

<div class="d-flex flex-row ">
  <div class=" text-center  m-auto window-bg">
      <div class="col">
          <h3>Kontakta oss</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ipsa id consequuntur quae ex eius impedit fuga similique corporis, dignissimos, ipsam adipisci excepturi. Quis reiciendis, tempora cum ex optio iure!</p>
      <button type="button" class="btn btn-primary">Beställ nu</button>
      </div>
  </div>
</div>
 <div class="container mt-5">
  <hr>
     <div class="row">
       
         <div class="col-5">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eos expedita quod pariatur recusandae. Excepturi placeat laborum obcaecati soluta iste.</p>
             <h4>Våra kontaktuppgifter</h4>
             <p>072888394</p>
             <p>info@astrastad.se</p>
         </div>
         <div class="col-7 p-4">
           <h3 class="lead pb-2">Fyll i formuläret så kontaktar vi dig inom kort</h3>
          <form class="">
            <div class="mb-3 form-group d-flex flex-row">
              <input type="text" class="form-control" placeholder="Förnamn" id="firstname" aria-describedby="emailHelp">
              <input type="text" class="form-control" placeholder="Efternamn" id="lastname">
            </div>
          
            <div class="mb-3 d-flex flex-row">
                <input type="number" class="form-control" placeholder="Telefon" id="telefon">
                <input type="email" class="form-control" placeholder="E-post" id="email">
        
              </div>
        
              <select class="form-select mb-3" aria-label="Default select example">
                  <option selected>Välj service</option>
                  <option value="1">Vill beställa tjänst</option>
                  <option value="2">Problem</option>
                  <option value="3">Missnöjd</option>
              </select>
        
              <div class="">
                  <textarea class="form-control" id="meddelande" rows="3">Skriv ditt meddelande här....
                  </textarea>
              </div>
              <div class="d-grid gap-2">
                <button class="btn  mt-3 rounded-pill bg-primary text-white" id="submit-btn" type="submit">Skicka</button>
              </div>
            </form>
        </div>
     </div>
     <div class="container mt-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68231.12283318839!2d11.917588305982527!3d57.69568806336296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff582100ba669%3A0xa481bdfaa80667cd!2sAstra%20Alltj%C3%A4nst%20AB!5e0!3m2!1sen!2sse!4v1658834095354!5m2!1sen!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

     </div>
 </div>
@endsection