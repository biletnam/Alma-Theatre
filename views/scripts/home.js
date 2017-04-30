$().ready(function(){

    //scroll spy
    $('body').scrollspy({
        target: "#nav-top"
    });

    //link click scroll animation
    $('#nav-top .nav li a').click(function(){
        var smooth = $(this).attr('data-smooth');
        if(typeof smooth !== typeof undefined && smooth !== false){
            $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top+"px"}, 500);
            event.preventDefault();
        }
    });

    //background color toggle
    function nav_opaque(){
        var distance= $(this).scrollTop(),
            height  = $('#hottest').height()-50,
            nav     = $('#nav-top'),
            is_opaq = nav.hasClass('opaque');

        if(distance > height){
            if(!is_opaq)
                nav.addClass("opaque");
        }else if(is_opaq){
            nav.removeClass("opaque");
        }
    }

    nav_opaque();
    $(window).scroll(nav_opaque);

    /* Hottest Movie */

    //carousel and thumbnails
    var hottest = new Swiper('#covers', {
        autoplay: 5000,
        speed: 500,
        autoplayDisableOnInteraction: false
    });
    hottest.on('slideChangeStart', function(){
        $('#thumbnails .slide').removeClass('active');
        var slide = $('#thumbnails .slide').get(hottest.realIndex);
        $(slide).addClass('active');
    });
    $('#thumbnails .slide').click(function(){
        $('#thumbnails .slide').removeClass('active');
        hottest.slideTo($(this).index());
        $(this).addClass('active');
    });

    //parallax cover position
    $('.cover-slide').each(function() {
        //set size
        var th = $(this).height(),//box height
            tw = $(this).width(),//box width
            im = $(this).children('.parallax'),//image
            ih = 1080,//inital image height
            iw = 1920;//initial image width
        ratio = Math.max(th/ih, tw/iw);
        leftOffset = (tw-(iw*ratio))/2;
        topOffset = (th-(ih*ratio))/2;

        im.css({
            transform: "scale("+(ratio)+")",
            "transform-origin": "left top",
            top: topOffset + "px",
            left: leftOffset + "px"
        });
    });

    //thumbnails height
    $('#thumbnails .slide').each(function(){
        var width = $(this).width(),
            ratio = width/1920,
            height= 1080*ratio;
        $(this).css({
            height: height,
            bottom: -(0.7*height) + "px"
        });
    });

    $(window).resize(function(){
        //parallax cover position
        $('.cover-slide').each(function() {
            //set size
            var th = $(this).height(),//box height
                tw = $(this).width(),//box width
                im = $(this).children('.parallax'),//image
                ih = im.height(),//inital image height
                iw = im.width();//initial image width
            ratio = Math.max(th/ih, tw/iw);
            leftOffset = (tw-(iw*ratio))/2;
            topOffset = (th-(ih*ratio))/2;

            im.css({
                transform: "scale("+(ratio)+")",
                "transform-origin": "left top",
                top: topOffset + "px",
                left: leftOffset + "px"
            });
        });

        $('#thumbnails .slide').each(function(){
            var width = $(this).width(),
                ratio = width/1920,
                height= 1080*ratio;
            $(this).css({
                height: height,
                bottom: -(0.7*height) + "px"
            });
        });
    });

    //parallax
    $('#fan_wall').plaxify({"xRange":25, "yRange": 25, "invert": true});
    $('#fan_man').plaxify({"xRange":20, "yRange": 20});
    $('#fan_city').plaxify({"xRange":10, "yRange": 10});

    $('#kong_kong').plaxify({"xRange":30, "yRange": 30});
    $('#kong_women').plaxify({"xRange":20, "yRange": 20, "invert": true});
    $('#kong_mountain').plaxify({"xRange":10, "yRange": 10});

    $('#martian_man').plaxify({"xRange":20, "yRange": 20, "invert": true});
    $('#martian_shadow').plaxify({"xRange":20, "yRange": 20, "invert": true});
    $('#martian_mountain').plaxify({"xRange":10, "yRange": 10});   

    $('#batman_superman').plaxify({"xRange":25,"yRange":25, "invert": true});
    $('#batman_batman').plaxify({"xRange":15,"yRange":15});

    $.plax.enable({
        "activityTarget": $('#hottest')
    });

    /* Showing Now Poster */

    if ($(window).width() > 768) {
        var poster = $('.poster').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });

        var btn = $('.details .btn').tilt({
            glare: true,
            maxGlare: .5,
            scale: 1.15
        });
    }

    /* Packages */

    var packages = new Swiper('#packages-carousel', {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        initialSlide: 1
    });

});