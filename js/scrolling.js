$(document).ready(function(){
    
    $('a').click(function (e) {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 40
        }, 1500);
    });

        $('.scroll-top-div').fadeOut();
        $(window).on('scroll',function(){
            if($(this).scrollTop() <= 40 || !$(this).scrollTop()){
                $('.scroll-top-div').fadeOut();
            } else {
                $('.scroll-top-div').fadeIn();
            }
        }) 

    $(window).scroll(function(){ 
        var scroll = $(window).scrollTop(), 
        dh = $(document).height(),
        wh = $(window).height(); 
        ScrollPercent = ( scroll / (dh -wh)) * 100;
        console.log(ScrollPercent) 
        $('#progress-bar-scroll').css('width', ScrollPercent + '%' ); 
    })

        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
})


