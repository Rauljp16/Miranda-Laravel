
@extends('layouts.app')

@section('title', 'Hotel Miranda - Contact')

@section('content')

  <section class="containerInfo">
    <div class="info">
      <p class="info__subTitle info--subTitleSmall"> THE ULTIMATE LUXURY </p>
      <p class="info__title info--titleSmall">New Details</p>
      <nav class="breadcrumb">
        <a class="breadcrumb__link" href="/">Home</a>
        <span class="breadcrumb__divider"> | </span>
        <p class="breadcrumb__pageActual">Blog</p>
      </nav>
    </div>
  </section>
  <section class="contactPage">
    <div class="hotelDetails">
      <article class="detail">
        <p class="detail__number">01</p>
        <div class="detail__info">
          <img src="./svg/map.svg" alt="map" />
          <div class="detail__info__address">
            <h1 class="detail__info__address__title">Hotel Address</h1>
            <p class="detail__info__address__text">Bayahíbe 23000 República Dominicana</p>
          </div>
        </div>
      </article>
      <article class="detail">
        <p class="detail__number">02</p>
        <div class="detail__info">
          <img src="./svg/phone.svg" alt="phone" />
          <div class="detail__info__address">
            <h1 class="detail__info__address__title">Phone Number</h1>
            <p class="detail__info__address__text"> + 97656 8675 7864 7</p>
            <p class="detail__info__address__text">+ 876 766 8675 765 6</p>
          </div>
        </div>
      </article>
      <article class="detail">
        <p class="detail__number">03</p>
        <div class="detail__info">
          <img src="./svg/mail.svg" alt="mail" />
          <div class="detail__info__address">
            <h1 class="detail__info__address__title">Email</h1>
            <p class="detail__info__address__text">info@webmail.com</p>
            <p class="detail__info__address__text">jobs.webmail@mail.com</p>
          </div>
        </div>
      </article>
    </div>
    <div class="contactPage__divImg">

    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        var map = L.map('map').setView([18.333861, -68.809556], 9); // Coordenadas del hotel

        // Agregar una capa de mapa de satélite
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Agregar un marcador
        L.marker([18.333861, -68.809556]).addTo(map)
            .bindPopup('Miranda Hotel Resorts Bayahibe')
            .openPopup();
    </script>

    </div>
    <form action="{{ route('messages.store') }}" class="formContact" method="POST">
    @csrf
      <div class="formContact__containerInput">
        <div class="formContact__containerInput__two">
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/user.svg" alt="user" />
            <input class="formContact__containerInput__two__div__text" type="text" name="name" required placeholder="Your full name">
          </div>
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/phone.svg" alt="phone" />
            <input class="formContact__containerInput__two__div__number" type="text" name="phone" required placeholder="Add phone number">
          </div>
        </div>
        <div class="formContact__containerInput__two">
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/email.svg" alt="email" />
            <input class="formContact__containerInput__two__div__email" type="email" name="email" required placeholder="Enter email address">
          </div>
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/subject.svg" alt="subject" />
            <input class="formContact__containerInput__two__div__text" type="text" name="subject" required placeholder="Enter subject">
          </div>
        </div>
      </div>
      <div class="formContact__div">
        <img class="formContact__div__svg" src="./svg/contactPage/message.svg" alt="message" />
        <textarea class="formContact__div__text message" placeholder="Enter message" name="message" required></textarea>
      </div>
      <button type="submit" class="buttonFormContact">SEND</button>
    </form>
  </section>
@endsection
