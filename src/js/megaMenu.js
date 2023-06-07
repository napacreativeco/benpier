(function($){

    /*
    =========================================================
    Menu Image Hover
    =========================================================
    */
    var timerx;
    $(".cell").mouseenter(function(e) {
        var that = this;
        var targ = $(that).attr('data-background');

        timerx = setTimeout(function(){
            $('.menu').css({
                background: 'url("'+ targ +'") no-repeat',
                backgroundSize: 'cover',
                backgroundPosition: 'center center',
            });    
        }, 0);

    }).mouseleave(function(e) {

        clearTimeout(timerx);

    });

})(jQuery);
