
@extends('layouts.app')

@section('title', 'Hotel Miranda - About Us')

@section('content')

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
        <div class="svgContainerAbout">
        <img class="iconContainer__svg svgColor" src="./svg/breakfast.svg" alt="breakfast icon" />
        <p>BREAKFAST</p>
        </div>
      </div>
      <div class="iconInfo__container__item container--airport">
      <div class="svgContainerAbout">
        <img class="iconContainer__svg svgColor" src="./svg/airport.svg" alt="breakfast icon" />
        <p>AIRPORT PICKUP</p>
        </div>
      </div>
      <div class="iconInfo__container__item">
      <div class="svgContainerAbout">
        <img class="iconContainer__svg svgColor" src="./svg/cityGuide.svg" alt="breakfast icon" />
        <p>CITY GUIDE</p>
        </div>
      </div>
      <div class="iconInfo__container__item item--bbq">
      <div class="svgContainerAbout">
        <img class="iconContainer__svg svgColor" src="./svg/bbq.svg" alt="breakfast icon" />
        <p>BBQ PARTY</p>
        </div>
      </div>
      <div class="iconInfo__container__item ">
      <div class="svgContainerAbout">
        <img class="iconContainer__svg svgColor" src="./svg/luxuryRoom.svg" alt="breakfast icon" />
        <p>LUXURY ROOM</p>
        </div>
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
        <button class="facilitiesRestaurant__container__text__button" onclick="window.location.href='{{ url('/#menuFoodHome') }}'">TAKE A TOUR</button>
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

@endsection
