<?php wp_footer(); ?>

    
    <!-- Barbra put here content that will not change between your pages, like <footer>  -->
    
    <!--
    ==================================================
    SCRIPTS
    ==================================================
    -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js" integrity="sha512-A64Nik4Ql7/W/PJk2RNOmVyC/Chobn5TY08CiKEX50Sdw+33WTOpPJ/63bfWPl0hxiRv1trPs5prKO8CpA7VNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://unpkg.com/@barba/core"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false,
        initClassName: 'aos-init', 
        animatedClassName: 'aos-animate', 
        useClassNames: false, 
        disableMutationObserver: false, 
        debounceDelay: 50, 
        throttleDelay: 99, 
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120,
        delay: 0,
        duration: 400,
        easing: 'ease',
        once: false,
        mirror: false, 
        anchorPlacement: 'top-bottom',
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/compiled/app-min.js" type="text/javascript"></script>

    <script>
      console.log(' ////// ')
      console.log('//    //')
      console.log('// || //')
      console.log('// || //')
      console.log('//----//')
    </script>

  </body>

</html>