(function($){

    var scroll = new LocomotiveScroll();
    gsap.registerPlugin(ScrollTrigger);

    // const globalEase =  CustomEase.create("custom", "M0,0 C0.466,0 0.585,0.799 0.714,0.92 0.758,0.961 0.78,1 1,1 ");

    /*
    =========================================================
    On Ready
    =========================================================
    */
    $(document).ready(function() {

        /*
        =========================================================
        Loading Screen
        =========================================================
        */
        gsap.to('.loading-screen', {
            top: '100%',
            bottom: '0%',
            duration: 0.6,
            delay: 1.9,
            ease: "easeInOutSine",
            onStart: function() {     
            },
            onComplete: function() {
            }
        });

        gsap.to('.loading-screen', {
            delay: 2.3,
            opacity: 0,
            duration: 0.01,
            ease: "easeInOutSine",
        });


        gsap.from('.letter-container', {
            opacity: 0,
        });

        var introTrace = anime({
            targets: '.b-logo path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 700,
            delay: 0.3,
            direction: 'alternate',
            loop: true
        });
        
        var introsqTrace = anime({
            targets: '.b-logo rect',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 700,
            delay: 0.3,
            direction: 'alternate',
            loop: true
        });


        /*
        =========================================================
        Letter Tracing
        =========================================================
        */
        var fontTrace = anime({
            targets: '.letter path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1000,
            delay: 2300,
            direction: 'alternate',
            loop: false
        });

    });


    /*
    =========================================================
    Letter Hover Slideshow
    =========================================================
    */

    var timer;
    $(".letter").mouseenter(function(e) {
        var that = this;
        timer = setTimeout(function(){

            var t = e.currentTarget.dataset.id;
            var i = document.getElementById(t);
            var c = i.dataset.color;
            var g = c.substring(1);
    
            gsap.to(i, {
                opacity: 1,
                duration: 0.7,
            });
    
            gsap.to('svg.letter', {
                stroke: c
            });
    
            gsap.to('.navbar', {
                color: c
            });
    
            $('body').addClass(g);

        }, 400);

    }).mouseleave(function(e) {

        clearTimeout(timer);

        var t = e.currentTarget.dataset.id;
        var i = document.getElementById(t);
        var c = i.dataset.color;
        var g = c.substring(1);

        gsap.to(i, {
            //top: '0%',
            // height: '0%',
            opacity: 0,
            // onComplete: function() { $(i).css({ top: '100%' }) },
            duration: 0.3,
        });

        gsap.to('.motion-image', {
            //top: '100%',
            opacity: 0
        });

        gsap.to('svg.letter', {
            stroke: '#EE6055',
            duration: 0.5
        });

        gsap.to('.navbar', {
            color: '#EE6055',
            duration: 0.5
        });


        $('body').removeClass(g);

    });

    /*
    =========================================================
    Letter Click
    =========================================================
    */
    $('.letter').on('click', function() {
        console.log();
    });

    /*
    =========================================================
    Menu Image Hover
    =========================================================
    */
    var timerx;
    $(".cell").mouseenter(function(e) {
        var that = this;
        timerx = setTimeout(function(){

            var targ = $(that).attr('data-background');

            $('.menu').css({
                background: 'url("'+ targ +'") no-repeat',
                backgroundSize: 'cover',
                backgroundPosition: 'center center',
            });    

        }, 100);

    }).mouseleave(function(e) {

        clearTimeout(timerx);

    });


    /*
    =========================================================
    Menu Closer

    // Change background back to initial
    =========================================================
    */
    $('.close-button').on('click', function() {
        gsap.to('.menu', {
            duration: 0.2,
            onComplete: function() { 

                $('.menu-wrapper').css({ background: 'url("")' });

                $('.menu').hide(); 

                anime({
                    targets: '.letter path',
                    strokeDashoffset: [anime.setDashoffset, 0],
                    easing: 'easeInOutSine',
                    duration: 700,
                    delay: 0.3,
                    direction: 'alternate',
                    loop: false
                });

                
            }
        });
    });

    /*
    =========================================================
    Home Button - Flyout
    **** Needs Work ****
    =========================================================
    */
//     $('.logo').on('mouseenter', function() {
//         $('.home-btn').css({
//             marginLeft: '0px'
//         });
//     });

//    $('.logo').on('mouseleave', function() {
//         $('.home-btn').css({
//             marginLeft: '100px'
//         });
//     });

    /*
    =========================================================
    Show Menu
    =========================================================
    */
    $('.hamburger-wrapper').on('click', function() {
        gsap.to('.menu', {
            bottom: '0%',
            height: '100%',
            opacity: 1,
            duration: 0.24,
            onStart: function() { $('.menu').show() }
        });
    });

    /*
    =========================================================
    Menu Image Movement
    =========================================================
    */
    // (function() {
    //     var indexOf = [].indexOf;

    //     if (indexOf.call(window, 'ontouchstart') >= 0 === false) {
    //         $(".cell").mousemove(function(e) {
    //             var moveX, moveY;

    //             moveX = e.pageX * -1 / 20 + 'px';
    //             moveY = e.pageY * -1 / 20 + 'px';
    //             return $('.image').css('background-position', 'calc(80% + ' + moveX + ') calc(60% + ' + moveY + ')');
    //         });
    //     }

    // }).call(this);

    /*
    =========================================================
    Up Button
    =========================================================
    */
   ScrollTrigger.create({
        trigger: '.about-foot',
        onEnter: function() { 
            $('.up-arrow').addClass('show-arrow');

            gsap.to('.arrow-wrapper', {
                x: -100,
                rotate: 360
            });

            console.log('enter'); 
        },
        onEnterBack: function() { 
            $('.up-arrow').addClass('show-arrow');
            gsap.to('.up-arrow', {
                x: 0,
                rotate: 0
            });
            console.log('enter back'); 
        },
        onLeave: function() {
            console.log('leave');
            gsap.to('.up-arrow', {
                x: -180,
                rotate: -360
            });
        },
        onLeaveBack: function() {
            gsap.to('.arrow-wrapper', {
                x: 0,
                rotate: -360
            });
            console.log('leave back');
        }
   });

    /*
    =========================================================
    About Area (Homepage)
    =========================================================
    */
    ScrollTrigger.create({
        trigger: '.about-title',
        onEnter: function() {
            gsap.to('.about-title', {
                x: 0,
                opacity: 1,
                duration: 0.42,
                delay: 0.125
            });
            console.log('enter')
        },
        onLeaveBack: function() {
            gsap.to('.about-title', {
                x: -140,
                opacity: 0,
                duration: 0.42,
            });
            console.log('leave back');
        }
    });

    ScrollTrigger.create({
        trigger: '.about-text',
        onEnter: function() {
            gsap.to('.about-text', {
                opacity: 1,
                duration: 0.42,
                delay: 0.125
            });
            console.log('enter')
        },
        onLeaveBack: function() {
            gsap.to('.about-text', {
                opacity: 0,
                duration: 0.42,
            });
            console.log('leave back');
        }
    });

    /*
    =========================================================
    Contact Area (Homepage)
    =========================================================
    */
    ScrollTrigger.create({
        trigger: '.contact-title',
        onEnter: function() {
            gsap.to('.contact-title', {
                x: 0,
                opacity: 1,
                duration: 0.42,
                delay: 0.125
            });
            console.log('enter')
        },
        onLeaveBack: function() {
            gsap.to('.contact-title', {
                x: -140,
                opacity: 0,
                duration: 0.42,
            });
            console.log('leave back');
        }
    });

    ScrollTrigger.create({
        trigger: '.contact-links',
        onEnter: function() {
            gsap.to('.contact-links', {
                opacity: 1,
                duration: 0.42,
                delay: 0.32
            });
            console.log('enter')
        },
        onLeaveBack: function() {
            gsap.to('.contact-links', {
                opacity: 0,
                duration: 0.42,
                delay: 0.32
            });
            console.log('leave back');
        }
    });


})(jQuery);

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