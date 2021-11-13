@extends('dashboard.master')
@section('content')
    <div class="form-group">
        {{-- input:text --}}
        <input class="form-control" type="text" name="publication" id="publication" 
        placeholder="Nombre publicacion" value="{{ $post -> publication)}}">
    </div>
    <div class='form-group'> 
        <select disabled class="form-control"name="state publication" id="state publication">   
            <option value="">Publicado</option>
            <option value="">No Publicado</option>
            <option value="">En Revision</option>
        </select>
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10" 
        placeholder="Contenido de la publicacion">
        {{  $post -> content_publication) }}
        </textarea>
    </div>
        <button class="btn btn-danger" href="{{ URL::previous() }}">Aceptar</button>
@endsection
