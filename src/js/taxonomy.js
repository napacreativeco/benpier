(function($) {
    
    // Mouseover
    $('.taxonomy-image').on('mouseenter', function(e) {
        var img = $(this).find('img');
        var theColor =  $(this).parent('.taxonomy-item').attr('data-bg-color');

        gsap.to( $(this).find('.info-overlay'), {
            duration: 0.2,
            color: theColor,
            opacity: 1
        });

    });


    // Mouse Leave
    $('.taxonomy-image').on('mouseleave', function() {
        var img = $(this).find('img');

        gsap.to( $(this).find('.info-overlay'), {
            opacity: 0,
            duration: 0.2,
            delay: 0.3
        });

    });

    //================================================================================
    // Click
    $('.info-overlay').on('click', function() {
        var title = $(this).attr('data-title');
        var description = $(this).attr('data-description');
        var content = $(this).attr('data-content');
        var theColor =  $(this).attr('data-bg-color');

        //=====================================
        // Transition Overlay
        $('.taxonomy-container').append('<div class="taxonomy-transition"></div>');

        gsap.to('.taxonomy-transition', {
            y: "-100vh",
            duration: 0.64,
            ease: "power2.out",
            onComplete: gsap.to('.taxonomy-transition', { height: "0vh", delay: 1.2 })
        });

        //=====================================
        // Item Overlay
        setTimeout(function() {

            $('.taxonomy-container').append(
                '<div class="taxonomy-item--overlay"><div class="taxonomy-wrapper"><div class="tio--data"><h1 class="tio--title"></h1> <p class="tio--description"></p></div> <div class="tio--content"></div> <div class="tio--close"></div> </div></div></div>'
                ).promise().done(function() {
                    
                    //=====================================
                    // Scrolling
                    $('body').css({ overflowY: 'hidden' });
                    $('.taxonomy-item--overlay').css({ overflowY: 'scroll' });
                    console.log(theColor)

                    //=====================================
                    // Hydration
                    $(this).find('.tio--title').text(title);
                    $(this).find('.tio--description').html(description);
                    $(this).find('.tio--close').text('Close');
                    $(this).find('.tio--content').html(content);



                    // $('.taxonomy-item--overlay').css({ backgroundColor: theColor });

                    //==================================================
                    // Close
                    //==================================================
                    $('.tio--close').on('click', function() {

                        //=====================================
                        // Image
                        gsap.to('.tio--image', {
                            height: '0%',
                            maxHeight: '0vh',
                            duration: 0.6,
                            ease: "power2.out",
                        });

                        //=====================================
                        // Transition
                        gsap.to('.taxonomy-transition', {
                            height: "140vh",
                            duration: 1.2,
                            delay: 0.65,
                            onComplete: gsap.to('.taxonomy-transition', { y: "100vh", delay: 1.2 })
                        });

                        //=====================================
                        setTimeout(function() {
                            $('.taxonomy-item--overlay').css({
                                maxHeight: '0vh'
                            }).promise().done(function() {
                                this.remove();
                            });
                        }, 1250);

                        //=====================================
                        // Scrolling
                        $('body').css({ overflowY: 'scroll' });
                        $('.taxonomy-item--overlay').css({ overflowY: 'hidden' });
                        
                        
                    });
                    
            });

        }, 1000);

    });





})(jQuery);