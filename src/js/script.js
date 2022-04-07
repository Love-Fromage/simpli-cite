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

		menuHam.classList.toggle("toggle-off");
		menuHam.classList.toggle("toggle-on");

		console.log(logoNav.src);
		navM.classList.toggle("blanc-nav");
		hamPain1.classList.toggle("pain2");
		hamPain2.classList.toggle("pain2");

		//si l'image est blanche...
		if (logoImg === "logo-blanc.svg") {
			console.log("change l'image!");
			logoImg = "logo-noir.svg";
			logoNav.src = "../images/" + logoImg;
			//sinon si l'image est noir...
		} else if (logoImg === "logo-noir.svg") {
			logoImg = "logo-blanc.svg";
			logoNav.src = "../images/" + logoImg;
		}
	};

	btnHam.addEventListener("click", toggleLeMenu);
	const uneFonction = () => {
		// console.log("coucou");
	};
});
