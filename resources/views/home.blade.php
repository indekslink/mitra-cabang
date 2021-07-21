@extends('layouts.main',['title'=>'Home'])

@section('content-hero-image')

<div class="container text-center text-light">
    <div class="title my-2 display-5 fw-bold">{{webName()}}</div>
    <div class="desc my-2 fs-5">Spesialis untuk Stamina Makin Prima</div>
    <div class="action my-3">
        <button class="btn btn-my-info btn-lg me-2">Layanan <i class="fas fa-angle-right"></i></button>
        <button class="btn btn-outline-my-info text-light btn-lg">Hubungi Kami <i class="fas fa-angle-right"></i></button>
    </div>
</div>

@endsection

@section('content')
<section id="about" class="py-5">
    <div class="container">

        <div class="display-5 text-my-info text-center fw-bold">Tentang Kami</div>
        <div class="row mt-2 g-4">
            <div class="col-md-6">
                <div class="text-desc ">
                    <p>
                        <span class="fw-bold fs-5">{{webName()}}</span> adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempora eum dolorum neque, delectus recusandae officia non corrupti officiis ducimus voluptatem quo exercitationem ipsum laboriosam unde assumenda rem provident saepe expedita consequuntur explicabo sapiente fugiat. Provident impedit quibusdam suscipit repudiandae nulla consequatur! Debitis, ab? Porro quo ipsa nesciunt. Ullam, odit.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti possimus minus eaque suscipit corrupti natus illum, quae ipsa soluta corporis hic perferendis dignissimos itaque? Fuga atque ipsum minus et aliquam inventore, nobis aut recusandae repudiandae id, reprehenderit praesentium laboriosam sint?
                    </p>

                </div>
                <a href="/profil" class="btn btn-outline-my-info">selengkapnya</a>
            </div>
            <div class="col-md-6">
                <img src="{{asset('files/2.jpeg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="mark-content py-5 text-light">
    <div class="container">

        <div class="row justify-content-center g-4 first">
            <div class="col-md-4 col-sm-6 column ">
                <i class="fas fa-briefcase-medical display-5"></i>
                <span class="value fs-2">10</span>
                <span class="fs-4">
                    Total Produk
                </span>
            </div>
            <div class="col-md-4 col-sm-6 column ">
                <i class="fas fa-users display-5"></i>
                <span class="value fs-2">50</span>
                <span class="fs-4">Total Customer</span>
            </div>
            <div class="col-md-4 col-sm-6 column ">
                <i class="fas fa-clock display-5"></i>
                <span class="value fs-2">24 Jam</span>
                <span class="fs-4">Jam Pelayanan</span>
            </div>

        </div>


    </div>
</section>

<section class="py-5" id="service">
    <div class="container">

        <div class="title-section text-center text-my-info fw-bold  display-5">Layanan Kami</div>
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
<section class="py-5 information">
    <div class="container">
        <div class="display-5 fw-bold text-center">Pilihlah Produk Kami</div>
        <div class="row flex-lg-row mt-4 align-items-center gy-4 flex-column-reverse">
            <div class="col-md-6">
                <div class="row  g-3 h-100">

                    <div class="col-12">
                        <div class="item fs-4">
                            <i class="far fa-dot-circle"></i>
                            <span>STANDAR INTERNASIONAL</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="item fs-4">
                            <i class="far fa-dot-circle"></i>
                            <span>NON ALCOHOL</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="item fs-4">
                            <i class="far fa-dot-circle"></i>
                            <span>HALAL</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="item fs-4">
                            <i class="far fa-dot-circle"></i>
                            <span>NON MLM</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="item fs-4">
                            <i class="far fa-dot-circle"></i>
                            <span>BERIJIN BPOM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/produk/product.png')}}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>
<section class="py-5" id="project">
    <div class="container">

        <div class="display-5 text-my-info text-center fw-bold">Dokumentasi Produk</div>
        <div class="fs-4 text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, perferendis.</div>
        <div class="row mt-5 g-0 justify-content-center">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/1.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/2.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/3.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/4.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/5.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card">
                    <img src="{{asset('images/produk/6.jpg')}}" alt="">
                    <div class="card-body">
                        <div class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, cumque?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection