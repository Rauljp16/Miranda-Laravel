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
      <img class="contactPage__divImg__imgMap" src="./images/map.webp" alt="maps address" />
    </div>
    <section class="formContact">
      <div class="formContact__containerInput">
        <div class="formContact__containerInput__two">
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/user.svg" alt="user" />
            <input class="formContact__containerInput__two__div__text" input="input" placeholder="Your full name">
          </div>
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/phone.svg" alt="phone" />
            <input class="formContact__containerInput__two__div__number" input="input" placeholder="Add phone number">
          </div>
        </div>
        <div class="formContact__containerInput__two">
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/email.svg" alt="email" />
            <input class="formContact__containerInput__two__div__email" input="input" placeholder="Enter email address">
          </div>
          <div class="formContact__containerInput__two__div">
            <img class="formContact__containerInput__two__div__svg" src="./svg/contactPage/subject.svg" alt="subject" />
            <input class="formContact__containerInput__two__div__text" input="input" placeholder="Enter subject">
          </div>
        </div>
      </div>
      <div class="formContact__div">
        <img class="formContact__div__svg" src="./svg/contactPage/message.svg" alt="message" />
        <textarea class="formContact__div__text message" placeholder="Enter message"></textarea>
      </div>
      <button class="buttonFormContact">SEND</button>
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