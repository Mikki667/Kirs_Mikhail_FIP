import { HeaderMenu } from "./header-menu.js";
import { ContactForm } from "./contact-form.js";
import { ProjectButtons } from "./project-buttons.js";
import { animations } from "./animations.js";
import { musicProjectsAnimations } from "./music-projects-animations.js";

(() => {

  console.log("IIFE Called for explode view");

  HeaderMenu();
  ContactForm();
  ProjectButtons();
  animations();
  musicProjectsAnimations();


})();