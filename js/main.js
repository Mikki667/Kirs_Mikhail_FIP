import { HeaderMenu } from "./header-menu.js";
import { ProjectButtons } from "./project-buttons.js";
import { animations } from "./animations.js";
import { musicProjectsAnimations } from "./music-projects-animations.js";
import { ResumeDownload } from "./resumedownload.js";
import { VideoPlayer } from "./video-player.js";
import { SmoothScroll } from "./smooth-scroll.js";
import { CaseStudyAnimations } from "./case-study-animations.js";

(() => {

  HeaderMenu();
  ProjectButtons();
  animations();
  musicProjectsAnimations();
  ResumeDownload();
  VideoPlayer();
  SmoothScroll();
  CaseStudyAnimations();


})();