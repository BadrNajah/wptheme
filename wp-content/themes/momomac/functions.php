<?php
	define('QODE_ROOT', get_template_directory_uri());

	function include_file() 
	{
	// includ file css
     wp_enqueue_style( 'source', 'https://fonts.googleapis.com/css?family=Amiri|Cairo|Changa|Reem+Kufi',array(),null); 
     wp_enqueue_style('bootstrapcss'     , get_template_directory_uri().'/css/bootstrap.css' );
     wp_enqueue_style('bootstrapcss'     , get_template_directory_uri().'/css/rtl.css' );
     wp_enqueue_style('dre'  , get_template_directory_uri().'/css/font-awesome.min.css' );
     wp_enqueue_style('style'         , get_stylesheet_uri());
     // wp_enqueue_style( 'source', 'https://fonts.googleapis.com/css?family=Amiri|Cairo|Changa|Reem+Kufi',array(),null); 

	// includ file js
     wp_enqueue_script('jqueryLib'         ,get_template_directory_uri().'/js/jquery.min.js',array(),'null',true );
     wp_enqueue_script('tather'         , get_template_directory_uri().'/js/tether.min.js',array(),'null',true );
     wp_enqueue_script('bootstrapjs'         , get_template_directory_uri().'/js/bootstrap.min.js',array(),'null',true );
     wp_enqueue_script('index'         , get_template_directory_uri().'/js/index.js',array(),'null',true );


	}
   	add_action('wp_enqueue_scripts' , 'include_file');

   	/* Support the thumbnails */

 	add_theme_support('post-thumbnails');

	/**/

	function make_menu()
	{
	    register_nav_menus( 
	    	array(
	    			'header-location' => 'header',
	    			'footer-location' => 'footer',
	            ));
	}

 	add_action('init' , 'make_menu');

   	
 	//function count lenght of word
 	function count_for_excerpt()
 	{
 		return 20;
 	}

 	//run function 
 	add_filter('excerpt_length','count_for_excerpt');


	function our_widget()
	{
		register_sidebar(
			array(
			'name' => 'Social Media',
			'id' => 'sidebar',
		  	'description' => 'Social Media In Footer '
 		  ));
	}

 	add_action('widgets_init' , 'our_widget');


	 function slidehome($atts)
	 {
		$type = shortcode_atts( array(), $atts);
		
		ob_start();
	
		get_template_part('slid-home');
	
		$html = ob_get_contents();
	
		ob_clean();
	
		return $html;
	 }
	 
	add_shortcode( 'slidhome', 'slidehome' ); 





?>







	