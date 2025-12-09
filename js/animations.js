(() => {

  console.log('IIFE called for gsap animations');

  // variables

  const homeIntroSection = document.querySelector('.intro');

  const aboutSection = document.querySelector('#about');
  const skillsSection = document.querySelector('#skills');
  const projectButton = document.querySelector('.project-button');

  const projectsSection = document.querySelector('#projects');
  const projectItems = document.querySelectorAll('.project-item');

  const contactMain = document.querySelector('#contact');
  const contactExtraSection = document.querySelector('.contact-extra');

  const singleProjectSection = document.querySelector('.single-project-section');
  const projectHeroBox = document.querySelector('.project-hero-box');
  const projectInfoBlock = document.querySelector('.project-info');
  const projectMockupLarge = document.querySelector('.project-mockup-large');
  const projectButtonsWrap = document.querySelector('.project-buttons-wrap');

  // I used this for the videos
  const projectVideoSection = document.querySelector('.intro-video-wrap');

  // functions

  function registerScrollPlugins() {
    gsap.registerPlugin(ScrollTrigger);
  }

  function createHomeIntroAnimation() {
    if (!homeIntroSection) {
      return;
    }

    gsap.from(homeIntroSection, {
      scrollTrigger: {
        trigger: homeIntroSection,
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 60,
      duration: 1,
      ease: 'power2.out'
    });
  }

  function createAboutScrollAnimation() {
    if (!aboutSection) {
      return;
    }

    gsap.from(aboutSection, {
      scrollTrigger: {
        trigger: aboutSection,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 80,
      duration: 1,
      ease: 'power2.out'
    });
  }

  function createSkillsScrollAnimation() {
    if (!skillsSection) {
      return;
    }

    gsap.from(skillsSection, {
      scrollTrigger: {
        trigger: skillsSection,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 70,
      duration: 1,
      ease: 'power2.out'
    });

    if (!projectButton) {
      return;
    }

    // I wanted the button to pop in a bit later

    gsap.from(projectButton, {
      scrollTrigger: {
        trigger: skillsSection,
        start: 'top 75%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 40,
      duration: 0.8,
      ease: 'back.out(1.4)',
      delay: 0.2
    });
  }

  function createProjectsScrollAnimation() {
    if (!projectsSection || projectItems.length === 0) {
      return;
    }

    gsap.from(projectItems, {
      scrollTrigger: {
        trigger: projectsSection,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 50,
      duration: 0.9,
      ease: 'power2.out',
      stagger: 0.15
    });
  }

  function createContactScrollAnimation() {
    if (!contactMain) {
      return;
    }

    gsap.from(contactMain, {
      scrollTrigger: {
        trigger: contactMain,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 60,
      duration: 1,
      ease: 'power2.out'
    });

    if (!contactExtraSection) {
      return;
    }

    // I separated the extra section so it moves up on its own

    gsap.from(contactExtraSection, {
      scrollTrigger: {
        trigger: contactExtraSection,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 60,
      duration: 0.9,
      ease: 'power2.out'
    });
  }

  function createSingleProjectScrollAnimation() {
    if (!singleProjectSection) {
      return;
    }

    // hero block

    if (projectHeroBox) {
      gsap.from(projectHeroBox, {
        scrollTrigger: {
          trigger: projectHeroBox,
          start: 'top 80%',
          toggleActions: 'play none none none'
        },
        opacity: 0,
        y: 70,
        duration: 1,
        ease: 'power2.out'
      });
    }

    // project info rows

    if (projectInfoBlock) {
      const infoRows = projectInfoBlock.querySelectorAll('.project-info-row');

      if (infoRows.length > 0) {
        gsap.from(infoRows, {
          scrollTrigger: {
            trigger: projectInfoBlock,
            start: 'top 80%',
            toggleActions: 'play none none none'
          },
          opacity: 0,
          y: 50,
          duration: 0.8,
          ease: 'power2.out',
          stagger: 0.15
        });
      }
    }

    // big mockup image

    if (projectMockupLarge) {
      gsap.from(projectMockupLarge, {
        scrollTrigger: {
          trigger: projectMockupLarge,
          start: 'top 80%',
          toggleActions: 'play none none none'
        },
        opacity: 0,
        y: 60,
        duration: 0.9,
        ease: 'power2.out'
      });
    }

    // bottom buttons

    if (projectButtonsWrap) {
      gsap.from(projectButtonsWrap, {
        scrollTrigger: {
          trigger: projectButtonsWrap,
          start: 'top 85%',
          toggleActions: 'play none none none'
        },
        opacity: 0,
        y: 40,
        duration: 0.8,
        ease: 'back.out(1.4)'
      });
    }
  }

  // I used this for video sections

  function createProjectVideoScrollAnimation() {
    if (!projectVideoSection) {
      return;
    }

    gsap.from(projectVideoSection, {
      scrollTrigger: {
        trigger: projectVideoSection,
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 60,
      duration: 1,
      ease: 'power2.out'
    });
  }

  function initScrollAnimations() {
    registerScrollPlugins();
    createHomeIntroAnimation();
    createAboutScrollAnimation();
    createSkillsScrollAnimation();
    createProjectsScrollAnimation();
    createContactScrollAnimation();
    createSingleProjectScrollAnimation();
    createProjectVideoScrollAnimation();
  }

  initScrollAnimations();

})();