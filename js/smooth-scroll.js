export function SmoothScroll() {

  const navScrollLinks = document.querySelectorAll('a[href^="#"]');
  const fixedHeader = document.querySelector("header");

  function measureHeaderHeight() {
    if (!fixedHeader) {
      return 0;
    }

    return fixedHeader.offsetHeight;
  }

  function smoothLinkScroll(event) {
    event.preventDefault();

    const destinationId = event.currentTarget.getAttribute("href");
    const destinationSection = document.querySelector(destinationId);

    if (!destinationSection) {
      return;
    }

    const headerOffset = measureHeaderHeight();
    const sectionPosition = destinationSection.getBoundingClientRect().top + window.pageYOffset;
    const finalScrollPosition = sectionPosition - headerOffset;

    window.scrollTo({
      top: finalScrollPosition,
      behavior: "smooth"
    });
  }

  function registerScrollHandler(link) {
    link.addEventListener("click", smoothLinkScroll);
  }

  navScrollLinks.forEach(registerScrollHandler);

}