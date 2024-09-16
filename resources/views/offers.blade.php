<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <!-- <link rel="stylesheet" href="styles.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
  <title>Hotel Miranda</title>
</head>

<body>
  <div class="hoverZone" id="hoverZone">
    <div class="divHeaderDesktop" id="divHeaderDesktop">
      <header class="header">
        <nav>
          <img id="menuBurguerSvg" src="./svg/menuBurguer.svg" class="header__menuBurguerSvg" alt="menu burguer" />
          <section class="header__logo">
            <a href="/" class="iconLogo">H</a>
            <div class="nameHotel">
              <p class="p1">HOTEL</p>
              <p class="p2">MIRANDA</p>
            </div>
          </section>

          <ul id="menuBurguer" class="menuDesktop">
            <li>
              <a href="/about" onclick="toggleMenu()">About Us</a>
            </li>
            <li>
              <a href="/rooms" onclick="toggleMenu()">Rooms</a>
            </li>
            <li>
              <a href="/offers" onclick="toggleMenu()">Offers</a>
            </li>
            <li>
              <a href="/contact" onclick="toggleMenu()">Contact</a>
            </li>
          </ul>
          <section class="header__iconSvg">
            <img src="./svg/account.svg" class="header__iconSvg__accountSvg" alt="account" />
            <img src="./svg/search.svg" class="header__iconSvg__searchSvg" alt="search" />
          </section>
        </nav>
      </header>
    </div>
  </div>
  <section class="containerInfo">
    <div class="info">
      <p class="info__subTitle info--subTitleSmall"> THE ULTIMATE LUXURY </p>
      <p class="info__title info--titleSmall">Our Offers</p>
      <nav class="breadcrumb">
        <a class="breadcrumb__link" href="/">Home</a>
        <span class="breadcrumb__divider"> | </span>
        <p class="breadcrumb__pageActual">Offers</p>
      </nav>
    </div>
  </section>
  <section class="offersPage">
      <div class="containerOffer">
        @foreach($roomsOffers as $room)
      <article class="offer">
        <div class="offer__divImg">
          <img class="offer__divImg__img" src="{{  $room->images->first()->image_url }}" alt="habitacion hotel" />
        </div>
        <div class="offer__divPrices">
          <div class="offer__divPrices__old">
            <p class="offer__divPrices__old__number">${{$room->OfferPrice + ($room->OfferPrice * 1.10)}}</p>
            <p class="offer__divPrices__old__text">/Night</p>
          </div>
          <div class="offer__divPrices__new">
            <p class="offer__divPrices__new__number">${{$room->OfferPrice}}</p>
            <p class="offer__divPrices__new__text">/Night</p>
          </div>
        </div>
        <article class="descriptionOffer">
          <div class="descriptionOffer__title">
            <h3 class="subTitle">{{$room->roomType->room_type}}</h3>
            <h1 class="title title--descriptionOffer">Luxury {{$room->roomType->room_type}}</h1>
          </div>
          <div class="containerText">
            <p class="containerText__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo
              consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur.
            </p>
            <div class="amenitiesRoom amenitiesRoom--offer">
              <div class="amenitiesRoom__container amenitiesRoom--container">
                <div class="amenitiesRoom__container__div divAmenitiesOffer">
                  <article class="amenitiesRoom__container__div__icons gridIcon--offer">
                    <li>
                      <img src="./svg/amenitiesRoom/airConditioner.svg" alt="air Conditioner" />
                      <p>Air conditioner</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/breakfast.svg" alt="breakfast" />
                      <p>Breakfast</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/cleaning.svg" alt="cleaning" />
                      <p>Cleaning</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/grocery.svg" alt="grocery" />
                      <p>Grocery</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/shopNear.svg" alt="shop Near" />
                      <p>Shop near</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/wifi.svg" alt="wifi" />
                      <p>High speed WiFi</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/kitchen.svg" alt="kitchen" />
                      <p>Kitchen</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/shower.svg" alt="shower" />
                      <p>Shower</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/singleBed.svg" alt="singleBed" />
                      <p>Single bed</p>
                    </li>
                    <li>
                      <img src="./svg/amenitiesRoom/towels.svg" alt="towels" />
                      <p>Towels</p>
                    </li>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <button class="descriptionOffer__button">BOOK NOW</button>
        </article>
      </article>
      @endforeach
    </div>
  </section>
  <section class="popularRooms">
    <div class="popularRooms__div">
      <h3 class="popularRooms__div__subTitle">Popular List</h3>
      <h1 class="popularRooms__div__title">Popular Rooms</h1>
    </div>
    <section class="roomsHome">
      <article class="slider">
        <div class="swiper swiperOfferRoom ">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($roomsAll as $room)
            <div class="swiper-slide">
              <img class="imgSlideRoom" src="{{  $room->images->first()->image_url }}" alt="habitacion hotel" />
              <div class="roomsHome__icons relatedRoom--icons">
                <img src="./svg/bed.svg" alt="bed" />
                <img src="./svg/wifi.svg" alt="wifi" />
                <img src="./svg/car.svg" alt="car" />
                <img src="./svg/cold.svg" alt="cold" />
                <img src="./svg/gym.svg" alt="gym" />
                <img src="./svg/smoking.svg" alt="smoking" />
                <img src="./svg/cocktail.svg" alt="cocktail" />
              </div>
              <div class="minimal minimal--popularoffer">
                <p class="minimal__title">Minimal Duplex Room</p>
                <p class="minimal__subTitle">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </p>
                <div class="minimal__divPrice">
                  <p class="minimal__divPrice__price">$345/Night</p>
                  <a class="minimal__divPrice__booking" href="http://127.0.0.7:5500/room_details.html"
                    onclick="toggleMenu()">Booking Now</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev "></div>
          <div class="swiper-button-next "></div>
        </div>
      </article>
    </section>
  </section>
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
          <div>
            <img src="./svg/facebook.svg" alt="facebook" />
          </div>
          <div class="rrss-gold">
            <img src="./svg/twitter.svg" alt="twitter" />
          </div>
          <div>
            <img src="./svg/behance.svg" alt="behance" />
          </div>
          <div>
            <img src="./svg/linkedIn.svg" alt="linkedIn" />
          </div>
          <div>
            <img src="./svg/youtube.svg" alt="youtube" />
          </div>
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
              <img src="./svg/phone.svg" alt="phone" />
              <img src="./svg/mail.svg" alt="mail" />
              <img src="./svg/map.svg" alt="map" />
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

</body>

</html>
