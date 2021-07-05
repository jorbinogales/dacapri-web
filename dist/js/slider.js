
var slideIndex = 1;
var slides = [];
var dots = [];


$(document).ready(function(){
    
    for(var i = 0; i<9; i++){
        slides[i] = document.getElementById("mySlides_"+(i+1));
        dots[i] = document.getElementById('dot_'+(i+1));
    }
    
    showSlides(null);
})

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
     showSlides(slideIndex = n);
}

var slideIndex = 0;

function showSlides(n) {
  var i;

  if(n == null){
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex-1].style.display = "block";
        setTimeout(function(){
            showSlides(null);
            slideIndex++;
        }, 5000);
  } else {
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";

  }


}
