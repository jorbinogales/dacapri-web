 //after window is loaded completely 
window.onload = function(){
    //hide the preloader
    $('.loading').removeClass('show');
    setTimeout(function(){
        $('.loading').remove();
    },1000);
}