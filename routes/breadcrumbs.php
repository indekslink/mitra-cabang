<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('profil', function ($trail) {
    $trail->parent('home');
    $trail->push('Profil', '/profil');
});
