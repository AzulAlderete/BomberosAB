@extends('layout.app')

@section('content')
      <!--EDICION DE DATOS-->
    <div  class="container">
        <form action="{{ route('personal.update', $personal->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h3>Editar personal</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$personal->nombre}}">
                </div>
                <div class="form-group">
                    <label for="input">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"  value="{{$personal->telefono}}">
                </div>
                <div class="form-group">
                    <label for="input">Rango</label>
                    <select class="form-control" name="rango_id">
                        
                        @foreach($rango as $rangos)
                        {{$rangos->id==$personal->rango_id}}
                        @if ($rangos->id==$personal->rango_id)
                        <option selected value="{{$rangos->id}}">{{$rangos->descripcion}}</option>
                        @else
                        <option value="{{$rangos->id}}">{{$rangos->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Labor</label>
                    <select class="form-control" name="labor_id">
                        
                        @foreach($labor as $l)
                        {{$l->id==$personal->l}}
                        @if ($l->id==$personal->labor_id)
                        <option selected value="{{$l->id}}">{{$l->descripcion}}</option>
                        @else
                        <option value="{{$l->id}}">{{$l->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{route('personal.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
