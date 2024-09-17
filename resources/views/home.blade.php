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
      <p class="info__subTitle">THE ULTIMATE LUXURY EXPERIENCE</p>
      <p class="info__title">The Perfect Base For You</p>
      <button class="info__take">TAKE A TOUR</button>
      <button class="info__learn">LEARN MORE</button>
    </div>
  </section>

  <section class="date">
    <form class="date__form" action="{{ route('rooms.roomsAvailable') }}" method="GET">
        @csrf
        @method('GET')
      <div class="date__form__div">
        <label class="date__form__div__label">Arrival Date</label>
        <img src="./svg/calendar.svg" class="calendarArrival" alt="account" />
        <input class="date__form__div__input" type="date" name="checkIn" required />
      </div>
      <div class="date__form__div">
        <label class="date__form__div__label">Departure Date</label>
        <img src="./svg/calendar.svg" class="calendarDeparture" alt="account" />
        <input class="date__form__div__input" type="date" name="checkOut" required/>
      </div>
      <button type="submit">CHECK AVAILABILITY</button>
    </form>
  </section>
  <section class="aboutUsHome">
    <article class="aboutUsHome__info">
      <p class="aboutUsHome__info__subTitle">ABOUT US</p>
      <p class="aboutUsHome__info__title">Discover Our Underground.</p>
      <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat.
      </p>
      <button type="button" onclick="window.location.href='{{ url('/about') }}'">BOOK NOW</button>
      </article>
    <div class="containerTeamLuxury">
      <article class="team">
        <div>
          <img src="./images/4.webp" alt="hotel" />
        </div>
        <div class="divTeam">
          <img src="./svg/teamGold.svg" class="teamGold" alt="account" />
          <img src="./svg/teamGrey.svg" class="teamGrey" alt="account" />
          <p class="info__title">Strong Team</p>
          <p class="textRoboto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor.
          </p>
        </div>
      </article>
      <article class="aboutUsHome__luxury">
        <div>
          <img src="./images/3.webp" alt="hotel" />
        </div>
        <div class="divLuxury">
          <img src="./svg/luxury.svg" class="teamGold" alt="luxury svg" />
          <p class="info__title">Luxury Room</p>
          <p class="textRoboto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor.
          </p>
        </div>
      </article>
    </div>
  </section>
  <section class="roomsHome">
    <p class="roomsHome__subTitle">ROOMS</p>
    <p class="roomsHome__title">Hand Picked Rooms</p>
    <div class="roomsHome__icons">
      <img src="./svg/bed.svg" alt="bed" />
      <img src="./svg/wifi.svg" alt="wifi" />
      <img src="./svg/car.svg" alt="car" />
      <img src="./svg/cold.svg" alt="cold" />
      <img src="./svg/gym.svg" alt="gym" />
      <img src="./svg/smoking.svg" alt="smoking" />
      <img src="./svg/cocktail.svg" alt="cocktail" />
    </div>
    <article class="slider">
      <div class="swiper swiperRoomsHome">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          @foreach($rooms as $room)
          <div class="swiper-slide">
            <img class="imgSlideRoom" src="{{  $room->images->first()->image_url }}" alt="habitacion hotel" />
            <div class="minimal">
              <div class="divDesktop">
                <p class="minimal__title">{{$room->roomType->room_type}}</p>
                <p class="minimal__subTitle">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <div class="container--price">
                <p class="price">${{$room->OfferPrice}}</p>
                <p class="price priceText">/night</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev button-prev-roomsHome"></div>
        <div class="swiper-button-next button-next-roomsHome"></div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div>
    </article>
  </section>
  <section class="videoHome ">
    <div class="videoHome__containerVideoHome">
      <div class="videoHome--info">
        <p class="videoHome__containerVideoHome__subTitle">INTRO VIDEO</p>
        <p class="videoHome__containerVideoHome__title">Meet With Our Luxury Place.</p>
        <p class="videoHome__containerVideoHome__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat you have to understand this.
        </p>
        <div class="videoHome__containerVideoHome__videoDiv">
          <iframe width="100%" height="100%"
            src="https://www.youtube.com/embed/Bu3Doe45lcU?si=wtBeVepc7D6BgOBd&amp;start=15&end=75"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy=" strict-origin-when-cross-origin" allowfullscreen"></iframe>
        </div>
        <button>BOOK NOW</button>
      </div>
    </div>
    <div class="divGold"></div>
  </section>
  <section class=" facilitiesHome">
    <article class="slider">
      <p class="subTitle subTitle--noButton">FACILITIES</p>
      <p class="title">Core Features</p>
      <div class="swiper swiperFacilitiesHome ">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/rating.svg" alt="rating" />
                <p class="iconContainer__number">01</p>
              </div>
              <p class="title title--small">Have High Rating</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/quietHour.svg" alt="rating" />
                <p class="iconContainer__number">02</p>
              </div>
              <p class="title title--small">Quiet Hours</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/bestLocation.svg" alt="rating" />
                <p class="iconContainer__number">03</p>
              </div>
              <p class="title title--small">Best Locations</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/freeCancelation.svg" alt="rating" />
                <p class="iconContainer__number">04</p>
              </div>
              <p class="title title--small">Free Cancellation</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/pay.svg" alt="rating" />
                <p class="iconContainer__number">05</p>
              </div>
              <p class="title title--small">Payment Options</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="facilityCard">
              <div class="iconContainer">
                <img class="iconContainer__svg" src="./svg/specialOffers.svg" alt="rating" />
                <p class="iconContainer__number">06</p>
              </div>
              <p class="title title--small">Special Offers</p>
              <p class="textArchivo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </article>
  </section>
  <section class="menuFoodHome">
    <div class="menuFoodHome__iconSvg">
      <img class="menuFoodHome__iconSvg__svg" src="./svg/food.svg" alt="food svg" />
    </div>
    <div class="menuFoodHome__containerText">
      <p class="subTitle subTitle--containerText">MENU</p>
      <p class="title title--containerText">Our Foods Menu</p>
    </div>
    <article class="slider ">
      <div class="swiper swiperMenuFoodHome1 ">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper ">
          <!-- Slides -->
          <div class="swiper-slide ">
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/eggs.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Eggs & Bacon</p>
                <p class="subTitleRoboto elementMenu__text__subTitle ">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/coffe.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Tea or Coffe</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/chia.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Chia Oatmeal</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
          </div>
          <div class="swiper-slide ">
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/fruit.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Fruit Parfait</p>
                <p class="subTitleRoboto elementMenu__text__subTitle ">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/mermelada.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Marmalade Selection</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/cheese.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Cheese Plate</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
          </div>
          <div class="swiper-slide ">
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/eggs.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Eggs & Bacon</p>
                <p class="subTitleRoboto elementMenu__text__subTitle ">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/coffe.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Tea or Coffe</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/chia.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Chia Oatmeal</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
          </div>
          <div class="swiper-slide ">
          <article class="elementMenu">
              <img class="elementMenu__img" src="./images/fruit.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Fruit Parfait</p>
                <p class="subTitleRoboto elementMenu__text__subTitle ">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/mermelada.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Marmalade Selection</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
            <article class="elementMenu">
              <img class="elementMenu__img" src="./images/cheese.webp" alt="habitacion hotel" />
              <div class="elementMenu__text">
                <p class="elementMenu__text__title">Cheese Plate</p>
                <p class="elementMenu__text__subTitle subTitleRoboto">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                </p>
            </article>
          </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev button-prev-foodMenu"></div>
        <div class="swiper-button-next button-next-foodMenu"></div>
      </div>
    </article>

    <article class="slider">
      <div class="swiper swiperMenuFoodHome2 ">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img class="img-slider3" src="./images/4.webp" alt="habitacion hotel" />
          </div>
          <div class="swiper-slide">
            <img class="img-slider3" src="./images/1.webp" alt="habitacion hotel" />
          </div>
          <div class="swiper-slide">
            <img class="img-slider3" src="./images/5.webp" alt="habitacion hotel" />
          </div>
          <!-- If we need pagination -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </article>
  </section>
  <section class="benefits">
    <article>
      <img src="./svg/cohete.svg" alt="cohete" />
      <div class="test">
        <p class="benefits--title">84K<span>+</span></p>
        <p class="benefits--text">Projects are Completed</p>
      </div>
    </article>
    <article>
      <img src="./svg/persons.svg" alt="persons" />
      <div class="test">
        <p class="benefits--title">10M<span>+</span></p>
        <p class="benefits--text">Active Backers Around World</p>
      </div>
    </article>
    <article>
      <img src="./svg/acciones.svg" alt="acciones" />
      <div class="test">
        <p class="benefits--title">02K<span>+</span></p>
        <p class="benefits--text">Categories Served</p>
      </div>
    </article>
    <article>
      <img src="./svg/book.svg" alt="book" />
      <div class="test">
        <p class="benefits--title">100M<span>+</span></p>
        <p class="benefits--text">Idea Raised Funds</p>
      </div>
    </article>
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
