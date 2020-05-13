<template>
    <div class="container">
        <section id="sec1" class="section bg-cover-top">
            <div class="row">
                <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center align-items-center">
                    <h2 class="w-100 h1">COMENZAR</h2>
                    <p class="py-1 lead font-weight-bold my-0 text-muted">Vinos Caseros Segovia Fuantos</p>
                    <a href="#sec2" class="btn btn-next-section btn-outline-primary text-dark">▼</a>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <div class="d-flex flex-column justify-content-center align-items-center height-image py-5 text-center px-5">
                        <img src="img/icon.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="sec2" class="section">
                <div class="row">
                    <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="w-100 h1">seccion 2</h2>
                        <p class="py-1 lead font-weight-bold my-0 text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, laudantium sapiente.
                            Consequuntur ipsum velit aliquid at voluptatibus ut. Earum at quae,
                            aperiam illum ut consequuntur sequi quia obcaecati molestiae velit.
                        </p>
                        <a href="#sec3" class="btn btn-outline-primary text-dark">Seccion 3</a>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="d-flex flex-column justify-content-center align-items-center py-5 text-center px-5">
                            <img src="img/dos.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
