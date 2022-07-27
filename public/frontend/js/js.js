
    $(".box-footer h6").on("click", function(){
        $(this).parent().children("div").slideToggle();
    })
    $(".menu-map").on("click", function(){
      $(this).parent().children("div").slideToggle();
  })
    $(".btn-category").on("click", function(){
        $(this).parent().children(".list-category").slideToggle();
    })
    $(".btn-close-sidebar").on("click", function(){
        var margin = $(".menu").css("left");
        
        if(margin == "0px")
        {
            $(".menu").css("left","-320px")
        }
    })
    $(".btn-sidebar").on("click", function(){
        var margin = $(".menu").css("left");
        if(margin == "-320px")
        {
            $(".menu").css("left","0px")
        }
    })

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            400:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });
 
 


