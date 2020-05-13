@extends('layouts.app')

@section('title', 'Productos Segovia Fuantos')

@section('content')
<div class="row py-5 mr-5 ml-5">
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
        <img src="../img/op/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Dulces Regionales</h5>
            <button data-toggle="modal" data-target="#foto-modal-1" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Campechanas</h5>
            <button data-toggle="modal" data-target="#foto-modal-2" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mermelada de Higo</h5>
            <button data-toggle="modal" data-target="#foto-modal-3" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mermelada de Chabacano</h5>
            <button data-toggle="modal" data-target="#foto-modal-4" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mermelada de Durazno</h5>
            <button data-toggle="modal" data-target="#foto-modal-5" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Miel de Abeja</h5>
            <button data-toggle="modal" data-target="#foto-modal-6" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/7.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Gomitas de Vino</h5>
            <button data-toggle="modal" data-target="#foto-modal-7" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Salsa Macha</h5>
            <button data-toggle="modal" data-target="#foto-modal-8" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chiles en Vinagre</h5>
            <button data-toggle="modal" data-target="#foto-modal-9" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/10.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Queso Tipo Shanklish</h5>
            <button data-toggle="modal" data-target="#foto-modal-10" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nuez Limpia</h5>
            <button data-toggle="modal" data-target="#foto-modal-11" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
<div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/12.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nuez en Hueso</h5>
            <button data-toggle="modal" data-target="#foto-modal-12" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>
{{--  <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
    <div class="card border-0 shadow">
        <img src="../img/op/13.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chorizo</h5>
            <button data-toggle="modal" data-target="#foto-modal-13" type="button" class="btn btn-primary">
                Ver mas
            </button>
        </div>
    </div>
</div>  --}}
</div>

{{-- EN ESTA PARTE SE ENCUENTRA EL CODIGO DE LAS VENTANAS MODALES --}}

<div class="modal fade" id="foto-modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dulces Regionales</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/1.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaborados con materias prima, como lo son, la leche de vaca, nuez y pasa de higo.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{--  <div class="modal fade" id="foto-modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Campechanas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit nostrum nam mollitia reprehenderit est dolorem laudantium eveniet exercitationem ipsum quam. Esse vitae, consequuntur reiciendis enim repudiandae aspernatur modi dolorem voluptatibus?</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="modal fade" id="foto-modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mermelada de Higo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaborada con frutas de la región como son, el higo, chabacano y durazno, sin conservadores y con un bajo porcentaje de azúcar agregada.</p>
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
          <h5 class="modal-title" id="exampleModalLabel">Mermelada de Chabacano</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/4.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaborada con frutas de la región como son, el higo, chabacano y durazno, sin conservadores y con un bajo porcentaje de azúcar agregada.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mermelada de Durazno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/5.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaborada con frutas de la región como son, el higo, chabacano y durazno, sin conservadores y con un bajo porcentaje de azúcar agregada.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Miel de Abeja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/6.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Miel de abeja de la región obtenida de flores de semi desierto 100% natural sin azúcar añadida.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gomitas de Vino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/7.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaboradas por la empresa (nombre de la empresa) con vino tinto dulce elaborado por la empresa bodega segovia fuantos.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salsa Macha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/8.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Elaborada con diferentes variedades de chiles de árbol, ajo, ajonjolí y diferentes tipos de aceites como lo son, oliva extra virgen y canola.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{--  <div class="modal fade" id="foto-modal-9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chiles en Vinagre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/9.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit nostrum nam mollitia reprehenderit est dolorem laudantium eveniet exercitationem ipsum quam. Esse vitae, consequuntur reiciendis enim repudiandae aspernatur modi dolorem voluptatibus?</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>--}}

  <div class="modal fade" id="foto-modal-10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Queso Tipo Shanklish</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/10.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Una combinación de queso de cabra, queso crema de vaca y especies, macerado en aceite de oliva extra virgen.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuez Limpia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/11.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Nuez obtenida de enormes arboles frutales (nogal), limpiada por manos parrenses.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="foto-modal-12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuez en Hueso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="../img/op/12.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <p>Nuez obtenida de enormes arboles frutales (nogal), cortada por manos parrenses.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
