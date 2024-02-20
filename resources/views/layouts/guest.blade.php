<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="{{ asset('zendo_assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('zendo_assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('zendo_assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('zendo_assets/css/nivo-lightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('zendo_assets/css/nivo_themes/default/default.css') }}">
        <link rel="stylesheet" href="{{ asset('zendo_assets/css/style.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <!-- preloader section -->
        <section class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
        </section>

        {{-- Guest Header  --}}
        {{-- <div class="bg-white shadow-md" x-data="{ isOpen: false }">
            <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
              <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
                  href="/">
                  RESTO
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                  <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                      <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                      </path>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
              <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                  href="/">Home</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                  href="{{ route('categories.index') }}">Categories</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                  href="{{ route('menus.index') }}">Our Menu</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                  href="{{ route('reservations.step.one') }}">Make Reservation</a>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
              </div>
            </nav>
        </div> --}}

        <!-- navigation section -->
        <section class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">RESTO</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" class="smoothScroll">HOME</a></li>
                        <li><a href="/categories" class="smoothScroll">CATEGORIES</a></li>
                        <li><a href="/menus" class="smoothScroll">SPECIAL MENU</a></li>
                        <li><a href="/reservations/step-one" class="smoothScroll">MAKE RESERVATION</a></li>
                        <li><a href="/contact" class="smoothScroll">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="font-sans text-gray-900 antialiased min-h-screen">
            {{ $slot }}
        </div>

        {{-- Guest Footer --}}
        {{-- <footer class="bg-gray-800 border-t border-gray-200">
            <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
              <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                  <li>Home</li>
                  <li>About</li>
                  <li>Contact</li>
                  <li>Terms</li>
                </ul>
              </div>
              <div class="flex justify-center mt-4 lg:mt-0">
                <a>
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-3">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                    <path stroke="none"
                      d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
                </a>
              </div>
            </div>
        </footer> --}}

        <footer class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Contact Info.</h2>
                        <div class="ph">
                            <p><i class="fa fa-phone"></i> Phone</p>
                            <h4>090-080-0760</h4>
                        </div>
                        <div class="address">
                            <p><i class="fa fa-map-marker"></i> Our Location</p>
                            <h4>120 Duis aute irure, California, USA</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Open Hours</h2>
                            <p>Sunday <span>10:30 AM - 10:00 PM</span></p>
                            <p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
                            <p>Saturday <span>11:30 AM - 10:00 PM</span></p>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="heading">Follow Us</h2>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
                            <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
                            <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
                            <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
                            <li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT JS FILES -->
        <script src="{{ asset('zendo_assets/js/jquery.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/jquery.parallax.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/smoothscroll.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/nivo-lightbox.min.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('zendo_assets/js/custom.js') }}"></script>
    </body>
</html>
