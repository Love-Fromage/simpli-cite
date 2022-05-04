document.addEventListener("DOMContentLoaded", function (event) {
	//Un commentaire
	console.log("Ça fonctionne!!!");
	const homeB = document.querySelector(".home-cont-about");
	const menuHam = document.querySelector("#ham");
	const btnHam = document.querySelector(".cont-ham");
	const pain1 = document.querySelector("#pain1");
	const pain2 = document.querySelector("#pain2");
	const navM = document.querySelector(".nav-m");
	const navD = document.querySelector(".nav-d");
	const scrollD = document.querySelector("#scrolled");
	const li1 = document.querySelector(".li-1");
	const li2 = document.querySelector(".li-2");
	const li3 = document.querySelector(".li-3");
	const li4 = document.querySelector(".li-4");
	let past = false;
	const leChar = document.getElementById("leChar");
	// btnHam.classList.add("animate-ham2");
	pain1.classList.add("animate-hamOff1");
	pain2.classList.add("animate-hamOff2");
	//const magicLine = document.querySelector(".magic-line");
	// $(".magic-line").finish().animate({
	// 	left: "",
	// });

	const logoNav = document.querySelector("#logo-nav-m");
	const logoNavD = document.querySelector("#logo-nav-d");
	const hamPain1 = document.querySelector("#pain1");
	const hamPain2 = document.querySelector("#pain2");

	let logoImg = logoNav.src.split("/").pop();
	let logoImgD = logoNav.src.split("/").pop();

	if (homeB !== null) {
		//pour le blanc sur le hover
		navD.addEventListener("mouseenter", () => {
			if (window.pageYOffset == 0) {
				navD.classList.add("blanc-nav");
				scrollD.classList.add("scrolled");
				logoImgD = "logo-noir-d.svg";
				logoNavD.src = "../images/" + logoImgD;
			}
		});
		navD.addEventListener("mouseleave", () => {
			// console.log(window.pageYOffset);
			if (
				window.pageYOffset == 0 &&
				navD.classList.contains("blanc-nav")
			) {
				navD.classList.remove("blanc-nav");
				scrollD.classList.remove("scrolled");
				logoImgD = "logo-blanc.svg";
				logoNavD.src = "../images/" + logoImgD;
			}
		});

		window.addEventListener("scroll", (e) => {
			let leCharValue = (window.pageYOffset * 1.2) / 100 - 55;
			// console.log(window.pageYOffset);
			console.log(leCharValue * 2.2 + 35);
			console.log("offset: " + window.pageYOffset);
			if (!past) {
				if (window.innerWidth >= 1280) {
					if (window.pageYOffset <= 2700) {
						leChar.style.marginRight =
							leCharValue * 2.2 + 30 + "vw";
					}
				}
				if (window.innerWidth >= 1550) {
					if (window.pageYOffset <= 3100) {
						leChar.style.marginRight =
							leCharValue * 2.2 + 30 + "vw";
					}
				}
			}

			if (window.pageYOffset >= 2700) {
				past = true;
				$("#le-char").animate(
					{
						marginRight: "-25vw",
					},
					300
				);
			}

			if (window.pageYOffset >= 3100) {
				past = true;
				$("#le-char").animate(
					{
						marginRight: "-25vw",
					},
					300
				);
			}

			//if (window.pageYOffset <= 2000) {
			//	$(".voiture-m").children().css("margin-right", "-55vw");
			//}
			if (window.pageYOffset !== 0) {
				// console.log("plus bas de 10");
				navM.classList.add("blanc-nav");
				navD.classList.add("blanc-nav");
				scrollD.classList.add("scrolled");
				hamPain1.classList.add("pain2");
				hamPain2.classList.add("pain2");

				logoImg = "logo-noir.svg";

				logoImgD = "logo-noir-d.svg";
				logoNav.src = "../images/" + logoImg;
				logoNavD.src = "../images/" + logoImgD;
			} else {
				// logoImg = "logo-blanc.svg";
				// logoNav.src = "../images/" + logoImg;
				// navM.classList.remove("blanc-nav");
				// hamPain1.classList.remove("pain2");
				// hamPain2.classList.remove("pain2");
				if (
					menuHam.classList.contains("toggle-off") &&
					window.screenY <= 10
				) {
					logoImg = "logo-blanc.svg";
					logoNav.src = "../images/" + logoImg;
					logoNavD.src = "../images/" + logoImg;
					navM.classList.remove("blanc-nav");
					navD.classList.remove("blanc-nav");
					scrollD.classList.remove("scrolled");
					hamPain1.classList.remove("pain2");
					hamPain2.classList.remove("pain2");
				}
			}
		});
		console.log(logoNav.src);
	}
	$(".magic-line").css({
		opacity: 0,
	});
	navD.addEventListener("mouseleave", () => {
		$(".magic-line").css({
			opacity: 0,
		});
	});
	//MOUSE ENTER DU PREMIER li
	li1.addEventListener("mouseenter", () => {
		$(".magic-line").finish().animate(
			{
				left: "90px",
				width: "69px",
				opacity: 1,
			},
			200
		);
	});

	//MOUSE ENTER 2e li
	li2.addEventListener("mouseenter", () => {
		$(".magic-line").finish().animate(
			{
				left: "209px",
				width: "162px",
				opacity: 1,
			},
			200
		);
	});

	//MOUSE ENTER 3e li
	li3.addEventListener("mouseenter", () => {
		$(".magic-line").finish().animate(
			{
				left: "421px",
				width: "87px",
				opacity: 1,
			},
			200
		);
	});

	//MOUSE ENTER 4e li
	li4.addEventListener("mouseenter", () => {
		$(".magic-line").finish().animate(
			{
				left: "558px",
				width: "73px",
				opacity: 1,
			},
			200
		);
		// magicLine.classList.add("magic-line4");
	});

	const toggleLeMenu = () => {
		console.log("cesame ouvre toi!");

		// $(".pain2").animate(
		// 	{
		// 		transform: "translateY(-10px)",
		// 	},
		// 	300
		// );
		if (!menuHam.classList.contains("toggle-off")) {
			menuHam.classList.add("toggle-off");
		} else if (menuHam.classList.contains("toggle-off")) {
			menuHam.classList.remove("toggle-off");
		}

		if (!menuHam.classList.contains("toggle-on")) {
			if (
				pain1.classList.contains("animate-hamOff1") &&
				pain2.classList.contains("animate-hamOff2")
			) {
				pain1.classList.remove("animate-hamOff1");
				pain2.classList.remove("animate-hamOff2");
			}
			if (
				!pain1.classList.contains("animate-hamOn1") &&
				!pain2.classList.contains("animate-hamOn2")
			) {
				pain1.classList.add("animate-hamOn1");
				pain2.classList.add("animate-hamOn2");
			}
			menuHam.classList.add("toggle-on");
		} else if (menuHam.classList.contains("toggle-on")) {
			menuHam.classList.remove("toggle-on");
			if (
				pain1.classList.contains("animate-hamOn1") &&
				pain2.classList.contains("animate-hamOn2")
			) {
				pain1.classList.remove("animate-hamOn1");
				pain2.classList.remove("animate-hamOn2");
			}
			if (
				!pain1.classList.contains("animate-hamOff1") &&
				!pain2.classList.contains("animate-hamOff2")
			) {
				pain1.classList.add("animate-hamOff1");
				pain2.classList.add("animate-hamOff2");
			}
		}

		if (homeB !== null) {
			//fait juste ca si tes sur la page d'accueil please
			if (logoImg === "logo-blanc.svg") {
				console.log("change l'image!");
				logoImg = "logo-noir.svg";
				logoNav.src = "../images/" + logoImg;
				//sinon si l'image est noir...
			} else if (logoImg === "logo-noir.svg" && window.scrollY <= 10) {
				logoImg = "logo-blanc.svg";
				logoNav.src = "../images/" + logoImg;
			}
			if (!navM.classList.contains("blanc-nav")) {
				navM.classList.add("blanc-nav");
			} else if (
				navM.classList.contains("blanc-nav") &&
				window.scrollY <= 10
			) {
				navM.classList.remove("blanc-nav");
			}
			if (
				!hamPain1.classList.contains("pain2") &&
				!hamPain2.classList.contains("pain2")
			) {
				hamPain1.classList.add("pain2");
				hamPain2.classList.add("pain2");
			} else if (
				hamPain1.classList.contains("pain2") &&
				hamPain2.classList.contains("pain2") &&
				window.scrollY <= 10
			) {
				hamPain1.classList.remove("pain2");
				hamPain2.classList.remove("pain2");
			}
		}
		//si l'image est blanche...
	};
	console.log(window.pageYOffset);

	btnHam.addEventListener("click", toggleLeMenu);

	const uneFonction = () => {
		// console.log("coucou");
	};
});
