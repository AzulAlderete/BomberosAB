@extends('layout.app')

@section('content')
      <!--INDEX DE BOCA DE AGUA-->
    <div class="container">
      <h3>Lista de boca de agua</h3>
      <form class="form-inline">
        <!--FILTRADOR DE DATOS-->
        <div class="form-group">
          <input type="search" class="form-control" name="buscar" placeholder="Buscar por Numero" value="{{ $buscar }}">
        </div> 
          <button type="submit" class="btn btn-success">Buscar</button>
      </form>
      <!--DATOS DE LAS TABLAS-->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Dirección</th>
              <th scope="col">Numero de boca</th>
              <th scope="col">Latitud</th>
              <th scope="col">Longitud</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $datas)
            <tr>
                <th scope="datas">{{$datas->id}}</th>
                <td>{{$datas->direccion}}</td>
                <td>{{$datas->numero}}</td>
                <td>{{$datas->latitud}}</td>
                <td>{{$datas->longitud}}</td>
                <td>
                  <form action="{{route('bocaagua.destroy', $datas->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{route('bocaagua.edit', $datas->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')
                  <!--BORRADO DE UN CAMPO-->
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!--REDIRECCION A .CREATE Y .INDEX-->
        <a type="button" href="{{route('bocaagua.create') }}" class="btn btn-primary">Crear</a>
        <a type="button" href="{{route('menu.index') }}" class="btn btn-secondary">Atrás</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
