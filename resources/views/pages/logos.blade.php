{{-- logos --}}

<style>
#logo-slider-container .row .col-md-3{
    height: 200px;
    overflow:auto;
    z-index: 9999;

}

    #logo-slider-container .row .col-md-3 a span img{
        height: 200px;
    padding: 2rem;

    }
</style>
<div id="logo-slider-container" class="carousel slide " data-bs-ride="carousel">
    <h4 class="lead text-white text-center">Våra kunder - bli en av dem :)</h4>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#logo-slider-container" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
        <button type="button" data-bs-target="#logo-slider-container" data-bs-slide-to="1" aria-label="Slide 1"></button>
      
      </div>
    <div class="carousel-inner">
        <h4>Våra kunder</h4>
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{ url('../images/customer-logos/logo10.png') }}"  alt="">

                        </span>
                    </a>
                  
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo19.png') }}" alt="">

                        </span>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px; ">
                            <img src="{{url('../images/customer-logos/logo21.png')}}" style="padding: 2rem;" alt="">

                        </span>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo5.png')}}" alt="">

                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo2.png')}}" alt="">

                        </span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo12.png')}}" alt="">

                        </span>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo4.png')}}" alt="">

                        </span>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <span class="img-text card p-4 d-flex justify-content-center" style="height: 200px">
                            <img src="{{url('../images/customer-logos/logo9.png')}}" alt="">

                        </span>
                    </a>
                </div>
            </div>
        </div>
        
      
    </div>
    
</div>
