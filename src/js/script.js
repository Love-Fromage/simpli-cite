document.addEventListener("DOMContentLoaded", function (event) {
	//Un commentaire
	console.log("Ça fonctionne!!!");
	const menuHam = document.querySelector("#ham");
	const btnHam = document.querySelector(".cont-ham");
	const navM = document.querySelector(".nav-m");
	const logoNav = document.querySelector("#logo-nav-m");
	const hamPain1 = document.querySelector("#pain1");
	const hamPain2 = document.querySelector("#pain2");

	let logoImg = logoNav.src.split("/").pop();

	const toggleLeMenu = () => {
		console.log("cesame ouvre toi!");

		if (!menuHam.classList.contains("toggle-off")) {
			menuHam.classList.add("toggle-off");
		} else if (menuHam.classList.contains("toggle-off")) {
			menuHam.classList.remove("toggle-off");
		}

		if (!menuHam.classList.contains("toggle-on")) {
			menuHam.classList.add("toggle-on");
		} else if (menuHam.classList.contains("toggle-on")) {
			menuHam.classList.remove("toggle-on");
		}

		//fait juste ca si tes sur la page d'accueil please
		if (document.querySelector(".home-cont-about") != null) {
			console.log(logoNav.src);
			if (!navM.classList.contains("blanc-nav")) {
				navM.classList.add("blanc-nav");
			} else if (
				navM.classList.contains("blanc-nav") &&
				window.scrollY <= 10
			) {
				navM.classList.remove("blanc-nav");
			}
			if (logoImg === "logo-blanc.svg") {
				console.log("change l'image!");
				logoImg = "logo-noir.svg";
				logoNav.src = "../images/" + logoImg;
				//sinon si l'image est noir...
			} else if (logoImg === "logo-noir.svg" && window.scrollY <= 10) {
				logoImg = "logo-blanc.svg";
				logoNav.src = "../images/" + logoImg;
			}
			window.addEventListener("scroll", () => {
				// console.log(window.pageYOffset);
				if (window.pageYOffset >= 10) {
					// console.log("plus bas de 10");
					navM.classList.add("blanc-nav");
					hamPain1.classList.add("pain2");
					hamPain2.classList.add("pain2");

					logoImg = "logo-noir.svg";
					logoNav.src = "../images/" + logoImg;
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
						navM.classList.remove("blanc-nav");
						hamPain1.classList.remove("pain2");
						hamPain2.classList.remove("pain2");
					}
				}
			});
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
