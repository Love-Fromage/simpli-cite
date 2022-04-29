document.addEventListener("DOMContentLoaded", () => {
	const btnRadio1 = [];
	btnRadio1.push(document.getElementById("trans-a"));
	btnRadio1.push(document.getElementById("trans-m"));
	// console.log(btnRadio1[0]);

	//btnRadio1[0] = la checkbox pour la transmission automatique
	//btnRadio1[1] = la checkbox pour la transmission manuelle

	//fonction lorsque l'on click sur le bouton de transmission automatique

	btnRadio1[0].addEventListener("click", () => {
		$("#trans-a").prop("checked", true);
		$("#trans-m").prop("checked", false);
	});
	btnRadio1[1].addEventListener("click", () => {
		$("#trans-a").prop("checked", false);
		$("#trans-m").prop("checked", true);
	});
});
