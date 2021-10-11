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
mb.addEventListener('click', function () {
  body.style.overflowY = "hidden";
});
overlay.addEventListener('click', function () {
  body.style.overflowY = "auto";
});