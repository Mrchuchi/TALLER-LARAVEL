@extends('layouts.app')

@section('title', 'Editar Comentario')

@section('content')

    <form method="POST" action="{{ route('comentario.update', $comentario) }}" class="comentario_nuevo">
        @csrf
        @method('PATCH')
        <input type="hidden" name="articulo_id" value="{{$comentario->articulo_id}}">
        <fieldset>
            <legend>{{ __('messages.nameUser') }}</legend>
            <input value="{{ old('nombre_usuario', $comentario['nombre_usuario']) }}" type="text" name="nombre_usuario"
                id="nombre_usuario">
        </fieldset>

        <fieldset>
            <legend>{{ __('messages.mail') }}</legend>
            <input value="{{ old('email', $comentario['email']) }}" type="email" name="email" id="email">
        </fieldset>

        <fieldset>
            <legend>{{ __('messages.contentOfTheComentary') }}</legend>
            <textarea type="text" name="contenido" id="contenido">{{ old('contenido', $comentario['contenido']) }}</textarea>
        </fieldset>

        <button{{__('messages.saveEditions')}}</button>
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
