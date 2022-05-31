const tl = gsap.timeline({
	scrollTrigger: {
		trigger: "#pinned-anim",
    pin: "#pinned-anim",
		start: "top top",
		end: () => `+=100%`,
		pin: true,
		pinSpacing: true,
		scrub: 1,
		invalidateOnRefresh: true,
    markers: true
	},
});

function pinStats() {
  $('.articles').css({'visibility': 'visible'});
    tl.fromTo(
        ".slide-1",
        { 
            y: 0
        },
        {
            y: '-100vh',
        }, 0.5
    );
    tl.fromTo(
        ".slide-2",
        {
            y: '100vh',
        },
        {
            y: 0,
        }, "<"
    );
    tl.to(".slide-2", {
        y:  '-100vh',
    }, "+=0.5");
    tl.fromTo(
        ".slide-3",
        {
            y: '100vh',
        },
        {
            y: 0,
        }, "<"
    );
  // just to add some extra time at the end so the last slide stays put for a bit before becoming unpinned
  tl.to({}, {duration: 0.5});
}

window.addEventListener("load", function (event) {
    pinStats();
});