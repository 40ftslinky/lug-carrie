// video_control.js

// Get the video
var video = document.getElementById("backgroundVideo");

// Get the button
var btn = document.getElementById("playBtn");
var btnTxt = document.getElementById("buttonText");

// Pause and play the video, and change the button text
function videoControl() {
  if (video.paused) {
    video.play();
    btnTxt.innerHTML = "Pause Video";
  } else {
    video.pause();
    btnTxt.innerHTML = "Play Video";
  }
}