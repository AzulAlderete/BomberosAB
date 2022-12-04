@if (session('success'))

    <div class="alert alert-success" role="alert">
         {{ session('success') }}
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
@endif



@if (session('info'))
    <div class="alert alert-info " role="alert">
        {{ session('info') }}
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning " role="alert">
        {{ session('warning') }}
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger " role="alert">
        {{ session('error') }}
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
@endif
