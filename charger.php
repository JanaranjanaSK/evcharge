<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>EV Station Finder</title>
  <meta name="title" content="Volti - Book Your Eco-Friendly Ride">
  <meta name="description" content="This is a vahicle charging html template made by codewithsadee">
  <style>
    .hidden {
      display: none;
    }

    html {
      scroll-behavior: smooth;
    }
    /* Centered box styling */
.centered-box {
  max-width: 400px;
  margin: 0 auto;
  padding: 15px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Charging header styling */
.charging-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 15px;
}

/* Charger icon and logo size */
.charging-logo {
  width: 60px;
  height: auto;
}

.charger-icon {
  width: 30px;
  height: 30px;
}

/* Charging card styles */
.charging-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 10px;
  padding: 8px 12px;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Left section styling */
.left-section {
  display: flex;
  align-items: center;
}

.icon-circle {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background-color: #e6e6e6;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 8px;
}

/* Right section styling */
.right-section h3 {
  font-size: 14px;
  margin: 0;
}

.right-section p {
  font-size: 12px;
  color: #666;
}

/* Availability buttons */
.charging-availability-button,
.availability-button,
#charger-amount-button {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 5px;
}

/* Responsive adjustments for desktop */
@media (min-width: 768px) {
  .centered-box {
    max-width: 500px;
  }

  .charging-card {
    padding: 6px 10px;
  }

  .charging-availability-button,
  .availability-button,
  #charger-amount-button {
    padding: 4px 8px;
    font-size: 12px;
  }

  .charger-icon {
    width: 28px;
    height: 28px;
  }

  .right-section h3 {
    font-size: 12px;
  }

  .right-section p {
    font-size: 10px;
  }
}


    .charger-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 16px;
    }

    .charging-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 16px;
      display: flex;
      justify-content: space-between;
      width: 400px;
    }

    .top-section {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      color: #888;
      margin-bottom: 8px;
    }

    .top-section .distance,
    .top-section .availability,
    .top-section .last-used {
      background-color: #f0f0f0;
      padding: 4px 8px;
      border-radius: 4px;
    }

    h3 {
      font-size: 16px;
      color: #333;
      margin: 8px 0;
    }

    .location {
      font-size: 14px;
      color: #666;
      margin-bottom: 16px;
    }

    .details {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      color: #333;
      margin-bottom: 16px;
    }

    .detail-item {
      display: flex;
      align-items: center;
    }

    .detail-item span:first-child {
      margin-right: 4px;
    }

    .buttons {
      display: flex;
      gap: 8px;
    }

    .view-button,
    .navigate-button,
    .start-charging {
      flex: 1;
      padding: 10px;
      font-size: 14px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .view-button {
      background-color: #1f8c41;
      color: #fff;
    }

    .navigate-button {
      background-color: #e0e0e0;
      color: #333;
    }

    .start-charging {
      width: 100%;
      background-color: #1f8c41;
      color: #fff;
      padding: 12px;
      font-size: 16px;
      margin-top: 16px;
    }

    /* Container styling */
    .charging-container {
      width: 50%;
      max-width: 900px;
      background-color: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Header styling */
    .charging-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .charging-back-button {
      font-size: 24px;
      background: none;
      border: none;
      cursor: pointer;
    }

    .charging-logo {
      width: 40px;
      height: 40px;
    }

    .charging-station-info h2 {
      font-size: 20px;
      margin-bottom: 8px;
      color: #333;
    }

    .charging-station-info p {
      font-size: 14px;
      color: #777;
    }

    /* Status filter buttons */
    .charging-status-filters {
      display: flex;
      gap: 10px;
      margin: 20px 0;
    }

    .charging-status-button {
      flex: 1;
      padding: 8px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      color: #333;
      background-color: #f0f0f0;
    }

    .charging-status-button.charging-available {
      background-color: #1f8c41;
      color: #fff;
    }

    .charging-status-button.charging-in-use {
      background-color: #f0ad4e;
      color: #fff;
    }

    .charging-status-button.charging-unavailable {
      background-color: #d9534f;
      color: #fff;
    }

    /* Charger info cards */
    .charging-info {
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 100%;
      max-width: 500px;
      margin: auto;
    }

    .charging-card {
      display: flex;
      align-items: center;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      width: 100%;
    }

    .charging-left-section {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .charging-icon-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f0f0f0;
    }

    .charging-icon {
      width: 24px;
      height: 24px;
    }

    .charging-availability-button {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      color: #fff;
      background-color: #4CAF50;
      cursor: default;
    }

    .charging-available-card .charging-availability-button {
      background-color: #4CAF50;
    }

    .charging-in-use-card .charging-availability-button {
      background-color: #FFA500;
    }

    .charging-unavailable-card .charging-availability-button {
      background-color: #D32F2F;
    }

    .charging-right-section {
      margin-left: auto;
      text-align: left;
    }

    .charging-right-section h3 {
      margin: 0;
      font-size: 16px;
      font-weight: bold;
    }

    .charging-right-section p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #666;
    }

    /* Partner button */
    .charging-partner-button {
      font-size: 14px;
      padding: 10px 10px;
      border-radius: 5px;
      background-color: #4CAF50;
      /* Available button color */
      color: white;
      border: none;
      cursor: pointer;
      max-width: 30%;
      /* Ensures the button doesn't stretch too wide */
      text-align: center;
      display: inline-block;
      /* Ensure it behaves like a button */
    }

    /* Slot number */
    .charging-slot-number {
      border: 1px solid #ccc;
      padding: 5px 8px;
      border-radius: 50%;
      width: 40px;
      display: flex;
      justify-content: center;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .charging-card {
        width: calc(50% - 20px);
      }

      .charging-partner-button {
        font-size: 16px;
        /* Increase font size on desktop */

        max-width: 250px;
        /* Limit button width on larger screens */
      }
    }

    @media (max-width: 480px) {
      .charging-card {
        width: 100%;
      }

    }

    @media (min-width: 1200px) {
      .charging-partner-button {
        font-size: 18px;
        /* Even larger font size for big screens */
        /* Adjust padding for very large screens */
      }
    }

    .slot-number {
      border: 1px solid #ccc;
      width: 30px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
    }
  </style>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/loading.svg">
  <link rel="preload" as="image" href="./assets/images/loading-circle.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">


</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class=" preload-box" data-preloader>
    <img src="./assets/images/loading.svg" width="45" height="45" alt="loading">

    <img src="./assets/images/loading-circle.svg" width="75" height="75" alt="loading" class="preload-circle">
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="160" height="50" alt="volti home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact Us</a>
          </li>

        </ul>
      </nav>

      <div class="header-action">

        <a href="tel:+12312345678901" class="contact-number">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

          <span class="span">+(123) 1234-567-8901</span>
        </a>

        <a href="#" class="btn btn-primary">
          <span class="span">Get a quote</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <div class="hero-content" data-reveal="left">

            <h1 class="h1 hero-title">
              Book Your <span class="span">Nearby</span> Station.
            </h1>

            <ul class="hero-list">

              <li>
                <div class="hero-card">
                  <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">Top speed</p>

                  <p class="card-title">80 km/h</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="stopwatch-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">0-40 km/hr in</p>

                  <p class="card-title">3.3 sec</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">Certified Range</p>

                  <p class="card-title">116 km</p>
                </div>
              </li>

            </ul>

            <a href="#about" id="book-now-btn" class="btn btn-primary">
              <span class="span">Book Now</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="1116" height="766" alt="Bike" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-labelledby="about-label" style="display: none;">
        <div class="container">
          <div class="about-content">
            <p class="section-subtitle has-before" id="about-label">Choose your Vehicle.</p>
            <h2 class="h2 section-title">Our mission is to get an electric vehicle charger and find the nearby station</h2>
            <p class="section-text">
              Charge your electric vehicle at home using one of our smart home charge solutions or gain access to over
              3,000 public charging stations.
            </p>

            <div class="about-wrapper">
              <div class="about-card">
                <div class="title-wrapper">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                  <h3 class="card-title" >Cars</h3>
                </div>
                <p class="card-text">We love our customers and we love the way they come.</p>
              </div>

              <div class="about-card">
                <div class="title-wrapper">
                  <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                  <h3 class="card-title">Bike</h3>
                </div>
                <p class="card-text">We love our customers and we love the way they come.</p>
              </div>
            </div>

            <ul class="about-list">
              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                <span class="span">Detachable battery, take home and charge in 3 hours.</span>
              </li>
              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                <span class="span">Enjoy a hassle-free ride by charging just for 3 hours.</span>
              </li>
            </ul>

            <a href="#" id="cars-title" class="btn btn-primary">
              <span class="span">Select Vehicle</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <!-- Car Details Section (initially hidden) -->
          <ul class="blog-list hidden" id="about-banner" data-reveal>


            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder " style="--width: 770; --height: 550;">
                  <img src="./assets/images/kia-ev6.webp" width="770" height="550" loading="lazy"
                    alt="Energy Star Certified Electric Vehicle Chargers" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">Kia EV6</time>

                  <ul class="card-meta-list">



                  </ul>

                  <h3 class="h5">
                    <a href="#service-section" id="nearby-button" class="card-title">
                      NearyBy Station
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/Tata.jpg" width="770" height="550" loading="lazy"
                    alt="Charging Solution For Electric Car & Hybrid Car" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">TATA</time>

                  <ul class="card-meta-list">

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      NearyBy Station
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/MG Comet.jpg" width="770" height="550" loading="lazy"
                    alt="Home Charging Station For A Electric Vehicless" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">MG Comet</time>

                  <ul class="card-meta-list">

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      NearyBy Station
                    </a>
                  </h3>

                </div>

              </div>
            </li>




          </ul>
        </div>
      </section>






      <!-- 
        - #STATS
      -->

      <section id="service-slot" class="section stats" aria-label="statistics">
        <div class="container">
          <div class="centered-box">
             <div class="charging-header">
            <button class="charging-back-button">&#8592;</button>
            <img src="zeon-logo.png" alt="Zeon Logo" class="charging-logo">
          </div>

          <div class="charging-station-info">
            <h2>Sree Saravana Bhavan | Sankagiri</h2>
            <p>Zeon Charging Station, near Salem Toll Gate, Vaikundam, Sankagiri, Tamil Nadu, India</p>
          </div>

          <div class="charging-status-filters">
            <button class="charging-status-button charging-available" onclick="filterChargingSlots('available')">Available</button>
            <button class="charging-status-button charging-in-use" onclick="filterChargingSlots('in-use')">In Use</button>
            <button class="charging-status-button charging-unavailable" onclick="filterChargingSlots('unavailable')">Unavailable</button>
          </div>

          <div class="charger-info">
            <!-- Available chargers -->
            <div class="charging-card available-card" onclick="selectCharger(this)">
              <div class="left-section">
                <div class="icon-circle">
                  <img src="favicon.svg" alt="Charger Icon" class="charger-icon">
                </div>
                <button class="charging-availability-button ">Available</button>
              </div>
              <div class="right-section">
                <h3>CCS2 <span class="slot-number">2</span></h3>
                <p>50 kW • ₹24.9/kWh</p>
              </div>
            </div>

            <!-- In use charger -->
            <div class="charging-card in-use-card" style="display: none;">
              <div class="left-section">
                <div class="icon-circle">
                  <img src="favicon.svg" alt="Charger Icon" class="charger-icon">
                </div>
                <button class="availability-button ">In Use</button>
              </div>
              <div class="right-section">
                <h3>CCS2 <span class="slot-number">1</span></h3>
                <p>50 kW • ₹24.9/kWh</p>
              </div>
            </div>

            <!-- Unavailable charger -->
            <div class="charging-card unavailable-card" style="display: none;">
              <div class="left-section">
                <div class="icon-circle">
                  <img src="favicon.svg" alt="Charger Icon" class="charger-icon">
                </div>
                <button class="availability-button ">Unavailable</button>
              </div>
              <div class="right-section">
                <h3>CCS2 <span class="slot-number">3</span></h3>
                <p>50 kW • ₹24.9/kWh</p>
              </div>
            </div>
          </div>

          <button id="charger-amount-button" class="charging-partner-button" style="display: none;">
            Charge via Partner App
          </button>
          </div>
         
        </div>
      </section>






      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service-section" aria-labelledby="service-label" style="display: none;">
        <div class="container">

          <p class="section-subtitle has-before" id="service-label" data-reveal>What We Do!</p>

          <h2 class="h2 section-title" data-reveal>
            NearyBy Chargers
          </h2>

          <div class="wrapper">

            <ul class="service-list" data-reveal="left">

              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button" onclick="showServiceSlot()">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>
              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>
              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>



            </ul>



            <ul class="service-list" data-reveal="right">

              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>
              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>
              <li class="service-item">
                <div class="charger-card">
                  <div class="top-section">
                    <span class="distance">11 km</span>
                    <span class="availability">Available</span>
                    <span class="last-used">Last used 6 minutes ago</span>
                  </div>
                  <h3>Sree Saravana Bhavan | Sankagiri</h3>
                  <p class="location">Zeon Charging Station, near Saram Toll Gate, Vakutaram, Sankagiri, Tamil Nadu, India</p>
                  <div class="details">
                    <div class="detail-item">
                      <span>⚡</span>
                      <span>50 - 60 kW</span>
                    </div>
                    <div class="detail-item">
                      <span>💲</span>
                      <span>₹62</span>
                    </div>
                    <div class="detail-item">
                      <span>💰</span>
                      <span>₹25/kWh</span>
                    </div>
                  </div>
                  <div class="buttons">
                    <button class="view-button">View Charger</button>
                    <button class="navigate-button">Navigate</button>
                  </div>
                </div>


              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" style="display: none;">
        <div class="container">

          <div class="cta-card" data-reveal="left">

            <div>
              <h2 class="h1 card-title">Designed for the our roads.</h2>

              <p class="card-text">
                Consectetur adipiscing elit sed do tempor labor dolore magna aliqua quis suspendisse.
              </p>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="span">Book Now</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="cta-banner" data-reveal="right">
            <img src="./assets/images/cta-banner.jpg" width="330" height="206" loading="lazy" alt="cta banner"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <!-- <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <div class="title-wrapper" data-reveal>

            <div>
              <p class="section-subtitle has-before" id="blog-label">Fresh News</p>

              <h2 class="h2 section-title">Our recent article for the electric vehicle systems</h2>
            </div>

            <a href="#" class="btn btn-secondary">
              <span class="span">View More Blog</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <ul class="blog-list" data-reveal>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-1.jpg" width="770" height="550" loading="lazy"
                    alt="Energy Star Certified Electric Vehicle Chargers" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Energy Star Certified Electric Vehicle Chargers
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-2.jpg" width="770" height="550" loading="lazy"
                    alt="Charging Solution For Electric Car & Hybrid Car" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Charging Solution For Electric Car & Hybrid Car
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="./assets/images/blog-3.jpg" width="770" height="550" loading="lazy"
                    alt="Home Charging Station For A Electric Vehicless" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Home Charging Station For A Electric Vehicless
                    </a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section> -->





      <!-- 
        - #CONTACT
      -->

      <section class="contact" aria-label="contact" data-reveal="right" style="display: none;">
        <div class="container">

          <ul class="contact-list">

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">Hot Line</h3>

                  <a href="tel:+01123457890" class="card-subtitle">+(01) 1234-57-890</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">E-mail Address</h3>

                  <a href="mailto:voltiinfo@gmail.com" class="card-subtitle">voltiinfo@gmail.com</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">Our Location</h3>

                  <address class="card-subtitle">101 Avenue, S.E. USA</address>
                </div>
              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="display: none;">
    <div class="container">

      <div class="footer-top section" data-reveal>

        <div class="newsletter-card">

          <div class="card-icon">
            <ion-icon name="mail-unread-outline" aria-hidden="true"></ion-icon>
          </div>

          <h3 class="h3 card-title">Sign up for Electric Car,news & inslights</h3>

          <form action="#" class="newsletter-form">

            <label for="email" class="label">Email address</label>

            <input type="emal" name="email" id="email" placeholder="Email address" required class="email-field">

            <button type="submit" class="btn btn-primary">Subscribe</button>

          </form>

        </div>

        <div class="footer-list">

          <p class="h6 has-after">Volti WP Theme</p>

          <p class="footer-text">
            A leading developer of A-grade commercial, electric car and bike projects in USA. Since its foundation the
            company has doubled its turnover year on year, with its staff numbers.
          </p>

          <a href="#" class="btn-outline">
            <span class="span">Get a quote</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Company Info</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Projects</a>
          </li>

          <li>
            <a href="#" class="footer-link">Meet Our Team</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Media</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Quick Contact</p>
          </li>

          <li>
            <address class="footer-text">
              2307 Beverley Rd Brooklyn, New York 11226 United States.
            </address>
          </li>

          <li>
            <p class="footer-text">
              If you have any questions or need help, feel free to contact with our team.
            </p>
          </li>

          <li>
            <a href="tel:00201061245741" class="contact-link">(002) 01061245741</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <div>
          <ul class="footer-bottom-list">

            <li>
              <a href="#" class="footer-bottom-link">Where to Find Us</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">Terms of Payment</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">Stats Element</a>
            </li>

          </ul>

          <p class="copyright">Made with love @codewithsadee</p>
        </div>

        <img src="./assets/images/footer-logo.svg" width="100" height="63" loading="lazy" alt="Volti home">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="go to top" data-go-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <script>
    // Get the nearby button and service section
    const nearbyButton = document.getElementById("nearby-button");
    const serviceSection = document.getElementById("service-section");

    // Add event listener for the button click
    nearbyButton.addEventListener("click", function() {
      // Check the current display status of the service section
      if (serviceSection.style.display === "none" || serviceSection.style.display === "") {
        // Show the service section
        serviceSection.style.display = "block";
      } else {
        // Hide the service section
        serviceSection.style.display = "none";
      }
    });
  </script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Hide the charging section initially
    const chargingSection = document.getElementById('service-slot');
    chargingSection.style.display = 'none';

    // Function to filter charging slots based on status
    function filterChargingSlots(status) {
      // Hide all charger cards
      document.querySelectorAll('.charging-card').forEach(card => {
        card.style.display = 'none';
      });

      // Reset button styles
      document.querySelectorAll('.charging-status-button').forEach(button => {
        button.style.backgroundColor = '#f0f0f0';
        button.style.color = '#333';
      });

      // Show cards based on the selected status
      if (status === 'available') {
        document.querySelectorAll('.available-card').forEach(card => {
          card.style.display = 'flex';
        });
        document.querySelector('.charging-available').style.backgroundColor = '#1f8c41';
        document.querySelector('.charging-available').style.color = '#fff';
      } else if (status === 'in-use') {
        document.querySelectorAll('.in-use-card').forEach(card => {
          card.style.display = 'flex';
        });
        document.querySelector('.charging-in-use').style.backgroundColor = '#f0ad4e';
        document.querySelector('.charging-in-use').style.color = '#fff';
      } else if (status === 'unavailable') {
        document.querySelectorAll('.unavailable-card').forEach(card => {
          card.style.display = 'flex';
        });
        document.querySelector('.charging-unavailable').style.backgroundColor = '#d9534f';
        document.querySelector('.charging-unavailable').style.color = '#fff';
      }

      // Hide the charger amount button initially
      document.getElementById('charger-amount-button').style.display = 'none';
    }

    // Event listener for the status buttons
    document.querySelector('.charging-available').addEventListener('click', () => filterChargingSlots('available'));
    document.querySelector('.charging-in-use').addEventListener('click', () => filterChargingSlots('in-use'));
    document.querySelector('.charging-unavailable').addEventListener('click', () => filterChargingSlots('unavailable'));

    // Event listener for available chargers to show the charger amount button
    document.querySelectorAll('.available-card').forEach(card => {
      card.addEventListener('click', function() {
        // Show the charger amount button when an available charger is clicked
        document.getElementById('charger-amount-button').style.display = 'block';
      });
    });
  });
