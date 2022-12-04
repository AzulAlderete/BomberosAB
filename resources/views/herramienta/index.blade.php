@extends('layout.app')

@section('content')
      <!--INDEX DE HERRAMIENTAS CON LOS DATOS Y FILTRADOR DE DATOS-->
    <div class="container">
      <h3>Lista de Herramientas</h3>
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
              <th scope="col">Nombre</th>
              <th scope="col">Estado</th>
              <th scope="col">Tipo</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $estados)
            <tr>
                <th scope="estados">{{$estados->id}}</th>
                <td>{{$estados->codigo}}</td>
                <td>{{$estados->nombre}}</td>
                <td>{{$estados->estado}}</td>
                <td>{{$estados->tipo}}</td>
                <td>
                  <form action="{{route('herramienta.destroy', $estados->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{route('herramienta.edit', $estados->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!--REDIRECCION-->
        <a type="button" href="{{route('herramienta.create') }}" class="btn btn-primary">Crear</a>
        <a type="button" href="{{route('menu.index') }}" class="btn btn-secondary">Atrás</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
