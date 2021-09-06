function myFunction() {
  var x = document.getElementById("dropdown");
  if (x.style.display === "block") {
    
  } else {
    x.style.display = "block";
  }
  
  var x = document.getElementById("dropdown-content");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function nav() {
  document.getElementById("nav-user-cont").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.userbtn')) {
  var myDropdown = document.getElementById("nav-user-cont");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

// property pictures viewer in enquiry page
var PropslideIndex = 1;
showSlides(PropslideIndex);

function propViewerSlides(na) {
  showSlides(PropslideIndex += na);
}

function currentPropViewSlide(na) {
  showSlides(PropslideIndex = na);
}

function showSlides(na) {
  var x;
  var slides = document.getElementsByClassName("prop_picture_cont");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (na > slides.length) {PropslideIndex = 1}
  if (na < 1) {PropslideIndex = slides.length}
  for (x = 0; x < slides.length; x++) {
      slides[x].style.display = "none";
  }
  for (x = 0; x < dots.length; x++) {
      dots[x].className = dots[x].className.replace(" active", "");
  }
  slides[PropslideIndex-1].style.display = "block";
  dots[PropslideIndex-1].className += " active";
  captionText.innerHTML = dots[PropslideIndex-1].alt;
}

// slideshow for main page in the small box of properties

const slideshow_add = (a, b) => {
  document.getElementById(a).src = b[i]
  if (i < (b.length - 1)) {
      i++
  } else {
      i = 0
  }
}
const slideshow_substract = (a, b) => {
  document.getElementById(a).src = b[i]
  if (i == 0) {
      i = b.length - 1
  }
  else if (i < (b.length)) {
      i--
  }
  else {
      i = 0
  }
}