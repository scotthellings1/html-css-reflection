<?php include __DIR__ . '/../inc/views/layout/head.php'; ?>
<body class="">
<?php
include __DIR__ . '/../inc/views/layout/cookie.php';
include __DIR__ . '/../inc/views/layout/sidenav.php';
include __DIR__ . '/../inc/views/layout/header.php';
?>
<div class="main">
  <?php include __DIR__ . '/../inc/views/layout/breadcrumbs.php'; ?>

    
    
    <section class="contact-offices">
        <div class="dark-heading">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>
        <div class="container">
            <h1 class="desktop-heading">Our Offices</h1>
        
            <div class="locations">
                <div class="location">
                    <img src="img/offices/cambridge.jpg" alt="Cambridge Office">
                    <div class="content">
                        <h2>Cambridge Office</h2>

                        <div class="address">
                            unit 1.28, <br>
                            St John's Innovation Centre,<br>
                            Cowley Road, Milton,<br>
                            Cambridge,<br>
                            CB4 0WS <br>   
                        </div>
                        <div class="tel"><a href="#"> 01223 37 57 72</a></div>
                        <a class="btn btn-contact-card" href="#"> view more</a>
                    </div>
                    <div id="map-c" class="map"></div>
                </div>
                <div class="location">
                    <img src="img/offices/wymondham.jpg" alt="Wymondham Office">
                    <div class="content">
                        <h2>Wymondham Office</h2>

                        <div class="address">
                            Unit 15, <br>
                            Penfold Drive, <br>
                            Gateway 11 Business Park, <br>
                            Wymondham, Norfolk, <br>
                            NR18 0WZ  
                        </div>
                        <div class="tel"><a href="#" >01603 70 40 20</a> </div>
                        <a class="btn btn-contact-card" href="#"> view more</a>
                    </div>
                    <div id="map-w" class="map"></div>
                </div>
                <div class="location">
                    <img src="img/offices/yarmouth-2.jpg" alt="Great Yarmouth Office">
                    <div class="content">
                        <h2>Great Yarmouth Office</h2>

                        <div class="address">
                            Suite F23, <br>   
                            Beacon Innovation Centre,<br>
                            Beacon Park, Gorleston,<br>
                            Great Yarmouth, Norfolk,<br>
                            NR31 7RA   
                        </div>
                        <div class="tel"><a href="#">01493 60 32 04</a></div>
                        <a class="btn btn-contact-card" href="#"> view more</a>
                    </div>
                    <div id="map-gy" class="map"></div>
                </div>
        </div>
    </section>

    <section class="contact-info"> 
        <div class="container">
            <div class="contact-info">
                <p class="email">
                    Email us on:
                </p>
                <p class="email-address">
                    <a href="mailto:sales@netmatters.com">sales@netmatters.com</a>
                </p>
                <p class="business-hours">
                    Business hours: 
                </p>
                <p class="times">
                    Monday - Friday 07:00 - 18:00
                </p>
                <div class="out-of-hours">
                    <p>Out of Hours IT Support</p> <svg xmlns="http://www.w3.org/2000/svg" class="down-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                      </svg>
                
                </div>
            </div>
            
        </div>
    </section>

    <div class="container">              
        <section class="contact-form">
            <div class="input-group">
                <label class="required" for="name">Your Name </label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label class="required" for="email">Your Email </label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-group">
                <label class="required" for="phone">Your Telephone Number </label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="input-group">
                <label class="required" for="subject">Subject </label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="input-group message">
                <label class="required" for="message">Message </label>
                <textarea name="message" id="message" cols="" rows=""></textarea>
            </div>
            <div class="label">
                <label for="marketing">
                <span class="check-holder">
                    <span class="checkbox">
                    <input class="cb" id="marketing" name="marketing" type="checkbox">
                    <span class="check"></span>
                    </span>
                    <span class="text">
                    <span>Please tick this box if you wish to receive marketing information from us. Please see our
                        <a href="#">Privacy Policy</a>
                        for more information on how we use your data.
                    </span>
                    </span>
                </span>
                </label>
            </div>
            <div class="submit">
                <a href="#" class="btn btn-service-web">send enquiry</a>
            </div>
        </section>
    </div>


    <!--    start marketing sign up section-->
    <section class="signup">
      <div class="container">
        <div class="content">
          <h2>Email Newsletter Sign-Up</h2>
          <div class="input-group">
            <label class="required" for="name">Your Name </label>
            <input type="text" id="name" name="name">
          </div>
          <div class="input-group">
            <label class="required" for="email">Your Email </label>
            <input type="text" id="email" name="email">
          </div>
          <div class="label">
            <label for="marketing">
              <span class="check-holder">
                <span class="checkbox">
                  <input class="cb" id="marketing" name="marketing" type="checkbox">
                  <span class="check"></span>
                </span>
                <span class="text">
                  <span>Please tick this box if you wish to receive marketing information from us. Please see our
                    <a href="#">Privacy Policy</a>
                    for more information on how we use your data.
                  </span>
                </span>
              </span>
            </label>
          </div>
          <div class="subscribe">
            <a href="#" class="btn btn-signup">subscribe</a>
          </div>
        </div>
      </div>
    </section>
    <!--    end marketing sign up section-->
    <footer>
      <div class="container">
        <div class="grid">
          <div class="row">
            <div class="services">
              <div class="service">
                <h3>about netmatters</h3>
                <ul>
                  <li>
                    <a href="#">News</a>
                  </li>
                  <li>
                    <a href="#">Our Careers</a>
                  </li>
                  <li>
                    <a href="#">Our Team</a>
                  </li>
                  <li>
                    <a href="#">Our Office Tour</a>
                  </li>
                  <li>
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="#">Cookie Policy</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Conditions</a>
                  </li>
                </ul>
              </div>
              <div class="service">
                <h3>our services</h3>
                <ul>
                  <li>
                    <a href="#">Bespoke Software</a>
                  </li>
                  <li>
                    <a href="#">IT Support</a>
                  </li>
                  <li>
                    <a href="#">Digital Marketing</a>
                  </li>
                  <li>
                    <a href="#">Telecoms Services</a>
                  </li>
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">Cyber Security</a>
                  </li>
                  <li>
                    <a href="#">Developer Training</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="offices">
              <div class="office">
                <h3>cambridge office</h3>
                <ul>
                  <li>Unit 1.28,</li>
                  <li>St Johns Innovation Center,</li>
                  <li>Cowley Road, Milton,</li>
                  <li>Cambridge,</li>
                  <li>CB4 0WS</li>
                </ul>
                <div class="tel">
                  Tel:
                  <a href="#">01223 37 57 72</a>
                </div>
              </div>
              <div class="office">
                <h3>
                  wymondham office
                </h3>
                <ul>
                  <li>Unit 15,</li>
                  <li>Penfold Drive,</li>
                  <li>Gateway 11 Business Park,</li>
                  <li>Wymondham,</li>
                  <li>NR18 0WZ</li>
                </ul>
                <div class="tel">
                  Tel:
                  <a href="#">01603 70 40 20</a>
                </div>
              </div>
              <div class="office">
                <h3>great yarmouth office</h3>
                <ul>
                  <li>Suite F23,</li>
                  <li>Beacon Innovation Centre,</li>
                  <li>Beacon Park, Gorleston,</li>
                  <li>Great Yarmouth,</li>
                  <li>NR31 7RA</li>
                </ul>
                <div class="tel">
                  Tel:
                  <a href="#">01493 60 32 04</a>
                </div>

              </div>
            </div>
        </div>
        </div>
        <div class="bottom">
          <div class="copyright">
            &copy; Copyright Netmatters Ltd. 2021
            <br class="hidden-sm">
            All Rights Reserved
            <span> - </span>
            <a href="#">Sitemap</a>
          </div>
          <div class="socials">
            <a id="fb" href="#"><i class="fab fa-facebook-f"></i></a>
            <a id="twitter" href="#"><i class="fab fa-twitter"></i></a>
            <a id="insta" href="#"><i class="fab fa-instagram"></i></a>
            <a id="linkd" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--    start accreditations section-->
    <section class="accreditations hidden-xs">
      <div class="container">
        <div class="row">
          <div class="item">
            <img src="img/accreditations/google.png" alt="">
          </div>
          <div class="item">
            <img src="img/accreditations/microsoft.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/future-50-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/further50.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/iso27001-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/iso27001.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/norfolk-carbon-charter-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/norfolk-carbon-charter.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="item">
            <img class="bw" src="img/accreditations/investing-in-future-growth-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/future-growth.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/princess-royal-training-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/princess-royal-training.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/skills-of-tomorrow-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/skills-of-tomorrow.jpg" alt="">
          </div>
          <div class="item">
            <img class="bw" src="img/accreditations/PPC_logo-bw.jpg" alt="">
            <img class="coloured d-none" src="img/accreditations/prompt-payment-code.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <!--   end accreditations section-->
    </div>
<!--end main site wrapper-->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script
  </body>
</html>
