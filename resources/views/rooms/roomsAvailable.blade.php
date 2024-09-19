
@extends('layouts.app')

@section('title', 'Hotel Miranda - Rooms Available')

@section('content')
  <section class="containerInfo">
    <div class="info">
      <p class="info__subTitle info--subTitleSmall"> THE ULTIMATE LUXURY </p>
      <p class="info__title info--titleSmall">Rooms Available</p>
      <nav class="breadcrumb">
        <a class="breadcrumb__link" href="/">Home</a>
        <span class="breadcrumb__divider"> | </span>
        <p class="breadcrumb__pageActual">Rooms Available</p>
      </nav>
    </div>
  </section>
  <section class="roomsPage">
    <div class="CardContainer">
      @foreach($rooms as $room)
      <article class="roomcard">
        <img class="roomcard__img" src="{{  $room->images->first()->image_url }}" alt="habitacion hotel" />
        <div class="roomcard__icons">
          <img src="./svg/bed.svg" alt="bed" />
          <img src="./svg/wifi.svg" alt="wifi" />
          <img src="./svg/car.svg" alt="car" />
          <img src="./svg/cold.svg" alt="cold" />
          <img src="./svg/gym.svg" alt="gym" />
          <img src="./svg/smoking.svg" alt="smoking" />
          <img src="./svg/cocktail.svg" alt="cocktail" />
        </div>
        <div class="roomcard__minimal">
          <p class="roomcard__minimal__title">{{$room->roomType->room_type}}</p>
          <p class="roomcard__minimal__subTitle">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <div class="roomcard__minimal__divPrice">
            <p class="roomcard__minimal__divPrice__price">${{$room->OfferPrice}}/Night</p>
            <a class="roomcard__minimal__divPrice__booking" href="{{ route('roomDetails', $room->id) }}" onclick="toggleMenu()">Booking Now</a>
          </div>
        </div>
      </article>
      @endforeach
    </div>
    </section>

    @endsection
