export function musicProjectsAnimations() {

  const introBox = document.querySelector('.beats-intro-box');
  const photoBox = document.querySelector('.beats-photo-box');
  const introText = document.querySelector('.beats-intro-text');
  const workBox = document.querySelector('.beats-work-box');

  const beatsTitle = document.querySelector('.beats-grid-title');
  const beatCards = document.querySelectorAll('.beat-card');

  function registerScrollPlugins() {
    gsap.registerPlugin(ScrollTrigger);
  }

  function createIntroBoxAnimation() {
    if (!introBox) {
      return;
    }

    gsap.from(introBox, {
      scrollTrigger: {
        trigger: introBox,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 70,
      duration: 1,
      ease: 'power2.out'
    });
  }

  function createPhotoBoxAnimation() {
    if (!photoBox) {
      return;
    }

    gsap.from(photoBox, {
      scrollTrigger: {
        trigger: photoBox,
        start: 'top 82%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      x: -40,
      duration: 0.9,
      ease: 'power2.out'
    });
  }

  function createIntroTextAnimation() {
    if (!introText) {
      return;
    }

    gsap.from(introText, {
      scrollTrigger: {
        trigger: introText,
        start: 'top 82%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      x: 40,
      duration: 0.9,
      ease: 'power2.out'
    });
  }

  function createWorkBoxAnimation() {
    if (!workBox) {
      return;
    }

    if (getComputedStyle(workBox).display === 'none') {
      return;
    }

    gsap.from(workBox, {
      scrollTrigger: {
        trigger: workBox,
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 50,
      duration: 0.9,
      ease: 'power2.out'
    });
  }

  function createBeatsTitleAnimation() {
    if (!beatsTitle) {
      return;
    }

    gsap.from(beatsTitle, {
      scrollTrigger: {
        trigger: beatsTitle,
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 35,
      duration: 0.8,
      ease: 'power2.out'
    });
  }

  function createBeatCardsAnimation() {
    if (beatCards.length === 0) {
      return;
    }

    gsap.from(beatCards, {
      scrollTrigger: {
        trigger: beatCards[0],
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 45,
      duration: 0.9,
      ease: 'power2.out',
      stagger: 0.15
    });
  }

  function createBeatCoverAnimation(card) {
    const cover = card.querySelector('.beat-cover');

    if (!cover) {
      return;
    }

    gsap.from(cover, {
      scrollTrigger: {
        trigger: card,
        start: 'top 82%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      scale: 0.95,
      duration: 0.7,
      ease: 'power2.out',
      delay: 0.1
    });
  }

  function createBeatCoversAnimations() {
    if (beatCards.length === 0) {
      return;
    }

    beatCards.forEach(createBeatCoverAnimation);
  }

  function initMusicProjectsAnimations() {
    if (!introBox && beatCards.length === 0) {
      return;
    }

    registerScrollPlugins();
    createIntroBoxAnimation();
    createPhotoBoxAnimation();
    createIntroTextAnimation();
    createWorkBoxAnimation();
    createBeatsTitleAnimation();
    createBeatCardsAnimation();
    createBeatCoversAnimations();
  }

  initMusicProjectsAnimations();

}