@extends('layouts.app')

    @section('content')

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
    <div class="container text-start mt-5" id="staff">
        <div class="row ">
            <div class="col-lg-4 col-md-12 logo-circel-image" >
            </div>

            <div class="col-lg-8 col-md-12 ">
                <h4>Vilka är vi?</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Error enim aliquam non ipsum velit praesentium esse,
                      neque quod maiores natus excepturi voluptates porro 
                    dolores dolorum sed dolor, qui nulla. Laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis odio praesentium odit eveniet laboriosam necessitatibus, quas est voluptatibus explicabo ea dicta mollitia, tenetur aliquam dolorum, unde voluptates molestias iste fuga?</p>
                    <a  href="{{ url('/') }}" class="btn btn-primary">Boka nu</a>
            </div>
        </div>
          @include('pages.service')      
      </div>
      
      @endsection

      {{-- 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 --}}