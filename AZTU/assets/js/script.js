let throttleTimer = false;
const throttle = (callback, time) => {
  if (throttleTimer) return;

  throttleTimer = true;

  setTimeout(() => {
    callback();
    throttleTimer = false;
  }, time);
};

// window.addEventListener("scroll", () => {
//   throttle(handleScrollAnimation, 250);
// });


// slider
var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

setInterval(function () {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
}, 4000);

document.getElementById("prev-button").addEventListener("click", function () {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  showSlide(slideIndex);
});

document.getElementById("next-button").addEventListener("click", function () {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
});

showSlide(slideIndex);

function showSlide(n) {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }

  slides[n].classList.add("active");
}
