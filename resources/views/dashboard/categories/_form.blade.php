{{-- falsificacion de peticones en sitios web --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="category_name" id="category_name" 
    placeholder="Nombre publicacion" value="{{old('publication', $post -> category_name)}}">
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10" 
    placeholder="Contenido de la publicacion">
    {{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>
    <button type="submit" class="btn btn-success">Aceptar</button>
    <button class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
