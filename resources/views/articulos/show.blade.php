@extends('layouts.app')

@section('title','Nuevo articulo')
    
@section('content')
<div class="articulo">
    <h2>{{$articulo->titulo}}</h2>
    <p class="autor">{{$articulo->autor}}</p>
    <p class="categoria">{{$articulo->categoriaBlog->nombre}}</p>
    <p class="contenido">{{$articulo->contenido}}</p>
    <p class="fecha-publicacion">{{$articulo->fecha_publicacion}}</p>
    <img title={{ {__('messages.imageHeightligter')} }}estacada}}" alt="">
    <div class="actions">
        <a href="{{route('articulo.edit',$articulo)}}">
            <button title="{{ __('messages.editArticle') }}">🖋️</button>
        </a>
        <form action="{{route('articulo.delete',$articulo)}}" method="POST">
            @csrf
            @method('DELETE')
            <button title="{{ __('messages.deleteArticle') }}">🗑️</button>
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
                    <button title="{{ __('messages.editComentary') }}">🖋️</button>
                </a>
                <form action="{{ route('comentario.delete',$comentario) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button title="{{ __('messages.deleteComentary') }}">🗑️</button>

                </form>
            </div>
        @endforeach
        <div class="nuevo-comentario">
            <h3>{{ __('messages.leaveAComentary') }}</h3>
            <form action="{{route('comentario.store')}}" method="POST">
                @csrf
                <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
                <input type="text" name="nombre_usuario" placeholder="N{{ __('messages.nameUser') }}" required>
                <input type="email" name="email" placeholder="{{ __('messages.mailUser') }}" required>
                <textarea name="contenido" placeholder="{{ __('messages.writeYourComentaryHere') }}" required></textarea>
                <button type="submit">{{ __('messages.send') }}</button>
        </div>
    </div>
</div>
@endsection