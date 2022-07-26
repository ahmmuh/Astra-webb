@extends('layouts.app')

@section('content')

<div class="mt-4" id="about">
    <div class="container">

        <div class=" m-auto text-center about-history">
            <h2>Astra Alltjänst AB</h4>
                <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Corporis deleniti, ab dolores aspernatur ullam dolor.</p>
                <a href="#" class=" text-primary " >
                    Kontorsstädning, 
                </a>
                <a href="#" class=" text-primary">Byggstäd, </a>
                <a href="#" class=" text-primary">Lagerstädning, </a>
                <a href="#" class=" text-primary">Butikstädning.</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Similique quod laboriosam corporis officiis aliquid,
                 magni incidunt omnis saepe reprehenderit dolore.</p>
                 <button class="btn btn-primary rounded-pill">Kontakta oss</button>
        </div>
        {{-- <div class="row d-flex justify-content-center">
        
            <div class="col text-center ">
                <div class="list-group d-flex flex-row justify-content-evenly">
                    <a href="#" class=" text-primary " >
                        Kontorsstädning
                    </a>
                    <a href="#" class=" text-primary">Byggstäd</a>
                    <a href="#" class=" text-primary">Lagerstädning</a>
                    <a href="#" class=" text-primary">Butikstädning</a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi voluptas facilis, hic veritatis dolores eaque!</p>
                <button class="btn btn-primary">Kontakta oss</button>
            </div>
        </div> --}}
        
        <div class="row d-flex d-flex flex-row justify-content-between mt-5" >
            <div class="col-lg-6 col-md-12">
                <img class="md-image" src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Logo">
            </div>
            <div class="col-lg-6 col-md-12">
                <h4 class="text-color">Lorem, ipsum dolor.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto saepe iure enim totam odio deserunt aliquam fuga
                 praesentium exercitationem rerum, reiciendis, id ad debitis
                  possimus neque necessitatibus ullam sed est.</p>
            </div>
        </div>
    </div>

    {{-- liten text med grå bakgrund --}}
    <div class="container" id="about-good-service-section">
        <div>
            <h3>Ett framgångsrikt recept</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem 
                eos obcaecati assumenda hic, magnam atque?</p>
        </div>
    </div>

    {{-- //Trivsel på jobbet --}}

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Trivsel på jobbet</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam enim nobis tempore omnis eligendi ad quaerat nam distinctio accusamus ipsam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias error ab possimus cum praesentium perspiciatis impedit voluptas assumenda consequuntur molestiae.
                </p>
            </div>
            <div class="col-6">
                <img class="md-image" src="https://images.unsplash.com/photo-1569496736555-47c448d556f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d29ya2Vyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="Bild på anställda">
            </div>
        </div>
    
    
    
        {{-- //miljö sektion --}}
        <div class="row">
            <div class="col-6">
                <img class="md-image" src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Miljö bild">
            </div>
            <div class="col-6">
                <h3>Viktigt att sortera sopor</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus, doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo culpa magni dolorum architecto accusantium facilis perspiciatis rem sequi vitae dolores, animi aspernatur perferendis velit eaque exercitationem excepturi at consectetur a?</p>
            </div>
        </div>
    
        
        <div class="row">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Vad städar ni för alla eller bara företag?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Tänker ni på miljö när ni städar?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Kollektivavtal?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection