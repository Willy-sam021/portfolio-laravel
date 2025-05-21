<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title','williams portfolio')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="/favicon.ico" rel="icon">
        <link href="/main.css" rel="stylesheet">
        <link href="/fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <!-- Google Font -->
        <link href="{{url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap')}}" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
        
        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <div>
                    <img src="/img/logo.png"  width='80px' alt="">
                </div>
             <a href="index.html" class="navbar-brand">Willy-sam</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#skill" class="nav-item nav-link">Skills</a>
                        <a href="#project" class="nav-item nav-link">Project</a>
                        <a href="#portfolio" class="nav-item nav-link">Portfolio</a>

                        <a href="#resume" class="nav-item nav-link">Resume</a>


                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>I'm</p>
                                <h1>Williams Samuel</h1>
                                <h2></h2>
                                <div class="typed-text">PHP Web Developer</div>

                            </div>
                            <h2 class='text-light small'><i>Welcome to my Portfolio</i></h2>
                            <div class="hero-btn">
                                {{-- <a class="btn" href="">Hire Me</a> --}}
                                <a class="btn" href="#contact">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/refined.jpg " class='rounded-circle img-fluid'alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        @yield('about')
        <!-- About End -->

        <!-- Banner Start -->
        @yield('resume')        <!-- Banner End -->


        @yield('skills')
        <!-- Service Start -->
        @yield('service')        <!-- Service End -->


         <!-- Experience Start -->
        @yield('experience')
        <!-- Job Experience End -->


        <!-- Banner Start -->
       @yield('banner')
        <!-- Banner End -->


        <!-- Portfolio Start -->
        @yield('portfolio')
        <!-- Portfolio End -->




        <!-- Price Start -->
       @yield('price')
        <!-- Price End -->


        <!-- Testimonial Start -->
        @yield('testimonial')
        <!-- Testimonial End -->


        <!-- Team Start -->
        @yield('team')
        <!-- Team End -->




        <!-- Blog Start -->
        @yield('blog')
        <!-- Blog End -->

        {{-- contact  --}}
        @yield('contact')

        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid" id='contact'>
                <div class="container">
                    <div class="footer-info">
                        <h2>Williams Samuel</h2>
                        <h3>18, Awonusi Street Alagbado Lagos, Nigeria</h3>
                        <div class="footer-menu">
                            <p>+234 8145030083</p>
                            <p>s.o.williams021@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href="https://github.com/Willy-sam021"><i class="fa-brands fa-github"></i></a>
                            <a href="https://linkedin.com/in/williams-samuel"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>Williams &copy;2025</p>

					<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a></p> --}}
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- Pre Loader -->
        {{-- <div id="loader" class="show">
            <div class="loader"></div>
        </div> --}}


        <!-- JavaScript Libraries -->
        <script src="{{url('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/typed/typed.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
