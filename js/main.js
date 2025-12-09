(() => {

  console.log("IIFE Called for explode view");

//variables

// header

  const menu = document.querySelector("#menu");
  const hamburger = document.querySelector("#hamburger");
  const closeButton = document.querySelector("#close");
  const menuLinks = document.querySelectorAll("#menu nav ul li a");

  // contact page form
  const contactForm = document.querySelector(".contact-box");
  const contactNameInput = document.querySelector("#name");
  const contactEmailInput = document.querySelector("#email");
  const contactMessageInput = document.querySelector("#message");

  // project page buttons
  const projectButtons = document.querySelectorAll(".project-btn");

//functions

function toggleMenu() {
    menu.classList.toggle("open");
  }

  function handleContactFormSubmit(event) {
    event.preventDefault();

    if (!contactNameInput || !contactEmailInput || !contactMessageInput) {
      return;
    }

    const nameValue = contactNameInput.value.trim();
    const emailValue = contactEmailInput.value.trim();
    const messageValue = contactMessageInput.value.trim();

    if (nameValue === "" || emailValue === "" || messageValue === "") {
      // I just want to make sure the user filled everything
      alert("Please fill in all fields before sending your message.");
      return;
    }

    // I used an alert here because I don’t have a backend
    alert("Thanks, " + nameValue + "! I got your message.");

    contactForm.reset();
  }

  function handleProjectSiteButtonClick(event) {
    event.preventDefault();

    // In the final version this would open the real website
    alert("In the final version this button would open the live website.");
  }

  function registerProjectButton(button) {
    const hrefValue = button.getAttribute("href");

    // I only attach this to placeholder buttons with #
    if (hrefValue === "#") {
      button.addEventListener("click", handleProjectSiteButtonClick);
    }
  }

//event listeners  

  closeButton.addEventListener("click", toggleMenu);

  menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
  });

  hamburger.addEventListener("click", toggleMenu);

  if (contactForm) {
    contactForm.addEventListener("submit", handleContactFormSubmit);
  }

  if (githubButton) {
    githubButton.addEventListener("click", handleGithubButtonClick);
  }

  if (projectButtons.length > 0) {
    projectButtons.forEach(registerProjectButton);
  }

  


})();