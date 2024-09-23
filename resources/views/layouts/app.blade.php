<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px; /* Ajusta la altura según lo necesites */
            width: 100%; /* Asegúrate de que el mapa ocupe todo el ancho del div */
            z-index: 1;
        }
    </style>
    <title>@yield('title', 'Hotel Miranda')</title>
</head>
<body>
    <div class="hoverZone" id="hoverZone">
        <div class="divHeaderDesktop" id="divHeaderDesktop">
            <header class="header">
                <nav>
                    <img id="menuBurguerSvg" src="{{ asset('svg/menuBurguer.svg') }}" class="header__menuBurguerSvg" alt="menu burguer" />
                    <section class="header__logo">
                        <a href="/" class="iconLogo">H</a>
                        <div class="nameHotel">
                            <p class="p1">HOTEL</p>
                            <p class="p2">MIRANDA</p>
                        </div>
                    </section>

                    <ul id="menuBurguer" class="menuDesktop">
                        <li><a href="/about" onclick="toggleMenu()">About Us</a></li>
                        <li><a href="/rooms" onclick="toggleMenu()">Rooms</a></li>
                        <li><a href="/offers" onclick="toggleMenu()">Offers</a></li>
                        <li><a href="/contact" onclick="toggleMenu()">Contact</a></li>
                    </ul>
                    <section class="header__iconSvg">
                        <img src="{{ asset('svg/account.svg') }}" class="header__iconSvg__accountSvg" alt="account" />
                        <img src="{{ asset('svg/search.svg') }}" class="header__iconSvg__searchSvg" alt="search" />
                    </section>
                </nav>
            </header>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        @if (session('error'))
            Toastify({
                className:"toastError",
                text: "{{ session('error') }}",
                duration: 3000, // Duración de la notificación
                gravity: "top", // Posición de la notificación (top o bottom)
                offset: {
                y: 150
                        },
            }).showToast();
        @endif
        @if (session('success'))
            Toastify({
                className:"toastSuccess",
                text: "{{ session('success') }}",
                duration: 3000, // Duración de la notificación
                gravity: "top", // Posición de la notificación (top o bottom)
                offset: {
                y: 150
                        },
            }).showToast();
        @endif
    });
    </script>


    @yield('content')

    <footer>
        <div class="containerFooter">
            <div class="containerFooter--desktop">
                <section class="logo">
                    <p class="iconLogo">H</p>
                    <div class="nameHotel">
                        <p class="p1">HOTEL</p>
                        <p class="p2">MIRANDA</p>
                    </div>
                </section>
                <p class="footerText">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <section class="rrss">
                    <div><img src="{{ asset('svg/facebook.svg') }}" alt="facebook" /></div>
                    <div class="rrss-gold"><img src="{{ asset('svg/twitter.svg') }}" alt="twitter" /></div>
                    <div><img src="{{ asset('svg/behance.svg') }}" alt="behance" /></div>
                    <div><img src="{{ asset('svg/linkedIn.svg') }}" alt="linkedIn" /></div>
                    <div><img src="{{ asset('svg/youtube.svg') }}" alt="youtube" /></div>
                </section>
            </div>
            <div class="containerFooter--desktop">
                <section class="services">
                    <p class="servicesTitle">Services.</p>
                    <article>
                        <ul>
                            <li>+ Resturent & Bar</li>
                            <li>+ Swimming Pool</li>
                            <li>+ Wellness & Spa</li>
                            <li>+ Restaurant</li>
                            <li>+ Conference Room</li>
                            <li>+ Coctail Party House</li>
                        </ul>
                        <ul>
                            <li>+ Gaming Zone</li>
                            <li>+ Marrige Party</li>
                            <li>+ Party Planning</li>
                            <li>+ Tour Consultancy</li>
                        </ul>
                    </article>
                </section>
            </div>
            <div class="containerFooter--desktop">
                <section class="contact">
                    <p class="contact__title">Contact Us.</p>
                    <div class="contact__container">
                        <article>
                            <img src="{{ asset('svg/phone.svg') }}" alt="phone" />
                            <img src="{{ asset('svg/mail.svg') }}" alt="mail" />
                            <img src="{{ asset('svg/map.svg') }}" alt="map" />
                        </article>
                        <article>
                            <div>
                                <p>Phone Number</p>
                                <span>+987 876 765 76 577</span>
                            </div>
                            <div>
                                <p>Mail</p>
                                <span>Hotel@miranda.es</span>
                            </div>
                            <div>
                                <p>Address</p>
                                <span>beach paradise</span>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
            <section class="copyright">
                <div class="copyright__container">
                    <p>Copyright By@Example - 2024</p>
                    <p>Terms of use | Privacy Environmental Policy</p>
                </div>
            </section>
        </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
