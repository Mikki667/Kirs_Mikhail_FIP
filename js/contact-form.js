export function ContactForm() {
  const contactForm = document.querySelector(".contact-box");
  const contactNameInput = document.querySelector("#name");
  const contactEmailInput = document.querySelector("#email");
  const contactMessageInput = document.querySelector("#message");

  function handleContactFormSubmit() {


    const nameValue = contactNameInput.value.trim();
    const emailValue = contactEmailInput.value.trim();
    const messageValue = contactMessageInput.value.trim();

    if (nameValue === "" || emailValue === "" || messageValue === "") {
      // I just want to make sure the user filled everything
      alert("Please fill in all fields before sending your message.");
      return;
    }
  }

  if (contactForm) {
    contactForm.addEventListener("submit", handleContactFormSubmit);
  }
}