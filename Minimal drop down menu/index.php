<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Minimal Drop Down Menu Concept | by harrnish @Codegrid</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>
<body>
      <div class="wrapper">
            <div class="hero-section">
                  <h1>Responsive Drop-down Menu Concept</h1>

                  <div class="menu-btn">
                        <ion-icon name="menu"></ion-icon>
                  </div>
            </div>

            <div class="menu">
                  <div class="close-menu">
                        <ion-icon name="close"></ion-icon>
                  </div>

                  <div class="nav">
                        <ul class="main-menu">
                              <li class="main-menu-item">
                                    <a href="#">Home</a>
                              </li>

                              <li class="main-menu-item">
                                    <a href="#">Our Products &nbsp; <ion-icon name="add"></ion-icon></a>

                                    <ul class="submenu">
                                          <li class="submenu-item">
                                                <a href="#">Fonts</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Mockups</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Presets</a>
                                          </li>
                                    </ul>
                              </li>

                              <li class="main-menu-item">
                                    <a href="#">Portfolio &nbsp; <ion-icon name="add"></ion-icon></a>

                                    <ul class="submenu">
                                          <li class="submenu-item">
                                                <a href="#">Timeless flow</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Foretime</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Never again</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Departure</a>
                                          </li>
                                    </ul>
                              </li>

                              <li class="main-menu-item">
                                    <a href="#">Our Story</a>
                              </li>

                              <li class="main-menu-item">
                                    <a href="#">Contact &nbsp; <ion-icon name="add"></ion-icon></a>

                                    <ul class="submenu">
                                          <li class="submenu-item">
                                                <a href="#">Call now</a>
                                          </li>
                                          <li class="submenu-item">
                                                <a href="#">Mail us</a>
                                          </li>
                                    </ul>
                              </li>
                        </ul>
                  </div>

                  <div class="contact">
                        <p class="call"><ion-icon name="call"></ion-icon>&nbsp;&nbsp;&nbsp;+1312456487</p>
                        <p class="mail"><ion-icon name="mail"></ion-icon>&nbsp;&nbsp;&nbsp;user@email.com</p>
                  </div>

                  <div class="media">
                        <ul>
                              <li>Facebook</li>
                              <li>Instagram</li>
                              <li>Twitter</li>
                        </ul>
                  </div>
            </div>
      </div>
      <script type="text/javascript">
            $('ul.main-menu li').click(function(e) {
                  e.preventDefault();

                  if($(this).siblings('li').find('ul.submenu:visible').length) {
                        $('ul.submenu').slideUp('normal');
                  }
                  $(this).find('ul.submenu').slideToggle('normal');
            });

            var t1 = new TimelineMax({paused: true});

            t1.to(".menu", 0.8, {
                  autoAlpha: 1
            });

            t1.staggerFrom(".main-menu li a:not(.submenu li a)", 1, {
                  opacity: 0,
                  y: 10,
                  ease: Power3.easeInOut
            }, 0.1);

            t1.from(".submenu", 0.8, {
                  autoAlpha: 0
            });

            t1.staggerFrom(".media ul li", 1, {
                  opacity: 0,
                  y: 10,
                  ease: Power3.easeInOut
            }, 0.1, "-=2");

            t1.from(".call", 1, {
                  delay: -2,
                  opacity: 0,
                  y: 10,
                  ease: Power3.easeInOut
            });

            t1.from(".mail", 1, {
                  delay: -1.6,
                  opacity: 0,
                  y: 10,
                  ease: Power3.easeInOut
            });

            t1.reverse();

            $(document).on("click", ".menu-btn", function() {
                  t1.reversed(!t1.reversed());
            });

            $(document).on("click", ".close-menu", function() {
                  t1.reversed(!t1.reversed());
            });

      </script>
</body>
</html>
