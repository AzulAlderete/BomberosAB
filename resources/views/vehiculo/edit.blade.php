@extends('layout.app')

@section('content')
      <!--EDICION DE DATOS-->
    <div  class="container">
        <form action="{{ route('vehiculo.update', $vehiculo->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h3>Registro Vehiculos</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Patente</label>
                    <input type="text" class="form-control" id="patente" name="patente" value="{{$vehiculo->patente}}">
                </div>
                <div class="form-group">
                    <label for="input">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo"  value="{{$vehiculo->codigo}}">
                </div>
                <div class="form-group">
                    <label for="input">Estado</label>
                    <select class="form-control" name="estado_id">
                        
                        @foreach($estado as $estados)
                        {{$estados->id==$vehiculo->estado_id}}
                        @if ($estados->id==$vehiculo->estado_id)
                        <option selected value="{{$estados->id}}">{{$estados->descripcion}}</option>
                        @else
                        <option value="{{$estados->id}}">{{$estados->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo_vehiculo_id">
                    @foreach($tipo as $tipos)
                        {{$tipos->id==$vehiculo->tipo_vehiculo_id}}
                        @if ($tipos->id==$vehiculo->tipo_vehiculo_id)
                        <option selected value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
                        @else
                        <option value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{route('vehiculo.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
