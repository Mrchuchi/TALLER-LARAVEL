@extends('layouts.app')

@section('title','Nuevo articulo')
    
@section('content')
<div class="articulo">
    <h2>{{$articulo->titulo}}</h2>
    <p class="autor">{{$articulo->autor}}</p>
    <p class="categoria">{{$articulo->categoriaBlog->nombre}}</p>
    <p class="contenido">{{$articulo->contenido}}</p>
    <p class="fecha-publicacion">{{$articulo->fecha_publicacion}}</p>
    <img title="imagen-destacada" src="{{$articulo->imagen_destacada}}" alt="">
    <div class="actions">
        <a href="{{route('articulo.edit',$articulo)}}">
            <button title="Editar articulo">🖋️</button>
        </a>
        <form action="{{route('articulo.delete',$articulo)}}" method="POST">
            @csrf
            @method('DELETE')
            <button title="Eliminar articulo">🗑️</button>
        </form>
    </div>
    <div class="comentarios">
        @foreach ($articulo->comentarios as $comentario)
        <div class="comentario">
            <span class="autor">{{ $comentario->nombre_usuario}}</span>
            <span class="fecha">{{ $comentario->created_at->format('d/m/Y H:i') }}</span>
        </div>
            <p class="contenido">{{ $comentario->contenido }}</p>
            <divc class="acciones">
                <a href="{{ route('comentario.edit', $comentario) }}">
                    <button title="Editar comentario">🖋️</button>
                </a>
                <form action="{{ route('comentario.delete',$comentario) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button title="Eliminar comentario">🗑️</button>

                </form>
            </div>
        @endforeach
        <div class="nuevo-comentario">
            <h3>Deja un comentario</h3>
            <form action="{{route('comentario.store')}}" method="POST">
                @csrf
                <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
                <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
                <input type="email" name="email" placeholder="Email de usuario" required>
                <textarea name="contenido" placeholder="Escribe tu comentario aquí..." required></textarea>
                <button type="submit">Enviar</button>
        </div>
    </div>
</div>
@endsection