export function VideoPlayer() {

  const videoContainer = document.querySelector("#player-container");
  const videoElement = document.querySelector("#player-container video");
  const videoControls = document.querySelector("#video-controls");
  const playButton = document.querySelector("#play-button");
  const pauseButton = document.querySelector("#pause-button");
  const stopButton = document.querySelector("#stop-button");
  const volumeSlider = document.querySelector("#change-vol");
  const fullScreenButton = document.querySelector("#full-screen");

  if (!videoContainer || !videoElement || !videoControls) {
    return;
  }

  videoElement.controls = false;
  videoControls.classList.remove("hidden");

  function playVideo() {
    videoElement.play();
  }

  function pauseVideo() {
    videoElement.pause();
  }

  function stopVideo() {
    videoElement.pause();
    videoElement.currentTime = 0;
  }

  function changeVolume() {
    videoElement.volume = volumeSlider.value;
  }

  function toggleFullScreen() {
    if (document.fullscreenElement) {
      document.exitFullscreen();
    } else {
      videoContainer.requestFullscreen();
    }
  }

  function hideControls() {
    videoControls.classList.add("hide");
  }

  function showControls() {
    videoControls.classList.remove("hide");
  }

  playButton.addEventListener("click", playVideo);
  pauseButton.addEventListener("click", pauseVideo);
  stopButton.addEventListener("click", stopVideo);
  volumeSlider.addEventListener("input", changeVolume);
  fullScreenButton.addEventListener("click", toggleFullScreen);

  videoControls.addEventListener("mouseenter", showControls);
  videoControls.addEventListener("mouseleave", hideControls);
  videoElement.addEventListener("mouseenter", showControls);
  videoElement.addEventListener("mouseleave", hideControls);

}