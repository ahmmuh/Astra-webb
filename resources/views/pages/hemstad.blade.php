@extends('layouts.app')
@section('content')
<div class="d-flex flex-row ">
    <div class=" text-center  m-auto window-bg">
        <div class="col">
            <h3>Hemstäd</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ipsa id consequuntur quae ex eius impedit fuga similique corporis, dignissimos, ipsam adipisci excepturi. Quis reiciendis, tempora cum ex optio iure!</p>
        <button type="button" class="btn btn-primary">Beställ nu</button>
        </div>
    </div>
  </div>
    <div class="container text-start ">
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <img src="{{url('images/mohamed.jpg')}}" style="width: 80%"  alt="Bild">
                </div>

                <div class="col-lg-6 col-md-12">
                    <h3>Vi städar när ni har möjlighet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque a commodi possimus sunt tenetur quisquam deleniti nostrum optio et ea ducimus error explicabo iure consequatur quasi, nesciunt impedit asperiores facere.</p>
                    <button type="button" class="btn btn-primary">Beställ nu</button>
                </div>
            </div>

            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <h3>Vår fokus ligger på kvalite - inte hur mycket vi får in</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, odio aliquid tenetur, eius asperiores sit repellat dolor deleniti, corporis ab voluptatum. Praesentium a quis, assumenda nisi nesciunt quam molestiae eligendi?</p>
                </div>

                <div class="col-lg-6 col-md-12">
                        <img src="{{url('images/trapp3.jpg')}}" style="width: 80%"  alt="">
                </div>
            </div>
        
            <div class="row text-start">
                <div class="col-lg-6 col-md-12">
                    <h3>Vojo jobbar bra</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, odio aliquid tenetur, eius asperiores sit repellat dolor deleniti, corporis ab voluptatum. Praesentium a quis, assumenda nisi nesciunt quam molestiae eligendi?</p>
                </div>

                <div class="col-lg-6 col-md-12">
                        <img src="{{url('images/mohamed.jpg')}}" style="width: 80%"  alt="">
                </div>
            </div>

            <div class="row text-center">
                <h4>Extra tillägg</h4>
                <div class="col-lg-4 col-md-12">
                    <img src="{{url('images/abdi1.jpg')}}" style="width: 100%"  alt="bild">
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{url('images/trapp3.jpg')}}" style="width: 100%"  alt="bild">
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{url('images/maria.jpg')}}" style="width: 100%"  alt="bild">
                </div>
            </div>
        </div>

@endsection