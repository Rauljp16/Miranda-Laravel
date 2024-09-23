@extends('layouts.app')

@section('title', 'Hotel Miranda - Rooms Details')

@section('content')


  <section class="containerInfo">
    <div class="info">
      <p class="info__subTitle info--subTitleSmall"> THE ULTIMATE LUXURY </p>
      <p class="info__title info--titleSmall">Room Details</p>
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
      <form action="{{ route('room.storeBooking') }}" method="POST" class="CheckAvailability">
      @csrf
        <input class="inputRoomDetails" type="hidden" name="room_id" value="{{ $room->id }}">
        <h3 class="CheckAvailability__title">Check Availability</h3>
        <div class="inputContainer--RoomDetails">
            <label>Check In</label>
            <img src="../svg/calendar.svg" class="CheckAvailability__checkIn" alt="account" />
            <input class="inputRoomDetails" type="date" name="checkIn" required/>
        </div>
        <div class="inputContainer--RoomDetails">
            <label>Check Out</label>
            <img src="../svg/calendar.svg" class="CheckAvailability__checkOut" alt="account" />
            <input class="inputRoomDetails" type="date" name="checkOut" required/>
        </div>
        <label>Full Name</label>
        <img src="../svg/user.svg" class="CheckAvailability__user" alt="account" />
        <input class="inputRoomDetails" type="text" placeholder="Full Name" name="name" required/>
        <button type="submit">CHECK AVAILABILITY</button>
      </form>
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
                    <a class="minimal__divPrice__booking" href="{{ route('roomDetails', 9) }}" onclick="toggleMenu()">Booking Now</a>
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
                    <a class="minimal__divPrice__booking" href="{{ route('roomDetails', 3) }}" onclick="toggleMenu()">Booking Now</a>
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
  @endsection
