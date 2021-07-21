@extends('layouts.main',['title'=>'Profil'])

@section('content-hero-image')

<div class="container text-center text-light">
    <div class="title my-2 display-5 fw-bold">PROFIL</div>
    <div class="desc my-2 fs-5">{{Breadcrumbs::render('profil')}}</div>

</div>

@endsection

@section('content')
<h1>Profil content</h1>
@endsection