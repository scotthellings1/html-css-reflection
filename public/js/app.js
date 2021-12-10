"use strict";

// cookie policy popup notification
var modal = document.querySelector('.cookie-container');
var body = document.querySelector('body');

if (localStorage.getItem('cookie') === null) {
  modal.style.display = 'block';
  document.querySelector('#accept-cookies').addEventListener('click', function () {
    localStorage.setItem('cookie', 'accepted');
    modal.style.display = 'none';
    body.classList.add('default');
  });
} else {
  modal.style.display = 'none';
  body.classList.add('default');
} // sticky header


(function () {
  var lastScroll = 0;
  window.addEventListener("scroll", function () {
    var currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
      body.classList.remove("scroll-up");
      return;
    }

    if (currentScroll > 300) {
      if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
      } else if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
        setTimeout(function () {
          body.classList.remove("scroll-down");
          body.classList.add("scroll-up");
        }, 250);
      }
    }

    lastScroll = currentScroll;
  });
})();

var mb = document.querySelector('.btn-menu');
var overlay = document.querySelector('.site-overlay');
var hamburger = document.querySelector('.hamburger');
mb.addEventListener('click', function () {
  $('.slider').slick('slickNext');
  $('.slider').slick('slickPause');
  $('.slider').slick('setPosition');
  hamburger.classList.toggle('is-active');
  body.style.overflowY = "hidden";
});
overlay.addEventListener('click', function () {
  $('.slider').slick('slickPlay');
  body.style.overflowY = "auto";
  hamburger.classList.toggle('is-active');
});
var map = L.map('map-c', {
  center: [52.2349, 0.1534],
  preferCanvas: true,
  zoom: 16
});
var map1 = L.map('map-w', {
  center: [52.5759, 1.1363],
  zoom: 16
});
var map2 = L.map('map-gy', {
  center: [52.5558, 1.713],
  zoom: 16
});
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map1);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map2);
L.marker([52.2349, 0.1534]).addTo(map);
L.marker([52.5759, 1.1363]).addTo(map1);
L.marker([52.5558, 1.713]).addTo(map2);
var outOfHoursToggle = document.querySelector('.business-hours-toggle');
var outOfHoursDropdown = document.querySelector('.business-hours-dropdown');
outOfHoursToggle.addEventListener('click', function (e) {
  outOfHoursDropdown.classList.toggle('active');
});