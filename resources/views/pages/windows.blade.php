@extends('layouts.app')
@section('content')


<div id="fonster-bg" class="carousel slide" data-bs-ride="carousel">
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
     
     
    </div>

  </div>
{{-- end slider --}}


            <div class="container mt-5">
                <h3 class="text-center py-3 border rounded-pill" style="background-image: linear-gradient(to left, rgba(245, 237, 237, 0.247),rgba(221, 226, 228, 0.404))">Vi gör fönsterputs för alla</h3>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-12 ">
                        <img src="{{url('images/fonster1.jpeg')}}" alt="bild" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h5>Vi kan fönsterputs</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dignissimos quaerat velit, molestiae unde cum tempora sunt quos nam, dolorem est modi minima doloribus eius at vitae facilis omnis temporibus!</p>
                        <a href="#" class="btn btn-lg blue-background border rounded-pill w-25" >Boka nu</a>
                    </div>
                </div>

                <div class="row py-5">
                    <div class="col-lg-6 col-md-12">
                        <h3>Fönsterputs för företag</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum cupiditate iusto dolor eligendi architecto quasi ducimus praesentium, quidem soluta porro rerum odit dolorem veniam cumque placeat aliquid unde reiciendis tempora sapiente facilis autem a! Eos eveniet eaque quam possimus nihil.</p>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <h3>Fönsterputs för privat</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum cupiditate iusto dolor eligendi architecto quasi ducimus praesentium, quidem soluta porro rerum odit dolorem veniam cumque placeat aliquid unde reiciendis tempora sapiente facilis autem a! Eos eveniet eaque quam possimus nihil.</p>
                    </div>
                    
                </div>
<div class="row">
    <div class="col">
        <h4>Vill du ha fönsterputs?</h4>
        <a href="" class="btn btn-primary border rounded-pill">Beställ här</a>
    </div>
</div>

            </div>

@endsection
