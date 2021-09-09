// cookie policy popup notification

const modal = document.querySelector('.cookie-container')
const body = document.querySelector('body')
if (localStorage.getItem('cookie') === null) {
  modal.style.display = 'block';
  document.querySelector('#accept-cookies').addEventListener('click', () => {
    localStorage.setItem('cookie', 'accepted');
    modal.style.display = 'none';
    body.classList.add('default')
  });
} else {
  modal.style.display = 'none';
  body.classList.add('default')
}

// sticky header
( () => {
  let lastScroll = 0;
  
  window.addEventListener("scroll", function() {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
      body.classList.remove("scroll-up");
      return;
    }
    if (currentScroll > 300) {
      if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
      } else if (
        currentScroll < lastScroll &&
        body.classList.contains("scroll-down")
      ) {
        setTimeout(()=>{
          body.classList.remove("scroll-down");
          body.classList.add("scroll-up")
        },250)
      }
    }
    lastScroll = currentScroll;
  });
  
})()
