function clickButton() {
	alert("Clicked!");
}

function getColor() {
	var newColor = document.getElementById("color").value;
	//alert(newColor);

	document.getElementById("div1").style.backgroundColor = newColor;
}