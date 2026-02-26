export function ContactForm() {
  const contactForm = document.querySelector(".contact-box");
  const contactNameInput = document.querySelector("#name");
  const contactEmailInput = document.querySelector("#email");
  const contactMessageInput = document.querySelector("#message");

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

  if (contactForm) {
    contactForm.addEventListener("submit", handleContactFormSubmit);
  }
}