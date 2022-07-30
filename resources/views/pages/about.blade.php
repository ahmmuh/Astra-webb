@extends('layouts.app')

@section('content')

<div class="" id="about">
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
                 
        </div>

            @include('pages.modal-form')
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
    
        
        
        </div>
    </div>
</div>
    
@endsection