@extends('layouts.app')

@section('title','Productos')

@section('content')
<div class="productos">
    @foreach ($productos as $producto)
        <div class="producto">
            <img src="{{ $producto->imagen }}" alt="">
            <h2>{{ $producto->nombre }}</h2>
                <span class="precio">{{ $producto->precio }}</span>
                <button title="Añadir al carrito" class="agregar-compra"></button>
                <div class="detalles">
                    <a href="">Ver detalles</a>
                        <a href="">
                            <button title="Editar producto">🖋️</button>
                        </a>
                        <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button title="Eliminar producto">🗑️</button>
                        </form>
                </div>
        </div>
        
    @endforeach
</div>