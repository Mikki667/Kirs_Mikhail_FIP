export function CaseStudyAnimations() {

  const sectionTitles = document.querySelectorAll(".subsection-title");

  function registerScrollPlugins() {
    gsap.registerPlugin(ScrollTrigger);
  }

  function animateSection(title) {

    if (
      title.textContent.includes("Software") ||
      title.textContent.includes("Challenges")
    ) {

      const contentBlock = title.parentElement.nextElementSibling;

      gsap.from(title, {
        scrollTrigger: {
          trigger: title,
          start: "top 85%",
          toggleActions: "play none none none"
        },
        opacity: 0,
        y: 50,
        duration: 0.9,
        ease: "power2.out"
      });

      if (contentBlock && contentBlock.classList.contains("project-goal-text")) {

        gsap.from(contentBlock, {
          scrollTrigger: {
            trigger: contentBlock,
            start: "top 85%",
            toggleActions: "play none none none"
          },
          opacity: 0,
          y: 60,
          duration: 1,
          ease: "power2.out",
          delay: 0.1
        });

      }
    }
  }

  function loopSections(title) {
    animateSection(title);
  }

  function initCaseStudyAnimations() {
    registerScrollPlugins();
    sectionTitles.forEach(loopSections);
  }

  initCaseStudyAnimations();

}