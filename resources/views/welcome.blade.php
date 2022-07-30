@extends('layouts.app')

    @section('content')
    <style>

       
    </style>


    {{-- home page slider --}}
    <div id="home-page-slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#home-page-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#home-page-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#home-page-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block" style="width: 50%; margin: 0 auto;">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim qui recusandae fugit, ipsam sapiente iure ratione perspiciatis! Debitis, deserunt.
                </p>
                <a href="#" class="btn btn-lg btn-primary rounded-pill" style="width: 20rem">Jag vill ha en offert</a>
              </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block" style="width: 50%; margin: 0 auto;">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim qui recusandae fugit, ipsam sapiente iure ratione perspiciatis! Debitis, deserunt.
                </p>
                <a href="#" class="btn btn-lg btn-primary rounded-pill" style="width: 20rem">Boka nu</a>
              </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block" style="width: 50%; margin: 0 auto;">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim qui recusandae fugit, ipsam sapiente iure ratione perspiciatis! Debitis, deserunt.
                </p>
                <a href="#" class="btn btn-lg btn-primary rounded-pill" style="width: 20rem">Boka nu</a>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#home-page-slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#home-page-slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- end slider --}}
    <div class="container text-start" id="staff">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ url('images/vojo2.jpg') }}" alt="" style="width: 100%">
            </div>

            <div class="col-lg-6 col-md-12">
                <h4>Hur vi jobbar</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Error enim aliquam non ipsum velit praesentium esse,
                      neque quod maiores natus excepturi voluptates porro 
                    dolores dolorum sed dolor, qui nulla. Laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis odio praesentium odit eveniet laboriosam necessitatibus, quas est voluptatibus explicabo ea dicta mollitia, tenetur aliquam dolorum, unde voluptates molestias iste fuga?</p>
                    <a  href="{{ url('/') }}" class="btn btn-primary">Boka nu</a>
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ url('images/abdi1.jpg') }}" alt="" style="width: 100%">
            </div>

            <div class="col-lg-6 col-md-12">
                <h4>Hur vi jobbar</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Error enim aliquam non ipsum velit praesentium esse,
                      neque quod maiores natus excepturi voluptates porro 
                    dolores dolorum sed dolor, qui nulla. Laborum.</p>
                    <a  href="{{ url('/') }}" class="btn btn-primary">Boka nu</a>
            </div>
        </div>

      


        {{-- //anställda --}}
     <div class="row">
        <h3>Vår personal</h3>
       <div class="col-lg-3 col-md-12">
           <img class="staff-image " src="https://images.unsplash.com/photo-1560250056-07ba64664864?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1451&q=80" alt="anställd">
           <div class="p-4">
               <strong>Abdirahman - VD</strong>
           <p>abdirahman@astrastad.se <br>072 999 32 78</p>
           </div>
           </div>
       <div class="col-lg-3 col-md-12">
           <img class="staff-image " src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHdvcmtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="anställd">
           <div class="p-4">
           <strong>Anna - Områdeschef</strong>
           <p>anna@astrastad.se <br>072 999 88 78</p>
           </div>
       </div>
       <div class="col-lg-3 col-md-12">
           <img class="staff-image " src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="anställd">
           
           <div class="p-4"><strong>Said - Teamledare</strong>
           <p>said@astrastad.se <br>072 333 32 78</p></div>
       </div>
       <div class="col-lg-3 col-md-12">
           <img class="staff-image " src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29ya2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="anställd">
           <div class="p-4">
           <strong>Mustaf - Städare</strong>
           <p>mustaf@astrastad.se
               <br> 072 111 00 78</p></div>
       </div>
   </div>
    </div>



  
      </div>
      @endsection