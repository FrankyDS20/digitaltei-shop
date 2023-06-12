<!DOCTYPE html>
<html lang="es">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Digitaltei | {{$titulo}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"/>




</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    
                    <div class="our-link">
                        <ul>
                            <li><a  href="#" class="text-white"data-bs-toggle="modal" data-bs-target="#staticBackdrop" ><i class="fa fa-user s_color"></i> Mi cuenta</a></li>
                            
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Contactanos</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contactanos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
                        
                          
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Descarga nuestra app movil ya!
                                </li>
                                
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Descuento en Monitores
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Servicios de instalacion
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->
  
<!-- Modal de Login -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="grid">
                
                <form id="loginForm" class="form login">
                    @csrf
                <header class="login__header">
                    <h3 class="login__title" style="font-weight:bold; color: white;">Login</h3>
                </header>
                <div class="login__body">
                    <div class="alert alert-success d-none" role="alert" id="success">
                      </div>
                    <div class="alert alert-danger d-none" id="error" role="alert">
                       
                      </div>
                  <div class="form__field mb-4">
                    <input type="email" name="email" id="email" placeholder="Email" required value="rfreyrebrayaned@gmail.com">
                 
                  </div>
                  <div class="form__field mb-3">
                    <input type="password" name="password" id="password" placeholder="Password" required value="123">
                  
                  </div>

           
                </div>
                <footer class="login__footer">
                    <button type="button" class="enviar btn-success">Iniciar sesion </button>
                    <a class="nav-item" href="{{ route('register.index')}}"">registrar </a>
                  <p><span class="icon icon--info">?</span><a href="#">Olvido su contraseña</a></p>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    


    <!-- Start Main Top -->
    <header class="main-top ">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default " style="overflow: hidden;">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="{{ route('home')}}"><img src="{{ asset('images/logo.png')}}" height="120"   class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home')}}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about.index')}}">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('product.index')}}" >Tienda</a>
                            {{-- <ul class="dropdown-menu">
								<li><a href="{{ route('product.index')}}">Productos</a></li>
								<li><a href="{{ route('product.index')}}">Productos Detalle</a></li>
                                <li><a href="{{ route('product.index')}}">Carrito de Compras</a></li>
                                <li><a href="{{ route('product.index')}}">Checkout</a></li>
                                <li><a href="{{ route('product.index')}}">Mi cuenta</a></li>
                                <li><a href="{{ route('product.index')}}">Wishlist</a></li>
                            </ul> --}}
                        </li>
                        
                        
                             <li class="nav-item"><a class="nav-link" href="{{ route('servic.index')}}">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.index')}}">Contactanos</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
								<p>Carrito</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    @yield('content')
      
    <!-- Start Footer  -->
    @if(isset($marcas))
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            @foreach ($marcas as $marca)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="https://digitalteiperu.com/storage/{{($marca->image)}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Ubicacion</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
					{{-- <div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div> --}}
				</div>
				<hr>
                {{-- <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div> 
                     <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    
</html>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/inewsticker.js')}}"></script>
    <script src="{{asset('js/bootsnav.js')}}"></script>
    <script src="{{asset('js/images-loded.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        $(document).on('click', '.enviar', function() {
            $.ajax({
			url: "https://digitalteiperu.com/api/login",
            
			data: new FormData(document.getElementById("loginForm")),
			method: "post",
			type: "json",
			enctype: "multipart/form-data", //usar siempre y cuando se usa con files
			contentType: false,
			cache: false,
			processData: false, //---
			success: function(response) {
                $('#error').text(response[0].message);
                 $('#success').text(response[0].message);
               if (response[0].codigo!=200) {
                $("#error").removeClass("d-none")
                $("#success").addClass("d-none")
                if (response[0].codigo==405){
                    redireccionar(response[0].user,response[0].employee)
                }
               }  else  if (response[0].codigo==200){
                    $("#error").addClass("d-none") 
                    $("#success").removeClass("d-none") 
            
               }
             },
              error: function() {
              
              }
            });
        });

        function redireccionar(user, employee) {
  // Objeto que contiene los datos a enviar
  var data = {
    user: user,
    employee: employee,
    _token: '{{ csrf_token() }}'
  };

  // Realizar la solicitud AJAX
  $.ajax({
    url: "{{route('register.exception')}} ", // Ruta a la que se enviará la solicitud
    method: 'POST', // Método HTTP utilizado
    data: data, // Datos a enviar
    success: function(response) {
      // Lógica a realizar en caso de éxito
      console.log(response);
    },
    error: function(xhr, status, error) {
      // Lógica a realizar en caso de error
      console.error(error);
    }
  });
}

    </script>

      
</body>

</html>