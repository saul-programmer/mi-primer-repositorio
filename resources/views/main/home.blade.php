@extends('layouts.app')

@section('title', 'Productos Segovia Fuantos')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slide-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>LO BUENO LLEVA TIEMPO</h5>
          <p>Una antaña tradicion de elaboración de vinos caseros</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>LO BUENO LLEVA TIEMPO</h5>
          <p>Una antaña tradicion de elaboración de vinos caseros</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/slide-3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>LO BUENO LLEVA TIEMPO</h5>
          <p>Una antaña tradicion de elaboración de vinos caseros</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

        <section id="sec2" class="section">
                <div class="row">
                    <div class="content mr-5 ml-5">
                        <h2 class="text-center font-weight-bold bg-dark">H I S T O R I A</h2>
                        <br>
                        <hr class="bg-dark mr-5 ml-5">
                        <br>
                        <p class="text-justify mr-5 ml-5 bounceInRight wow bounceInUp">La tradición comienza con la llegada de la familia fuantos a parras procedentes de Europa
                        Ellos trajeron las técnicas familiares de la vinificación. En el año de 1922 el Sr. Nicéforo
                        Fuantos contrae matrimonio con Vicenta Bocanegra ellos continuaron con tradición de producir
                        vinos generosos, ellos continuaron con esta actividad durante medio siglo con una producción
                        muy pequeña.</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">Por otro lado, en 1940 nace en la hacienda de san Lorenzo en Sr. Juan Manuel Segovia García
                        durante su infancia estuvo en contacto con la industria vitivinícola en casa madero, como peón
                        en los viñedos y como obrero en el área de producción conociendo así cada uno de los procesos
                        de selección, elaboración y degustación de los vinos producidos en esta empresa.</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">Cerca del año 1969 el Sr. Manuel Segovia y la Sra. Gema Ana María   fuantos (Hija del Sr.
                        Nicéforo y la señora Vicenta) contrajeron matrimonio. Ellos continuaron con la tradición de la
                        familia fuantos en la elaboración de vinos generosos mezclando la tradición familiar y el conocimiento
                        adquirido en la infancia y juventud de don Manuel nacen Bodegas Alameda como una empresa familiar,colocando una barrica en la entrada de la casa,
                        las personas acudían con sus jarras a comprar vino generoso. La actividad era algo así como un pasatiempo para la familia Segovia Fuantos,
                         ya que la realizaban en su tiempo libre cuando no trabajaban.</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">En la década del 2000 los hijos de la familia Segovia fuantos fueron aportando sus ideas y conocimientos en la empresa familiar,
                        dando como resultado la transición de bodegas alameda  a bodegas Segovia fuantos, con ello hubo mejoras en la producción como en la comercialización  manteniendo la tradición que se a caracterizado en la forma de elaborar los productos</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">Gema Ana María Fuantos y sus hijos José Alfredo Segovia Fuantos, administrador de Bodega, Juan Manuel  Segovia Fuantos,
                        encargado en la producción y Luis Ambrosio Segovia Fuantos, encargado de Marketing y desarrollo  registraron  en 2007-2008 la marca Bodega Segovia Fuantos y teniendo una producción de vino generoso para abastecer el mercado regional y el turismo que visita la ciudad.</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">Debido que a inicios de la década del 2000 los fundadores del negocio se jubilaron y a partir de ese momento se comenzaron a dar cambios,
                        una renovación de la imagen del negocio, colocando etiquetas modernas y vistosas, empaques de madera y herraje para la venta del vino, así como nuevas variedades de productos.</p>
                        <br>
                        <p class="text-justify mr-5 ml-5">La estimación hecha es que se utilizan100 toneladas de uva molida para la elaboración de vino en el año. Cuentan con 3 hectáreas y media de viñedos propios para la producción de uva. En 2018 se comenzó con la producción de vino de mesa y semiseco para así entrar poco a poco a un nuevo mercado.</p>
                    </div>
                </div>
        </section>

        {{-- <section id="sec2" class="section">
            <div class="contenedor-texto">
                <h2>seccion 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a href="#sec3">seccion3</a>
            </div>
            <img src="img/dos.svg">
        </section> --}}

        <div class="container-fluid text-center bg-dark">
            <div class="row d-flex flex-row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="w-100 h1 text-white">Contactanos</h2>
                        <p class="py-1 lead font-weight-bold my-0 text-white">Tel: 842 422 0170</p>
                    </div>
                    <div class="col-lg-6 col-12 col-md-6 text-center pt-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14411.351260200676!2d-102.
                            18662448551055!3d25.
                            443685227900875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                            1!3m3!1m2!1s0x868f494993e8a9db%3A0xcbde73fb6ac481e8!2sBodegas%20Segovia%20Fuantos!5e0!3m2!1ses!2smx!4v1579735880129!5m2!1ses!2smx"
                            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
        </div>

@endsection
