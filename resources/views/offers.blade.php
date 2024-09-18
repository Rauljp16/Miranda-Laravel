
    @extends('layouts.app')

    @section('title', 'Offers')

    @section('content')

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
          <button onclick="window.location.href='{{ route('roomDetails', $room->id) }}'" class="descriptionOffer__button">BOOK NOW</button>
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
                  <a class="minimal__divPrice__booking" href="{{ route('roomDetails', $room->id) }}"
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
  @endsection
