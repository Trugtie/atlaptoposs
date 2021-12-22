// categories script
const btnUp = document.querySelector('.btnUp');
const btnUp2 = document.querySelector('.btnUp2');
const btnUp3 = document.querySelector('.btnUp3');
const cateContent = document.querySelectorAll('.cateContent');
const cateContentHeader= document.querySelectorAll('.cateContent_header');
const cateContentDescription= document.querySelectorAll('.cateContent_header_description');
btnUp.addEventListener("click", function(){
  if(cateContent[0].style.height == '52.4rem'){
      cateContent[0].style.height = '0';
      cateContentHeader[0].style.opacity="0";
      cateContentHeader[1].style.opacity="0";
      cateContentDescription[0].style.opacity="0";
      cateContentDescription[1].style.opacity="0";
  }
  else{
      cateContent[0].style.height = '52.4rem';
      cateContentHeader[0].style.opacity="1";
      cateContentHeader[1].style.opacity="1";
      cateContentDescription[0].style.opacity="1";
      cateContentDescription[1].style.opacity="1";
  }
});


btnUp2.addEventListener("click", function(){
  if(cateContent[1].style.height == '52.4rem'){
      cateContent[1].style.height = '0';
      cateContentHeader[2].style.opacity="0";
      cateContentHeader[3].style.opacity="0";
      cateContentDescription[2].style.opacity="0";
      cateContentDescription[3].style.opacity="0";
  }
  else{
      cateContent[1].style.height = '52.4rem';
      cateContentHeader[2].style.opacity="1";
      cateContentHeader[3].style.opacity="1";
      cateContentDescription[2].style.opacity="1";
      cateContentDescription[3].style.opacity="1";
  }
});


btnUp3.addEventListener("click", function(){
  if(cateContent[2].style.height == '52.4rem'){
    
      cateContent[2].style.height = '0';
      cateContentHeader[4].style.opacity="0";
      cateContentHeader[5].style.opacity="0";
      cateContentDescription[4].style.opacity="0";
      cateContentDescription[5].style.opacity="0";
  }
  else{
      cateContent[2].style.height = '52.4rem';
      cateContentHeader[4].style.opacity="1";
      cateContentHeader[5].style.opacity="1";
      cateContentDescription[4].style.opacity="1";
      cateContentDescription[5].style.opacity="1";
  }
});

//Infinity carosel
$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
      pauseOnHover: false,
      responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});