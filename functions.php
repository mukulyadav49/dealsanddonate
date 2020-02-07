<?php
	function deals_and_donate_enqueue_styles() {

		// dequeue and deregister Hello Elementor Styles
		wp_dequeue_style('hello-elementor-theme-style');
		wp_deregister_style( 'hello-elementor-theme-style' );

		$parent_style = 'parent-style';

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_style('font-aweseome', get_stylesheet_directory_uri() .'/assets/css/font-awesome.css');
		wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() .'/assets/css/swiper.css');
		wp_enqueue_style('themify-icons', get_stylesheet_directory_uri() .'/assets/css/themify-icons.css');

		 wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
		 wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
		 wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
		 wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
		 wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() .'/assets/js/custom.js', array( 'jquery' ),'',true );
		}
	 add_action( 'wp_enqueue_scripts', 'deals_and_donate_enqueue_styles', 9999 );
	 add_action( 'wp_head', 'deals_and_donate_enqueue_styles', 9999 );

	//  Navigation Menu
	register_nav_menu( 'theme-menu', 'Header Menu' );

 ?>