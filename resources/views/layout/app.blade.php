<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('asset/bootstrap/css/bootstrap.min.css')}} ">
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.includes.navbar')
        <div class="container">

           {{-- start of content --}}
                @yield('content');
           {{-- end of content --}}
        </div>

        <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
  
</body>
</html>