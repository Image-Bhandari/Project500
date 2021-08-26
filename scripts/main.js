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