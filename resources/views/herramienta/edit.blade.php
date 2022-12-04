@extends('layout.app')

@section('content')
      <!--EDICION DE LOS DATOS-->
    <div  class="container">
        <form action="{{ route('herramienta.update', $herramienta->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h3>Registro Herramientas</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$herramienta->codigo}}">
                </div>
                <div class="form-group">
                    <label for="input">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"  value="{{$herramienta->nombre}}">
                </div>
                <div class="form-group">
                    <label for="input">Estado</label>
                    <select class="form-control" name="estado_herramienta_id">
                        
                        @foreach($estado as $estados)
                        {{$estados->id==$herramienta->estado_herramienta_id}}
                        @if ($estados->id==$herramienta->estado_herramienta_id)
                        <option selected value="{{$estados->id}}">{{$estados->descripcion}}</option>
                        @else
                        <option value="{{$estados->id}}">{{$estados->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo_herramienta_id">
                    @foreach($tipo as $tipos)
                        {{$tipos->id==$herramienta->tipo_herramienta_id}}
                        @if ($tipos->id==$herramienta->tipo_herramienta_id)
                        <option selected value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
                        @else
                        <option value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{route('herramienta.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection