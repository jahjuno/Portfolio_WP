<?php
   function ainajuno_set_css_link () {
      wp_register_style('font_google', get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800');
      wp_enqueue_style('font_google');

      wp_register_style('css_themefisher_font', get_template_directory_uri() . '/css/themefisher-fonts.min.css');
      wp_enqueue_style('css_themefisher_font');

      wp_register_style('css_carousel_owl', get_template_directory_uri() .'/css/owl.carousel.min.css');
      wp_enqueue_style('css_carousel_owl');

      wp_register_style('css_bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css');
      wp_enqueue_style('css_bootstrap_min');

      wp_register_style('css_main', get_template_directory_uri() .'/css/main.css');
      wp_enqueue_style('css_main');

      wp_register_style('css_dark', get_template_directory_uri() . '/css/dark.css');
      wp_enqueue_style('css_dark');

      wp_register_style('css_colors_red', get_template_directory_uri() . '/css/colors/red.css');
      wp_enqueue_style('css_colors_red');
      
   }

   function ainajuno_set_js_link () {
      wp_register_script('jquery_add', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', array('jquery'), true);
      wp_enqueue_script('jquery_add');

      wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), true);
      wp_enqueue_script('bootstrap_js');

      wp_register_script('isotope_js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), true);
      wp_enqueue_script('isotope_js');

      wp_register_script('nicescroll_js', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(), true);
      wp_enqueue_script('nicescroll_js');

      wp_register_script('carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), true);
      wp_enqueue_script('carousel_js');

      wp_register_script('validation_js', get_template_directory_uri() . '/js/jquery-validation.min.js', array(), true);
      wp_enqueue_script('validation_js');

      wp_register_script('form_js', get_template_directory_uri() . '/js/form.min.js', array(), true);
      wp_enqueue_script('form_js');

      wp_register_script('main_js', get_template_directory_uri() . '/js/main.js', array(), true);
      wp_enqueue_script('main_js');

      wp_register_script('particles_js', get_template_directory_uri() . '/js/particles.min.js', array(), true);
      wp_enqueue_script('particles_js');

      wp_register_script('particles', get_template_directory_uri() . '/https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561436720/particles.js', true);
      wp_enqueue_script('particles');
   
   
      
   }

   add_action('wp_enqueue_scripts', 'ainajuno_set_css_link');
   add_action('wp_enqueue_scripts', 'ainajuno_set_js_link');
?>