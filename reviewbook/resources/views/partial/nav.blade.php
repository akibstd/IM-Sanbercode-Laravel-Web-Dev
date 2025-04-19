<header id="header" class="header d-flex align-items-center sticky-top navbar-dark " style=" background-color: #FCB454;" >
    <div class="container position-relative d-flex align-items-center justify-content-between d-sm-flex col-sm-11 " >

      <a href="/" class="logo d-flex align-items-center me-auto">
         @auth
        <h1 class="sitename">{{Auth()->user()->name}}</h1><span>.</span>
        @endauth
        @guest
        <h1 class="sitename">Books</h1><span>.</span>
        @endguest
      </a>
         
      <nav id="navmenu" class="navmenu" style="margin-right:300px ">
        <ul class="text-white">
          <li><a href="/">Home</a></li>
          {{-- <li><a href="/daftar">Daftar</a></li> --}}
          <li><a href="/genre">Genre</a></li>
          <li><a href="/books">Books</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div >
      @guest

     
       <a href="/login" class="btn btn-primary mr-2">login</a>
       <a href="/register" class="btn btn-outline-secondary">register</a>
      
       @endguest
       @auth
       <form action="/logout" method="POST">
        @csrf
        <input type="submit" value="logout" class="btn btn-danger">

       </form>
        @endauth
      </div>  

      {{-- <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div> --}}

    </div>
  </header>