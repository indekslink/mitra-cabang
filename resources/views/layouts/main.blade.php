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

    <title>{{webName()}}</title>
</head>

<body>
    <div id="loader">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="fs-1 text-my-info ms-1 fw-bold">{{webName()}}</div>
    </div>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="#">
                <img src="{{asset('images/logo-tp.png')}}" alt="" class="me-1">
                {{webName()}}
            </a>
            <div class="hamburger-menu d-lg-none d-flex" data-bs-toggle="collapse" data-bs-target="#menus">
                <span></span><span></span><span></span>
            </div>

            <div class="collapse navbar-collapse d-lg-show" id="menus">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{active('/') }}" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROFILE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KONTAK</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div id="hero-image">

        <div class="container text-center text-light">

            <div class="title my-2 display-5 fw-bold">{{webName()}}</div>
            <div class="desc my-2 fs-5">Spesialis untuk Stamina Makin Prima</div>
            <div class="action my-3">
                <button class="btn btn-my-info btn-lg me-2">Layanan <i class="fas fa-angle-right"></i></button>
                <button class="btn btn-outline-my-info btn-lg">Hubungi Kami <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>

    <section class="py-5" id="service">
        <div class="container">

            <div class="title-section text-center text-my-info  display-5">Layanan Kami</div>
            <div class="mt-2 row g-5 justify-content-center">
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 d-flex ">
                    <span><i class="fas fa-tools fs-4 me-3"></i></span>
                    <div class="content">
                        <div class="title fw-bold  fs-5 lh-1">Lorem, ipsum dolor.</div>
                        <div class="text-desc mt-2"><b>Lorem, ipsum dolor.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore neque aspernatur dolore omnis! Libero expedita neque ipsum alias, magnam ad.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>