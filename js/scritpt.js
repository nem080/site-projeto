/* Alterne entre adicionar e remover a classe "responsiva" para menu principal quando o usuário clicar no ícone*/
function myFunction() {
  var x = document.getElementById("menu01");
  if (x.className === "menu_principal01") {
    x.className += " responsive";
  } else {
    x.className = "menu_principal01";
  }
}


//slide 
var slideIndex = 1;
showSlides(slideIndex);

// Controles seguinte / anterior
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Controles de imagem em miniatura
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


	//login
	// obtenha a versao
var modelo = document.getElementById('id01');
	
	//Quando o usuário clica em qualquer lugar fora da versão, feche-o
window.onclick = function(event) {
	if (event.target == modelo) {
		modelo.style.display = "none";
	}
}
