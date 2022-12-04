@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ooopss!</strong> Tienes algunos errores.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
         <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
@endif