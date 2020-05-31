$(document).ready(function(){

// Efek Smooth scrooling
      $(".smooth").click(function(e){
         var tujuan = $(this).attr('href');
                // console.log($(tujuan).offset().top);

                $('html, body').animate({
                  scrollTop : $(tujuan).offset().top
                }, 2000);

                e.preventDefault()
      });



    })