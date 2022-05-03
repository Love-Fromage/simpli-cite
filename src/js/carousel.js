window.addEventListener("DOMContentLoaded", () => {
	console.log("test du carousel");
	//fak tu criss ton code carousel ici
	//pour pas faire tout foirer

	//Un commentaire
	console.log("Ça fonctionne!!!");

	const uneFonction = () => {
		console.log("coucou");
	};

	uneFonction();

	let prev = document.getElementById("prev");
	let next = document.getElementById("next");
	let slides = document.getElementById("slides");
	let pos = 0;
	let pressed = false;
	const tailleImage = 32;
	console.log($(".slides").css("margin-left"));
	console.log(pos);
	const styleBtn = [
		{ filter: "grayscale(0)", opacity: 1 },
		{
			filter: "grayscale(1)",
			opacity: 0.2,
		},
	];
	if (window.innerWidth >= 1280) {
		// next.addEventListener("click", () => {
		// 	//si le bouton de next na pas ete clicker
		// 	pos++;
		// 	if (!pressed) {
		// 		pressed = true;
		// 		prev.classList.remove("f-s");
		// 	}
		// 	if (pos >= 3) {
		// 		next.classList.add("f-s");
		// 	}
		// });
		// //bouton prev
		// prev.addEventListener("click", () => {
		// 	//si le bouton de next na pas ete clicker
		// 	pos--;
		// 	if (pos >= 3) {
		// 		next.classList.remove("f-s");
		// 	}
		// });
		// prev.addEventListener("click", () => {
		// 	console.log("prev");
		// 	$("#prev").css(styleBtn[1]);
		// 	if ($(".slides").css("margin-left") === "0px" || pos <= 0) {
		// 		pos = 6;
		// 		prev.removeEventListener("click", this);
		// 		console.log("0");
		// 	} else {
		// 		$(".slides")
		// 			.finish()
		// 			.animate(
		// 				{
		// 					marginLeft: "+=" + tailleImage + "vw",
		// 				},
		// 				300
		// 			);
		// 		pos--;
		// 		console.log(pos);
		// 		console.log($(".slides").css("margin-left"));
		// 	}
		// });
		// next.addEventListener("click", () => {
		// 	console.log("next");
		// 	$("#prev").css(styleBtn[0]);
		// 	if ($(".slides").css("margin-left") === "-1200px" || pos >= 2) {
		// 		pos = 0;
		// 		$("#prev").css(styleBtn[0]);
		// 		next.removeEventListener("click", this);
		// 		console.log("0");
		// 	} else {
		// 		$(".slides")
		// 			.finish()
		// 			.animate(
		// 				{
		// 					marginLeft: "-=" + tailleImage + "vw",
		// 				},
		// 				300
		// 			);
		// 		pos++;
		// 		console.log(pos);
		// 		console.log($(".slides").css("margin-left"));
		// 	}
		// 	//console.log($('.slides').css('margin-left'));
		// });
	}
});
