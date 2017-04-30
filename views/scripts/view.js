$().ready(function(){

    //tilt
    if ($(window).width() > 768) {
        var casts = $('.cast img').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });

        var posters = $('.poster').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });

        var poster = $('#poster').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });

        var trailer = $('#trailer iframe').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });
    }

    //carousells
    var casts = new Swiper('#cast-slide', {
        slidesPerView: 'auto',
        freeMode: true,
        mousewheelControl: true
    });

    var posters = new Swiper('#poster-slide', {
        slidesPerView: 'auto',
        freeMode: true,
        mousewheelControl: true
    });

});