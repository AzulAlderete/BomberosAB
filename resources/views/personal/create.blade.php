@extends('layout.app')

@section('content')
      <!--CARGA DE DATOS-->
    <div  class="container">
        <form action="{{ route('personal.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h3>Registro Personal</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="input">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Ingrese el telefono">
                </div>
                <div class="form-group">
                    <label for="input">Documento</label>
                    <input type="text" class="form-control" id="documento" name="documento"  placeholder="Ingrese el documento">
                </div>
                <div class="form-group">
                    <label for="input">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"  placeholder="Ingrese el direccion">
                </div>
                <div class="form-group">
                    <label for="input">Rango</label>
                    <select class="form-control" name="rango_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($rango as $rangos)
                        <option value="{{$rangos->id}}">{{$rangos->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Labor</label>
                    <select class="form-control" id="tipo" name="labor_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($labor as $labores)
                        <option value="{{$labores->id}}">{{$labores->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <!--<div class="form-group">
                    <label for="estado">Estado de Herramienta</label>
                    <select class="form-control" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>   
                <div class="form-group">
                    <label for="tipo">Tipo de Herramienta</label>
                    <select class="form-control" id="tipo">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>-->
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
