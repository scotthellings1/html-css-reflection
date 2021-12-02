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

var mapW = L.map('map-w').setView([52.57581, 1.13644], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoiaGV4YWdvbnN1bjcwIiwiYSI6ImNrdThpMWFscDBpamEyd256NDVxajhlOHkifQ.IGt9FonVdy7GbCejH8YXKw'
  }).addTo(mapW);

  var mapC = L.map('map-c').setView([52.2349, 0.1533], 15);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoiaGV4YWdvbnN1bjcwIiwiYSI6ImNrdThpMWFscDBpamEyd256NDVxajhlOHkifQ.IGt9FonVdy7GbCejH8YXKw'
  }).addTo(mapC);

  17/52.55591/1.71329
  var mapGY = L.map('map-gy').setView([52.55591, 1.71329], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoiaGV4YWdvbnN1bjcwIiwiYSI6ImNrdThpMWFscDBpamEyd256NDVxajhlOHkifQ.IGt9FonVdy7GbCejH8YXKw'
  }).addTo(mapGY);