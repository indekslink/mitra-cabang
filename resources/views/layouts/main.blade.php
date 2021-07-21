<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- loader -->
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('partials.webicon')


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- my css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- style per page -->
    @yield('css')

    <title>{{$title ?? ''}} &mdash; {{webName()}}</title>
</head>

<body>
    <div class="to-top">
        <button type="button" class="btn btn-my-info"><i class="fas fa-arrow-up"></i></button>
    </div>
    <div id="loader">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="fs-1 text-my-info ms-1 fw-bold">{{webName()}}</div>
    </div>

    @include('partials.navbar')
    <div id="hero-image">
        @yield('content-hero-image')
    </div>

    @yield('content')

    @include('partials.footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{asset('js/script.js')}}"></script>
    <!-- script per page -->
    @yield('js')

</body>

</html>