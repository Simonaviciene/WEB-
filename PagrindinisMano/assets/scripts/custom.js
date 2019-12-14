"use strict";

console.log("JS DOM");


$('[data-fancybox="galerija"]').fancybox({
  loop: true,
  animationDuration: 1000,

  
});
// Mobile menu

document.querySelector(".burger").addEventListener("click", function(){
document.querySelector(".menu").classList.toggle("show");
});



var slider = tns({
    container: '.slideText',
    slideBy: 'page',
    autoplay: false,   
    items: 1,
    controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
  });

  $(function () {
    $.scrollUp({   
      scrollName: 'scrollUp', 
      topDistance: '300',
      topSpeed: 300, 
      animation: 'fade',
      animationInSpeed: 200, 
      animationOutSpeed: 200, 
      scrollText: 'Scroll to top',
      activeOverlay: false,
    });
  });















