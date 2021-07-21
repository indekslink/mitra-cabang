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
                     <a class="nav-link {{active('profil') }}" href="/profil">PROFIL</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link {{active('produk') || active('produk/*') }}" href="/produk">PRODUK</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{active('artikel') || active('artikel/*') }}" href="/artikel">ARTIKEL</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{active('galeri') || active('galeri/*') }}" href="/galeri">GALERI</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{active('kontak') }}" href="kontak">KONTAK</a>
                 </li>
             </ul>

         </div>
     </div>
 </nav>