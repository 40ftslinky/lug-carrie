// video_control.js

// Get the video
var video = document.getElementById("backgroundVideo");
var videoInline = document.getElementById("inlineVideo");

// Get the button
var btn = document.getElementById("playBtn");
var btnTxt = document.getElementById("buttonText");

var btn_white = document.getElementById("playBtn_white");
var btnTxt_white = document.getElementById("buttonText_white");

var body = document.body;

// Pause and play the video, and change the button text
function videoControl() {
  if (video.paused) {
    video.play();
    btnTxt.innerHTML = "Pause Video";
    body.classList.remove("no_scroll");
  } else {
    video.pause();
    btnTxt.innerHTML = "Play Video";
    body.classList.add("no_scroll");
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

window.addEventListener('load', videoScroll);
window.addEventListener('scroll', videoScroll);

function videoScroll() {

  if ( document.querySelectorAll('video[autoplay]').length > 0) {
    var windowHeight = window.innerHeight,
        videoEl = document.querySelectorAll('video[autoplay]');

    for (var i = 0; i < videoEl.length; i++) {

      var thisVideoEl = videoEl[i],
          videoHeight = thisVideoEl.clientHeight,
          videoClientRect = thisVideoEl.getBoundingClientRect().top;

      if ( videoClientRect <= ( (windowHeight) - (videoHeight*.5) ) && videoClientRect >= ( 0 - ( videoHeight*.5 ) ) ) {
        thisVideoEl.play();
      } else {
        thisVideoEl.pause();
      }

    }
  }

}