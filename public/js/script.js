// JavaScript File

// ACCUEIL

function aboutMe() {
  var about = document.querySelectorAll(".aboutMe");

  for (var i = 0; i < about.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = about[i].getBoundingClientRect().top;
    var elementVisible = 400;

    if (elementTop < windowHeight - elementVisible) {
      about[i].classList.add("active");
      console.log(elementTop, windowHeight-elementVisible);
    } else {
      about[i].classList.remove("active");
    }
  }
}

// NAVBAR

function navbar() {
  var navbar = document.querySelectorAll(".navbar");

  for (var i = 0; i < navbar.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = navbar[i].getBoundingClientRect().top;
    var elementVisible = 960;

    if (elementTop < windowHeight - elementVisible) {
      navbar[i].classList.add("active");
      console.log(elementTop, windowHeight-elementVisible);
    } else {
      navbar[i].classList.remove("active");
    }
  }
}


// ANIMATION 

window.addEventListener("scroll",aboutMe);
window.addEventListener("scroll",navbar);