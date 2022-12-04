@extends('layout.app')

@section('content')
      <!--EDICION DE DATOS-->
    <div  class="container">
        <form action="{{ route('siniestro.update', $siniestro->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h3>Edicion de siniestro</h3> 
                </div>
                <div class="form-group">
                    <label for="input">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{$siniestro->numero}}">
                </div>
                <div class="form-group">
                    <label for="input">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"  value="{{$siniestro->descripcion}}">
                </div>
                <div class="form-group">
                    <label for="input">Boca De Agua</label>
                    <select class="form-control" name="boca_agua_id">
                        @foreach($boca_agua as $b_a)
                        {{$b_a->id==$siniestro->boca_agua_id}}
                        @if ($b_a->id==$siniestro->boca_agua_id)
                        <option selected value="{{$b_a->id}}">{{$b_a->numero}}</option>
                        @else
                        <option value="{{$b_a->id}}">{{$b_a->numero}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input">Solicitud</label>
                    <select class="form-control" id="solicitud" name="solicitud_id">
                    @foreach($solicitud as $s)
                        {{$s->id==$siniestro->solicitud_id}}
                        @if ($s->id==$siniestro->solicitud_id)
                        <option selected value="{{$s->id}}">{{$s->id}}</option>
                        @else
                        <option value="{{$s->id}}">{{$s->id}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
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