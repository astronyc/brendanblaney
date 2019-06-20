$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 5) {
		$(".navbar").addClass("color-change");
	} else {
		$(".navbar").removeClass("color-change");
	}
});

// function scrolllNav () {
//     const fadeIn = document.querySelector(".content-wrap");
// 	fadeIn.classList.add("fade-in");
// }
// window.addEventListener('scroll', scrollNav));
