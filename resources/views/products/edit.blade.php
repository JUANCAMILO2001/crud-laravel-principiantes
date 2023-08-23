@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Editar producto</h3>
        <form action="{{route('products.update', $product)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input type="text" value="{{$product->name}}" class="form-control" id="name" name="name" placeholder="Nombre del productos">
                <label for="name">Nombre del productos</label>
            </div>
            <div class="form-floating  mb-3">
                <input type="text" value="{{$product->descripcion}}" class="form-control" id="descripcion" name="descripcion" placeholder="Decripcion del producto">
                <label for="descripcion">Decripcion del producto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" value="{{$product->price}}" class="form-control" id="price" name="price" placeholder="Precio del producto">
                <label for="price">Precio del producto</label>
            </div>
            <button type="submit" class="btn btn-success">Editar producto</button>
            <a href="{{route('products.index')}}" class="btn btn-warning">Volver</a>
        </form>
    </div>
@endsection
