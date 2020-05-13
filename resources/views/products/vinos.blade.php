@extends('layouts.app')

@section('title', 'Productos Segovia Fuantos')

@section('content')
    <div class="row py-5 mr-5 ml-5">
        <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
            <div class="card border-0 shadow">
            <img src="../img/vinos/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Tinto Dulce</h5>
                <button data-toggle="modal" data-target="#foto-modal-1" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Semi Seco</h5>
                <button data-toggle="modal" data-target="#foto-modal-2" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Clarete</h5>
                <button data-toggle="modal" data-target="#foto-modal-3" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Tipo Oporto</h5>
                <button data-toggle="modal" data-target="#foto-modal-4" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Saint Emilion</h5>
                <button data-toggle="modal" data-target="#foto-modal-5" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Tipo Jerez</h5>
                <button data-toggle="modal" data-target="#foto-modal-6" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vino Cabernet Salvador</h5>
                <button data-toggle="modal" data-target="#foto-modal-7" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crema de Membrillo</h5>
                <button data-toggle="modal" data-target="#foto-modal-8" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sotol Dos Piñas</h5>
                <button data-toggle="modal" data-target="#foto-modal-9" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Concentrado de Uva</h5>
                <button data-toggle="modal" data-target="#foto-modal-10" type="button" class="btn btn-primary">
                    Ver mas
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 pb-4 col-md-6 col-sm-12">
        <div class="card border-0 shadow">
            <img src="../img/vinos/11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crema de Nuez</h5>
                <button data-toggle="modal" data-target="#foto-modal-11" type="button" class="btn btn-primary">
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Tinto Dulce</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6 text-justify">
                        <p>Elaborado con uva lenoir (tradicional de la región), cariñana mezclado con cabernet , reposado en barricas de encino, su característica principal es que tiene mucho cuerpo con un color rojo maduro.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Semi Seco</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborado con uva lenoir (tradicional de la región), cabernet salvador mezclado con cabernet , reposado en barricas de roble,  su característica principal es tiene mucho cuerpo con un color rojo maduro.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Clarete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborado con una convinacion de uvas rojas y blancas como lo son Lenoir y saint emilion su característica principal es de un color un poco mas claro que un vino tinto.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Tipo Oporto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/4.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborado con uva lenoir y combinado con uva dulce se caracteriza por ser un vino muy oscuro y aromático, y listo para degustar.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Saint Emilion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/5.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborado con uva saint emilion, es un vino dulce de color paja con sabor a frutado.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Tipo Jerez</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/6.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborado con mezcla de uva cariñana y bola dulce, con un reposo de aproximado de 24 meses la característica principal es  su exquisito sabor solo o al combinarlo con alimentos.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Vino Cabernet Salvador</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/7.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Vino de mesa elaborado con uva cabernet salavdor y reposado en barricas de roble, despues de un determinado tiempo queda listo para su consumo.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Crema de Membrillo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/8.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Licor artesanal elaborado  100% con fruta de la región con un excelente sabor.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Sotol Dos Piñas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/9.jpg" class="card-img-top" alt="...">
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
              <h5 class="modal-title" id="exampleModalLabel">Concentrado de Uva</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/10.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Jugo de uva elaborado con uvas lenoir, cabernet salvador y cariñana obtenido por medio de evaporación del mosto de estas uvas sin azúcar agregada, ni saborizantes ni conservadores.</p>
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
              <h5 class="modal-title" id="exampleModalLabel">Crema de Nuez</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="../img/vinos/11.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Elaborada con la mejor selección de nueces de la región, que gracias a largos periodos de reposo se obtiene un licor que junto con la leche y crema de primera calidad logramos esta exquisita crema de nuez.</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection
