export function ResumeDownload() {

  const resumeButton = document.querySelector("#resumeBtn");

  function handleResumeClick() {
    console.log("Resume download started");
  }

  if (resumeButton) {
    resumeButton.addEventListener("click", handleResumeClick);
  }

}