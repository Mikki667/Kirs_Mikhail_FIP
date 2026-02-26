export function ProjectButtons() {

  const projectButtons = document.querySelectorAll(".project-btn");
  const githubButton = document.querySelector(".github-btn");

  function handleProjectSiteButtonClick(event) {
    event.preventDefault();
    alert("In the final version this button would open the live website.");
  }

  function handleGithubButtonClick(event) {
    event.preventDefault();
    alert("This would open my GitHub repository.");
  }

  function registerProjectButton(button) {
    const hrefValue = button.getAttribute("href");

    if (hrefValue === "#") {
      button.addEventListener("click", handleProjectSiteButtonClick);
    }
  }

  if (projectButtons.length > 0) {
    projectButtons.forEach(registerProjectButton);
  }

  if (githubButton) {
    githubButton.addEventListener("click", handleGithubButtonClick);
  }

}