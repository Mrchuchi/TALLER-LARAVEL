@extends('layouts.app')

@section('title', 'Editar Comentario')

@section('content')

    <form method="POST" action="{{ route('comentario.update', $comentario) }}" class="comentario_nuevo">
        @csrf
        @method('PATCH')
        <input type="hidden" name="articulo_id" value="{{$comentario->articulo_id}}">
        <fieldset>
            <legend>Nombre de usuario</legend>
            <input value="{{ old('nombre_usuario', $comentario['nombre_usuario']) }}" type="text" name="nombre_usuario"
                id="nombre_usuario">
        </fieldset>

        <fieldset>
            <legend>Email</legend>
            <input value="{{ old('email', $comentario['email']) }}" type="email" name="email" id="email">
        </fieldset>

        <fieldset>
            <legend>Contenido del comentario</legend>
            <textarea type="text" name="contenido" id="contenido">{{ old('contenido', $comentario['contenido']) }}</textarea>
        </fieldset>

        <button>Guardar ediciones</button>
        <div class="errors">
            @foreach ($errors->all() as $errors)
                <p>{{ $errors }}</p>
            @endforeach
        </div>
        
    </form>

    @if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
