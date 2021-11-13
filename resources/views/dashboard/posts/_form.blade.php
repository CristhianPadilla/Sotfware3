{{-- falsificacion de peticones en sitios web --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="publication" id="publication" 
    placeholder="Nombre publicacion" value="{{old('publication', $post -> publication)}}">
</div>
<div class="form-group">
    <select class="custom-select" name="category id" id="category id"
    aria-label="Dafault">
    <option selected disabled>Seleciona una opción</option>
    @foraech ($categories as $category name => $id)
        <option {{ $post ->category id == $id ? 'selected="selected"':''}}
            value="{{ $id }}">
            {{ category name }}
        </option>
        @endforeach
    </select>
</div>
<div class="form-group"> 
    <select class="form-control"name="state publication" 
    id="state publication">   
        <option value="">Publicado</option>
        <option value="">No Publicado</option>
        <option value="">En Revision</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10" 
    placeholder="Contenido de la publicacion">
    {{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
