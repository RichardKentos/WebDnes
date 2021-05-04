// .......................
// BURGER MENU
// .......................
$(".burger").click(function() {
	$(".transform_menu").addClass("menu_shown");
});

$(".arrow").click(function() {
	$(".transform_menu").removeClass("menu_shown");

});

// ...........................
// BACK TO THE TOP BUTTON
// ...........................
var back_top = document.getElementById("back_top");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    back_top.style.display = "block";

  } else {
    back_top.style.display = "none";
  }
}

$("#back_top").click(function() {
	$("html, body").animate({
		scrollTop:0}, "fast");
});

// ...........................
// Validating contact form
// ...........................
function validate() {
	var name = document.forms["contact_form"]["name"].value;
	var email = document.forms["contact_form"]["e-mail"].value;
	var message = document.forms["contact_form"]["message"].value;
	if(name == "") {
		document.getElementById("wrong_name").innerHTML = "Toto pole je povinné";
		return false
	}
	else if(email == "") {
		document.getElementById("wrong_email").innerHTML = "Toto pole je povinné";
		return false
	}
	else if(message == "") {
		document.getElementById("wrong_message").innerHTML = "Toto pole je povinné";
		return false
	}
}

// window.onload = function(){
// 	bubbles()};


// function bubbles(){
// 	var y = $(window).height();
// 	for (let index = 0; index < 15; index++) {
// 		var size = Math.floor(Math.random()* (35 - 10) + 10);
// 		var randomX = Math.floor(Math.random()*96);
// 		var randomY = Math.floor(Math.random()* (y - 65) + 65);
// 		var x = document.createElement("div");
// 		x.style.backgroundColor = "white";
// 		x.style.borderRadius = "50%";
// 		x.style.width = size + "px";
// 		x.style.height = size + "px";
// 		x.style.position = "absolute";
// 		x.style.zIndex = "-1";
// 		x.style.opacity = Math.floor(Math.random()*100);
// 		x.style.top = randomY +"%";
// 		x.style.left = randomX +"%";
// 		document.body.appendChild(x);
// 	}
	
// };



/* ========================
 		SLIDESHOW
 =========================*/
var slideIndex = 0;


function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1};
	
	slides[slideIndex-1].style.display = "block";
	setTimeout(showSlides,6000);
	};
