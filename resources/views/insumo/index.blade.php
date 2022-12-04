@extends('layout.app')

@section('content')
      <!---INDEX CON FILTADOR Y VISUALIZACION DE DATOS-->
    <div class="container">
      <h3>Lista de Insumos</h3>
      <form class="form-inline">
        <div class="form-group">
          <input type="search" class="form-control" name="buscar" placeholder="Buscar por codigo" value="{{ $buscar }}">
        </div> 
          <button type="submit" class="btn btn-success">Buscar</button>
      </form>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Código</th>
              <th scope="col">Descripción</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            @foreach($insumo as $insumos)
            <tr>
                <th scope="insumos">{{$insumos->id}}</th>
                <td>{{$insumos->codigo}}</td>
                <td>{{$insumos->descripcion}}</td>
                <td>{{$insumos->stock}}</td>
                <td>
                  <form action="{{route('insumo.destroy', $insumos->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{route('insumo.edit', $insumos->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <!--BORRADO DE DATOS-->

                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a type="button" href="{{route('insumo.create') }}" class="btn btn-primary">Crear</a>
        <a type="button" href="{{route('menu.index') }}" class="btn btn-secondary">Atrás</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
