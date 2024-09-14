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
          <img id="menuBurguerSvg" src="../svg/menuBurguer.svg" class="header__menuBurguerSvg" alt="menu burguer" />
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
            <img src="../svg/account.svg" class="header__iconSvg__accountSvg" alt="account" />
            <img src="../svg/search.svg" class="header__iconSvg__searchSvg" alt="search" />
          </section>
        </nav>
      </header>
    </div>
  </div>
  <section class="containerInfo">
    <div class="info">
      <p class="info__subTitle info--subTitleSmall"> THE ULTIMATE LUXURY </p>
      <p class="info__title info--titleSmall">Ultimate Room</p>
      <nav class="breadcrumb">
        <a class="breadcrumb__link" href="/">Home</a>
        <span class="breadcrumb__divider"> | </span>
        <p class="breadcrumb__pageActual">Room Details</p>
      </nav>
    </div>
  </section>
  <section class="roomDetails">
    <div class="containerInfoDetails">
      <section class="infoDetails">
        <h3 class="infoDetails__subTitle">{{$room->roomType->room_type}}</h3>
        <div class="infoDetails__divTitle">
          <h1 class="infoDetails__divTitle__title">Luxury {{$room->roomType->room_type}}</h1>
          <div class="infoDetails__divTitle__divPrice">
            <p class="infoDetails__divTitle__divPrice__price">${{$room->OfferPrice}}</p>
            <p class="infoDetails__divTitle__divPrice__priceText">/night</p>
          </div>
        </div>
        <img class="infoDetails__img" src="{{  $room->images->first()->image_url }}" alt="habitacion hotel" />
      </section>
      <section class="CheckAvailability">
        <h3 class="CheckAvailability__title">Check Availability</h3>
        <label>Check In</label>
        <img src="../svg/calendar.svg" class="CheckAvailability__checkIn" alt="account" />
        <input type="date" />
        <label>Check Out</label>
        <img src="../svg/calendar.svg" class="CheckAvailability__checkOut" alt="account" />
        <input type="date" />
        <button>CHECK AVAILABILITY</button>
      </section>
    </div>
    <div class="textInfoRoom">
      <p class="textInfoRoom__info">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
        error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
        est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
        sed quia non numquam eius modi tempora incidunt ut labore et dolore
        magnam aliquam quaerat voluptatem.
      </p>
    </div>
    <section class="amenitiesRoom">
      <div class="amenitiesRoom__container">
        <h1 class="amenitiesRoom__container__title">Amenities</h1>
        <div class="amenitiesRoom__container__div">
          <article class="amenitiesRoom__container__div__icons">
            <li>
              <img src="../svg/amenitiesRoom/airConditioner.svg" alt="air Conditioner" />
              <p>Air conditioner</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/breakfast.svg" alt="breakfast" />
              <p>Breakfast</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/cleaning.svg" alt="cleaning" />
              <p>Cleaning</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/grocery.svg" alt="grocery" />
              <p>Grocery</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/shopNear.svg" alt="shop Near" />
              <p>Shop near</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/support.svg" alt="support" />
              <p>24/7 Online Support</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/smartSecurity.svg" alt="smart Security" />
              <p>Smart Security</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/wifi.svg" alt="wifi" />
              <p>High speed WiFi</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/kitchen.svg" alt="kitchen" />
              <p>Kitchen</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/shower.svg" alt="shower" />
              <p>Shower</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/singleBed.svg" alt="singleBed" />
              <p>Single bed</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/towels.svg" alt="towels" />
              <p>Towels</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/strongLocker.svg" alt="strong Locker" />
              <p>Strong Locker</p>
            </li>
            <li>
              <img src="../svg/amenitiesRoom/expertTeam.svg" alt="expert Team" />
              <p>Expert Team</p>
            </li>
          </article>
        </div>
      </div>
    </section>
    <section class="founder">
      <div class="founder__card">
        <div class="founder__card__containerImg">
          <img class="founder__card__containerImg__img" src="../images/founder.webp" alt="habitacion hotel" />
          <div class="founder__card__containerImg__divSvg">
            <img src="../svg/amenitiesRoom/test.svg" alt="air Conditioner" />
          </div>
        </div>
        <h1>Rosalina D. William</h1>
        <h3>Founder, Qux Co.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.
        </p>
      </div>
    </section>
    <section class="cancelation--container">
      <div class="cancelation">
        <h1 class="cancelation__title">Cancellation</h1>
        <div class="cancelation__divText">
          <p class="cancelation__divText__p">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis.
            Fusce
            ut
            metus mattis, consequat
            metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
            refund.</p>
        </div>
      </div>
    </section>
    <section class="relatedRooms">
      <div class="divRelatedTitle">
        <h1 class="title related--title">Related Rooms</h1>
      </div>
      <section class="roomsHome">
        <article class="slider">
          <div class="swiper swiperRoomsRoom">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <img class="imgSlideRoom" src="../images/double-superior.webp" alt="habitacion hotel" />
                <div class="roomsHome__icons relatedRoom--icons">
                  <img src="../svg/bed.svg" alt="bed" />
                  <img src="../svg/wifi.svg" alt="wifi" />
                  <img src="../svg/car.svg" alt="car" />
                  <img src="../svg/cold.svg" alt="cold" />
                  <img src="../svg/gym.svg" alt="gym" />
                  <img src="../svg/smoking.svg" alt="smoking" />
                  <img src="../svg/cocktail.svg" alt="cocktail" />
                </div>
                <div class="minimal">
                  <p class="minimal__title">Double Superior</p>
                  <p class="minimal__subTitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore.
                  </p>
                  <div class="minimal__divPrice">
                    <p class="minimal__divPrice__price">$80/Night</p>
                    <a class="minimal__divPrice__booking" href="http://127.0.0.7:5500/room_details.html"
                      onclick="toggleMenu()">Booking Now</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <img class="imgSlideRoom" src="../images/3.webp" alt="habitacion hotel" />
                <div class="roomsHome__icons relatedRoom--icons">
                  <img src="../svg/bed.svg" alt="bed" />
                  <img src="../svg/wifi.svg" alt="wifi" />
                  <img src="../svg/car.svg" alt="car" />
                  <img src="../svg/cold.svg" alt="cold" />
                  <img src="../svg/gym.svg" alt="gym" />
                  <img src="../svg/smoking.svg" alt="smoking" />
                  <img src="../svg/cocktail.svg" alt="cocktail" />
                </div>
                <div class="minimal">
                  <p class="minimal__title">Suite</p>
                  <p class="minimal__subTitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore.
                  </p>
                  <div class="minimal__divPrice">
                    <p class="minimal__divPrice__price">$120/Night</p>
                    <a class="minimal__divPrice__booking" href="http://127.0.0.7:5500/room_details.html"
                      onclick="toggleMenu()">Booking Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev "></div>
            <div class="swiper-button-next "></div>
          </div>
        </article>
      </section>
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
            <img src="../svg/facebook.svg" alt="facebook" />
          </div>
          <div class="rrss-gold">
            <img src="../svg/twitter.svg" alt="twitter" />
          </div>
          <div>
            <img src="../svg/behance.svg" alt="behance" />
          </div>
          <div>
            <img src="../svg/linkedIn.svg" alt="linkedIn" />
          </div>
          <div>
            <img src="../svg/youtube.svg" alt="youtube" />
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
              <img src="../svg/phone.svg" alt="phone" />
              <img src="../svg/mail.svg" alt="mail" />
              <img src="../svg/map.svg" alt="map" />
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