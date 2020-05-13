@extends('layouts.app')

@section('title', 'Productos Segovia Fuantos')

@section('content')
<section id="galeria" class="container">
    <div class="card-columns py-5">

        <div class="card p-0 border-0 shadow">
            <a href="{{ asset('img/galeria-1.png') }}" data-lightbox="50 Aniversario" data-title="50 Aniversario de Bodega Segovia Fuantos">
                <img src="{{ asset('img/galeria-1.png') }}" class="card-img-top" alt="...">
            </a>
        </div>

        <div class="card p-0 border-0 shadow">
            <a href="{{ asset('img/galeria-2.png') }}" data-lightbox="50 Aniversario" data-title="50 Aniversario de Bodega Segovia Fuantos">
                <img src="{{ asset('img/galeria-2.png') }}" class="card-img-top" alt="...">
            </a>
        </div>

        <div class="card p-0 border-0 shadow">
            <a href="{{ asset('img/galeria-3.png') }}" data-lightbox="50 Aniversario" data-title="50 Aniversario de Bodega Segovia Fuantos">
                <img src="{{ asset('img/galeria-3.png') }}" class="card-img-top" alt="...">
            </a>
        </div>

        <div class="card p-0 border-0 shadow">
            <a href="{{ asset('img/galeria-4.png') }}" data-lightbox="50 Aniversario" data-title="50 Aniversario de Bodega Segovia Fuantos">
                <img src="{{ asset('img/galeria-4.png') }}" class="card-img-top" alt="...">
            </a>
        </div>

        <div class="card p-0 border-0 shadow">
            <a href="{{ asset('img/galeria-5.png') }}" data-lightbox="50 Aniversario" data-title="50 Aniversario de Bodega Segovia Fuantos">
                <img src="{{ asset('img/galeria-5.png') }}" class="card-img-top" alt="...">
            </a>
        </div>
    </div>
 </section>
@endsection
