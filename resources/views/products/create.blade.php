@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Crear producto</h3>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del productos">
                <label for="name">Nombre del productos</label>
            </div>
            <div class="form-floating  mb-3">
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Decripcion del producto">
                <label for="descripcion">Decripcion del producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="price" name="price" placeholder="Precio del producto">
                <label for="price">Precio del producto</label>
            </div>
            <button type="submit" class="btn btn-success">Crear producto</button>
        </form>
    </div>
@endsection
