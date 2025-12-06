(() => {

  console.log("IIFE Called for explode view");

//variables

// header

  const menu = document.querySelector("#menu");
  const hamburger = document.querySelector("#hamburger");
  const closeButton = document.querySelector("#close");
  const menuLinks = document.querySelectorAll("#menu nav ul li a");

//functions

function toggleMenu() {
    menu.classList.toggle("open");
  }

//event listeners  

  closeButton.addEventListener("click", toggleMenu);

  menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
  });

  hamburger.addEventListener("click", toggleMenu);
  


})();