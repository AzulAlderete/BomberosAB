<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bombero @yield('title')</title>
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    <!-- <link rel="stylesheet" href="/css/css.css"> -->
</head>

<body id="page-top">
    @guest
      
        @yield('content')

    @else


        <div id="wrapper">
            @include('layout.sidebar')


            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layout.navtop')


                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @endguest
</body>

</html>
