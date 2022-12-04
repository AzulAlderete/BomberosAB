@extends('layout.app')

@section('content')
    <!--INGRESO DE DATOS-->
    <div  class="container">
        <form action="{{ route('insumo.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h3>Registro Insumos</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código">
                </div>
                <div class="form-group">
                    <label for="input">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Ingrese la descripción">
                </div>
                <div class="form-group">
                    <label for="input">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock"  placeholder="Ingrese la cantidad de stock">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{route('insumo.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection