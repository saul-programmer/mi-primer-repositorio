@extends('layouts.app')

@section('title', 'Productos Segovia Fuantos')

@section('content')
<div class="row py-5 mr-5 ml-5">
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
        <img src="../img/extras/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Caja Chica de Madera Para Una Botella</h5>
            <button data-toggle="modal" data-target="#foto-modal-1" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/extras/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Caja Larga de Madera Para Una Botella</h5>
            <button data-toggle="modal" data-target="#foto-modal-2" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/extras/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Morral de Mezclilla Para Dos Botellas</h5>
            <button data-toggle="modal" data-target="#foto-modal-3" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/extras/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bolsa de Mezclilla</h5>
            <button data-toggle="modal" data-target="#foto-modal-4" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>

<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/extras/5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Despachador de Vino</h5>
            <button data-toggle="modal" data-target="#foto-modal-5" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
{{-- EN ESTA PARTE SE ENCUENTRA EL CODIGO DE LAS VENTANAS MODALES --}}

<div class="modal fade" id="foto-modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Caja Chica de Madera Para Una Botella</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/extras/1.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6 text-justify">
                    <p>Caja de madera elaborada por personal de la empresa bodega segovia fuantos.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Caja Larga de Madera Para Una Botella</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/extras/2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Caja de madera alargada para una botella, elaborada por personal de la empresa bodega segovia fuantos.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Morral de Mezclilla Para Dos Botellas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/extras/3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Morral para dos botellas elaborado con la mejor mezclilla de la region.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bolsa de Mezclilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/extras/4.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Bolsa grande elaborada con la mejor mezclilla de la region.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{--  <div class="modal fade" id="foto-modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Despachador de Vino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/extras/5.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p></p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>--}}

@endsection