</script>


  <script>
    document.getElementById('cars-title').addEventListener('click', function() {
      const aboutBanner = document.getElementById('about-banner');

      // Toggle visibility by adding/removing the 'hidden' class
      aboutBanner.classList.toggle('hidden');

      // Scroll to the blog list section if it’s now visible
      if (!aboutBanner.classList.contains('hidden')) {
        aboutBanner.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });


    function showServiceSlot() {
      const serviceSlotSection = document.getElementById("service-slot");
      serviceSlotSection.style.display = 'block'; // Show the section
      serviceSlotSection.scrollIntoView({
        behavior: "smooth"
      }); // Smoothly scroll to the section
    }
  </script>
  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    // Add event listener to the 'Book Now' button
    document.getElementById("book-now-btn").addEventListener("click", function() {
      // Show the About section when the "Book Now" button is clicked
      document.getElementById("about").style.display = "block";
    });
  </script>
    <!-- <script>
      // Function to filter charging slots based on their status
      function filterChargingSlots(status) {
        const allCards = document.querySelectorAll('.charging-card');
        const amountButton = document.getElementById("charging-amount-button");

        // Hide the amount button initially
        amountButton.style.display = "none";

        // Loop through all cards and show/hide based on the selected status
        allCards.forEach(card => {
          card.style.display = "none"; // Hide all initially
          if (status === "available" && card.classList.contains("available-card")) {
            card.style.display = "block";
          } else if (status === "in-use" && card.classList.contains("in-use-card")) {
            card.style.display = "block";
          } else if (status === "unavailable" && card.classList.contains("unavailable-card")) {
            card.style.display = "block";
          }
        });

        // Show message if no chargers are available for the selected filter
        const visibleCards = document.querySelectorAll(`.charging-card.${status}-card`);
        if (visibleCards.length === 0) {
          alert("No chargers available for the selected filter.");
        }
      }

      // Function to handle selecting a charger and showing the amount button
      function selectCharger(card) {
        if (card.classList.contains("available-card")) {
          document.getElementById("charging-amount-button").style.display = "block";
        }
      }
    </script> -->
</body>

</html>