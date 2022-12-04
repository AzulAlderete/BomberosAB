@extends('layout.app')

@section('content')
      <!--ENTRADA DE DATOS-->
    <div  class="container">
        <form action="{{ route('siniestro.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h3>Registro de Siniestro</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingrese el numero">
                </div>
                <div class="form-group">
                    <label for="input">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Ingrese la descripcion">
                </div>
                <div class="form-group">
                    <label for="input">Boca de Agua</label>
                    <select class="form-control" name="boca_agua_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($boca_agua as $b)
                        <option value="{{$b->id}}">{{$b->id}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Solicitud</label>
                    <select class="form-control" name="solicitud_id">
                        <option selected>Seleccione una opción</option>
                        @foreach($solicitud as $s)
                        <option value="{{$s->id}}">{{$s->id}}</option>
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
                    <a type="button" href="{{route('siniestro.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
