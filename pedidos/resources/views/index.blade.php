@extends('layouts.layout')
@section('content')
<div class="row img-cover test d-flex justify-content-center my-3">
    <div class="col-11">
        <img class="img-fluid w-100 h-100" src="{{ asset('images/imagen2.jpeg') }}" alt="Imagen presentacion">
    </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-3">

            <div class="titulo">
                ESCUELA DE HOSTELERÍA DE EGIBIDE MENDIZORROTZA
            </div>
            <span class="slogan">La Escuela de Hostelería de EGIBIDE-MENDIZORROTZA ofrece una variada oferta gastronómica,<br> que podrás disfrutar en nuestro restaurante o disponible también para llevar.</span>
        </div>
        <div class="col-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/plato1.jpeg') }}" class="d-block w-100" alt="Imagen plato 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/plato2.jpeg') }}" class="d-block w-100" alt="Imagen plato 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/plato3.jpg') }}" class="d-block w-100" alt="Imagen plato 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

@endsection