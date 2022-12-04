@extends('layout.app')

@section('content')
      <!--VISUALIZACION DE DATOS DE SINIESTRO CON BOTONES DE EDICION Y ELIMINACION-->
    <div class="container">
      <h3>Lista de Siniestros</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Numero</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Boca de Agua</th>
              <th scope="col">Id de solicitud</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($siniestro as $sn)
            <tr>
                <th scope="sn">{{$sn->id}}</th>
                <td>{{$sn->numero}}</td>
                <td>{{$sn->descripcion}}</td>
                <td>{{$sn->boca_agua_id}}</td>
                <td>{{$sn->solicitud_id}}</td>
                <td>
                  <form action="{{route('siniestro.destroy', $sn->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{route('siniestro.edit', $sn->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a type="button" href="{{route('siniestro.create') }}" class="btn btn-primary">Crear</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
