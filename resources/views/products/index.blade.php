@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="mt-4">Lista de productos creados</h3>
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->descripcion}}</p>
                        <p class="card-text fw-bold float-end">$ {{$product->price}}</p>
                        <div class="btn-group">
                            <a href="{{route('products.edit',$product)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{route('products.destroy',$product)}}" method="post" id="eliminarKnowledge_{{ $loop->iteration }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
