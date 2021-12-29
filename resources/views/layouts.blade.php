<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>

    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>@yield ('title')</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="/css/linearicons.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" />
    <link rel="stylesheet" href="/css/nice-select.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/css/themify-icons.css" />
    <link rel="stylesheet" href="/css/main.css" />
  </head>

  <body>

    <!--================ Start Header Area =================-->
	
    <header class="header-area">
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          >
            <div class="col menu-left">
              <a class="active" href="{{route('index',$r)}}">Головна</a>
              <a href="{{route('index', $c)}}">Колекції</a>
             
            </div>
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="{{route('index', $r)}}"
                    ><img class="mx-auto" src="/img/logo.png" alt style="max-width: 50%;"
"
                  /></a>
                </span>
              </span>
            </div>
            <nav class="col navbar navbar-expand-lg justify-content-end">
              <!-- Toggler/collapsibe Button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="lnr lnr-menu"></span>
              </button>

              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
                  <li class="nav-item hide-lg">
				 
                    <a class="nav-link" href="{{route('index', $r)}}">Головна</a>
                  </li>
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="{{route('index', $c)}}">Колекції</a>
                  </li>
                  <!-- Dropdown -->
                  <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Pages
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="elements">Elements</a>
                    </div>
                  </li> -->
				  <li class="nav-item">
                  <a class="nav-link"  href="{{route('index', $r)}}">Календар</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('index', $r)}}">Про нас</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    

       @yield ('content')

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget search-widget">
                  <form class="search-form" action="{{route('search')}}" method="get">
                    <input placeholder="Знайти допис" name="search" id="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Знайти допис'">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>

               

                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="category-title">Категорії</h4>
                  <ul class="cat-list mt-20">
				  @foreach($categories as $cat)
				   <li>
                      <a href="{{route('category_id',$cat->id)}}" class="d-flex justify-content-between">
                        <p>{{$cat->name}}</p>
						
						  @foreach($count as $c)
                        @if($cat->id == $c->category_id)
							 <p>	{{$c->art_count}}</p>
							@endif
						@endforeach
                      </a>
                    </li>
				   @endforeach
                  
                  </ul>
                </div>



             
                </div>
              </div>
            </div>
          <!-- End Blog Post Siddebar -->
        </div>
      </div>
    </section>
	
    <!--================ End Blog Post Area =================-->

    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Про нас</h6>
              <p style="
    color: #e9e5e1;
">
Цьогорічна різдвяна магія наповнює ваше серце дитячою радістю, але звуки, зображення та запахи роблять його ще більш значущим. 
Ми допоможемо вам перетворити свій будинок у справжню різдвяну країну чудес…
              </p>
            </div>
          </div>
         
          
          
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Написати нам</h6>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-envelope "></i></a>
              </div>
            </div>
          </div>
        </div>
       
      </div>

    </footer>
    <!--================ End Footer Area =================-->

    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
 <!-- <script src="js/owl.carousel.min.js"></script>-->
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.tabs.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>
