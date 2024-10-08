$(function() {
    const $single_item = $('.single-item');
    $single_item.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    //ICONE DE NEXT
    $('.list-cs.btn-previus').click(function(){
        $single_item.slick('slickPrev');
    });
    $('.list-cs.btn-next').click(function(){
        $single_item.slick('slickNext');
    });
    //possivel merda===========

    // $slick_cloned = $single-item.find('.slick-cloned');
    // if (!$slick_cloned.length) {
    //     $('.control-btn-card-spaces').css('display', 'none');
    // }
})

