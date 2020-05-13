@extends("layouts.app")

@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 border p-5">
                <form method="POST" action="{{ route('products.store')}}">
                    @csrf
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="title" class="form-control" placeholder="titulo">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="description" class="form-control" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="number" name="pricing" class="form-control" placeholder="pricing">
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
        </div>
    </div>
@endsection
