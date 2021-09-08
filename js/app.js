"use strict";

var modal = document.querySelector('.cookie-container');
var body = document.querySelector('body');

if (localStorage.getItem('cookie') === null) {
  modal.style.display = 'flex';
  document.querySelector('#accept-cookies').addEventListener('click', function () {
    localStorage.setItem('cookie', 'accepted');
    modal.style.display = 'none';
    body.classList.add('default');
  });
} else {
  modal.style.display = 'none';
  body.classList.add('default');
}