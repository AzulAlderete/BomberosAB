@extends('layout.app')

@section('content')
      
      <!--INGRESO DE DATOS-->
      
    <div  class="container">
        <form action="{{ route('herramienta.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h3>Registro Herramientas</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
                </div>
                <div class="form-group">
                    <label for="input">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="input">Estado</label>
                    <select class="form-control" name="estado_herramienta_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($estado as $estados)
                        <option value="{{$estados->id}}">{{$estados->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo_herramienta_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($tipo as $tipos)
                        <option value="{{$tipos->id}}">{{$tipos->descripcion}}</option>
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
