$(document).ready(function() {

    // Carrusel de servicios
    $('#servicios ul').lightSlider({
        item:3,
        loop:true,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        auto: true,
        responsive : [
            {
                breakpoint: 1024,
                settings: {
                    item: 2,
                    slideMove: 1,
                    slideMargin: 6,
                  }
            },
            {
                breakpoint: 468,
                settings: {
                    item: 1,
                    slideMove: 1
                  }
            }
        ]
    });  
  });