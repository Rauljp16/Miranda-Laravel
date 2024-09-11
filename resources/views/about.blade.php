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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
      <p class="info__title info--titleSmall">About Us</p>
      <nav class="breadcrumb">
        <a class="breadcrumb__link" href="/">Home</a>
        <span class="breadcrumb__divider"> | </span>
        <p class="breadcrumb__pageActual">About</p>
      </nav>
    </div>
  </section>

  <section class="videoHome videoHome--about">
    <div class="videoHome--aboutContainer">
      <div class="video--aboutContainer">
        <iframe width="100%" height="100%"
          src="https://www.youtube.com/embed/Bu3Doe45lcU?si=wtBeVepc7D6BgOBd&amp;start=155&end=180"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <p class="videoHome__title title--about">
        Hello. Our hotel has been present for over 20 years. We make the best
        for all our customers.
      </p>
    </div>
  </section>
  <section class="iconInfo">
    <div class="iconInfo__container">
      <div class="iconInfo__container__item">
        <img class="iconContainer__svg" src="./svg/breakfast.svg" alt="breakfast icon" />
        <p>BREAKFAST</p>
      </div>
      <div class="iconInfo__container__item container--airport">
        <img class="iconContainer__svg" src="./svg/airport.svg" alt="breakfast icon" />
        <p>AIRPORT PICKUP</p>
      </div>
      <div class="iconInfo__container__item">
        <img class="iconContainer__svg" src="./svg/cityGuide.svg" alt="breakfast icon" />
        <p>CITY GUIDE</p>
      </div>
      <div class="iconInfo__container__item item--bbq">
        <img class="iconContainer__svg" src="./svg/bbq.svg" alt="breakfast icon" />
        <p>BBQ PARTY</p>
      </div>
      <div class="iconInfo__container__item ">
        <img class="iconContainer__svg" src="./svg/luxuryRoom.svg" alt="breakfast icon" />
        <p>LUXURY ROOM</p>
      </div>
    </div>
  </section>
  <section class="facilitiesRestaurant">
    <div class="facilitiesRestaurant__container">
      <div>
        <img class="facilitiesRestaurant__container__img" src="./images/restaurant.webp" alt="imagen restaurante" />
      </div>
      <div class="facilitiesRestaurant__container__text">
        <h3 class="subTitle facilitiesRestaurant--subtitle ">RESTAURANT</h3>
        <H1 class="title facilitiesRestaurant--title">Get Restaurant Facilities & Many Other More</H1>
        <p class="facilitiesRestaurant__container__text__description">Lorem ipsum dolor sit amet, consectetur
          adipisicing
          elit, sed
          do
          eiusmod tem
          por incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <button class="facilitiesRestaurant__container__text__button">TAKE A TOUR</button>
      </div>
    </div>
  </section>
  <section class="facilitiesHome facilitiesAbout">
    <article class="slider sliderAbout1">
      <p class="subTitle subTitle--noButton subTitle--about">FACILITIES</p>
      <p class="title titleFacilities--about">Core Features</p>
      <div class="swiper swiperAbout1 ">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/rating.svg" alt="rating" />
                <p class="numberFacilitiesAbout iconContainer__number ">01</p>
              </div>
              <p class="title title--small title--about">Have High Rating</p>
              <p class="textArchivo text--about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/quietHour.svg" alt="svg imagen" />
                <p class="numberFacilitiesAbout iconContainer__number ">02</p>
              </div>
              <p class="title title--small title--about">Quiet Hours</p>
              <p class="textArchivo text--about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/bestLocation.svg" alt="svg imagen" />
                <p class="numberFacilitiesAbout iconContainer__number ">03</p>
              </div>
              <p class="title title--small title--about">Best Locations</p>
              <p class="textArchivo text--about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/freeCancelation.svg" alt="svg imagen" />
                <p class="numberFacilitiesAbout iconContainer__number ">04</p>
              </div>
              <p class="title title--small title--about">Free Cancellation</p>
              <p class="textArchivo text--about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/pay.svg" alt="svg imagen" />
                <p class="numberFacilitiesAbout iconContainer__number ">05</p>
              </div>
              <p class="title title--small title--about">Payment Options</p>
              <p class="textArchivo text--about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCardAbout facilityCard ">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/specialOffers.svg" alt="svg imagen" />
                <p class="numberFacilitiesAbout iconContainer__number ">06</p>
              </div>
              <p class="title title--small title--about">Special Offers</p>
              <p class="textArchivo text--about ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination paginationsAbout1"></div>
      </div>
    </article>
  </section>
  <section class="counter">
    <h3 class="subTitle subTitleAbout">COUNTER</h3>
    <h1 class="title titleAbout">Some Fun Facts</h1>
    <div class="containerCardsAbout">
      <section class="containerCardsAbout__card">
        <div class="containerCardsAbout__card__div">
          <img class="iconContainer__svg" src="./svg/happyUsers.svg" alt="svg imagen" />
        </div>
        <div>
          <h1 class="containerCardsAbout__card__div__number">8000</h1>
          <p class="containerCardsAbout__card__div__text">Happy Users</p>
        </div>
      </section>
      <section class="containerCardsAbout__card">
        <div class="containerCardsAbout__card__div">
          <img class="iconContainer__svg" src="./svg/reviews.svg" alt="svg imagen" />
        </div>
        <div>
          <h1 class="containerCardsAbout__card__div__number">10M</h1>
          <p class="containerCardsAbout__card__div__text">Reviews & Appriciate</p>
        </div>
      </section>
      <section class="containerCardsAbout__card">
        <div class="containerCardsAbout__card__div">
          <img class="iconContainer__svg" src="./svg/CountryCoverage.svg" alt="svg imagen" />
        </div>
        <div>
          <h1 class="containerCardsAbout__card__div__number">100</h1>
          <p class="containerCardsAbout__card__div__text">Country Coverage</p>
        </div>
      </section>
  </section>

  <article class="slider">
    <div class="swiper swiperAbout2 ">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img class="img-slider3" src="./images/reviews1.webp" alt="habitacion hotel" />
        </div>
        <div class="swiper-slide">
          <img class="img-slider3" src="./images/reviews2.webp" alt="habitacion hotel" />
        </div>
        <!-- If we need pagination -->
      </div>
      <!-- <div class="swiper-pagination"></div> -->
      <div class="swiper-pagination"></div>
    </div>
  </article>
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