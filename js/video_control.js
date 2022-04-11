// video_control.js

// Get the video
var video = document.getElementById("backgroundVideo");
var videoInline = document.getElementById("inlineVideo");

// Get the button
var btn = document.getElementById("playBtn");
var btnTxt = document.getElementById("buttonText");

var btn_white = document.getElementById("playBtn_white");
var btnTxt_white = document.getElementById("buttonText_white");

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

function videoControlInline() {
  if (videoInline.paused) {
    videoInline.play();
    btnTxt_white.innerHTML = "Pause Video";
  } else {
    videoInline.pause();
    btnTxt_white.innerHTML = "Watch Video";
  }
}