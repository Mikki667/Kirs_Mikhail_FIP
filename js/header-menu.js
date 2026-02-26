export function HeaderMenu() {
  const menu = document.querySelector("#menu");
  const hamburger = document.querySelector("#hamburger");
  const closeButton = document.querySelector("#close");
  const menuLinks = document.querySelectorAll("#menu nav ul li a");

  function toggleMenu() {
    menu.classList.toggle("open");
  }

  closeButton.addEventListener("click", toggleMenu);

  menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
  });

  hamburger.addEventListener("click", toggleMenu);
}