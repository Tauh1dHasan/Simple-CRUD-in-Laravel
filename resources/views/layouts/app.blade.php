<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple CRUD</title>
        <meta name="keyword" content="CRUD in Laravel">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Style files link -->
        <!-- Bootswatch file link -->
            {{-- Use this dynamic URL to add all asset folder link --}}
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <!-- Custom style sheet link -->
        {{-- Use this dynamic URL to add all asset folder link --}}
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <!-- Jquery link -->
        {{-- Use this dynamic URL to add all asset folder link --}}
        <script src="{{ URL::asset('js/jquery.js') }}"></script>
    </head>
    <body>
        @include('inc/navbar')
        @if (Request::is('/'))
            <div class="jumbotron text-center">
                @include('inc/showcase')
            </div>
        @endif
        
        <div class="container">
           <div class="row">
                <div class="col-md-9 col-lg-9">
                    @if (session('success'))
                        @include('inc/message')
                    @endif
                    @yield('content')
                </div>
                <div class="col-md-3 col-lg-3">
                    @include('inc/sidebar')
                </div>
           </div>
        </div>

        <footer class="footer text-center">
            CopyRight 2021 &copy; All Right Reserved
        </footer>
        

        {{-- Linking bootstrap javascript --}}
        {{-- Use this dynamic URL to add all asset folder link --}}
        <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    </body>
</html>
