<?php
function load_stylesheet()
{
	wp_register_style('vendor', get_template_directory_uri() . '/assets/css/vendor/vendor.min.css', array(), 1, 'all');
	wp_enqueue_style('vendor');

	wp_register_style('plugins', get_template_directory_uri() . '/assets/css/plugins/plugins.min.css', array(), 1, 'all');
	wp_enqueue_style('plugins');

	wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
	wp_enqueue_style('style');

	wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts','load_stylesheet');


function load_script()
{

	wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), 1, 'all');
	wp_enqueue_script('modernizr');

	wp_register_script('vendor', get_template_directory_uri() . '/assets/js/vendor/jquery-3.5.1.min.js', array(), 1, 'all');
	wp_enqueue_script('vendor');

	wp_register_script('migrate', get_template_directory_uri() . '/assets/js/vendor/jquery-migrate-3.3.0.min.js', array(), 1, 'all');
	wp_enqueue_script('migrate');

	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), 1, 'all');
	wp_enqueue_script('bootstrap');

	wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins/plugins.min.js', array(), 1, 'all');
	wp_enqueue_script('plugins');

	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 'all');
	wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts','load_script');

add_theme_support('menus');
add_theme_support('post-thumbnails');
register_nav_menus(array('top-menu' => __('Top Menu','theme')));
register_nav_menus(array('footer_menu' => __('Footer Menu','theme')));
// function add_class_li($classes,$item,$args)
// {
// 	if (isset($args->li_class)) 
// 	{
// 		$classes[] = $args->li_class;
// 	}
// 	if (isset($args->active_class) && in_array('current',$classes)) 
// 	{
// 		$classes[] = $args->active_class;
// 	}
// 	return $classes;
// }
// add_filter('nav_menu_css_class','add_class_li',10,3);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'current';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



function add_anchor_class($attr,$item,$args)
{
	if (isset($args->a_class)) 
	{
		$attr['class'] = $args->a_class;
	}
	return $attr;
}
add_filter('nav_menu_link_attributes','add_anchor_class',10,3);

function apurba_wp_title( $title, $sep ) 
{
	global $paged, $page;
	if ( is_feed() ) 
	{
		return $title;
	}
	$title .= get_bloginfo( 'name', 'display' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) 
	{
		$title = "$title $sep $site_description";
	}
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) 
	{
		$title = "$title $sep " . sprintf( __( 'Page %s', 'apurba' ), max( $paged, $page ) );
	}
	return $title;
}
add_filter( 'wp_title', 'apurba_wp_title', 10, 2 );

//function for excerpt length of content
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_action('admin_menu', 'site_details');
function site_details() 
{
	add_menu_page('Site Details', 'Site Details', 'administrator', __FILE__, 'my_cool_plugin_settings_page' ,'dashicons-admin-generic' );
	add_action( 'admin_init', 'register_site_details' );
}
function register_site_details() 
{
	register_setting( 'theme-option-group', 'address' );
	register_setting( 'theme-option-group', 'office_phone' );
	register_setting( 'theme-option-group', 'email' );
	register_setting( 'theme-option-group', 'website' );
	register_setting( 'theme-option-group', 'facebook');
	register_setting( 'theme-option-group', 'twitter');
	register_setting( 'theme-option-group', 'instagram');
	register_setting( 'theme-option-group', 'linkedin');
	register_setting( 'theme-option-group', 'google_map');
	register_setting( 'theme-option-group', 'survice_success');
}
function my_cool_plugin_settings_page() 
{
?>
<div class="wrap">
	<h1>Site Details</h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'theme-option-group' ); ?>
		<?php do_settings_sections( 'theme-option-group' ); ?>
		<table class="form-table">
    		<tr valign="top">
    			<th scope="row">Phone Number</th>
    			<td><input type="text" name="office_phone" class="full" value="<?php echo esc_attr( get_option('office_phone') ); ?>" /></td>
    		</tr>
    		<tr valign="top">
    			<th scope="row">Address</th>
    			<td><input type="text" name="address" class="full" value="<?php echo esc_attr( get_option('address') ); ?>" /></td>
    		</tr>
			<tr valign="top">
    			<th scope="row">Email</th>
				<td><input type="email" name="email" class="full" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
    		</tr>
    		<tr valign="top">
    			<th scope="row">Website</th>
    			<td><input type="text" name="website" class="full" value="<?php echo esc_attr( get_option('website') ); ?>" /></td>
    		</tr>

			<tr valign="top">
    			<th scope="row">Service for Success</th>
    			<td>
					<?php
					$map1 = get_option('survice_success');
					wp_editor( $map1, 'survice_success', array(
        			'wpautop'       => true,
        			'media_buttons' => true,
        			'textarea_name' => 'survice_success',
        			'textarea_rows' => 10,
        			'teeny'         => true
        			) );
					?>
				</td>
    		</tr>
    		 
    		<tr valign="top">
    			<th scope="row">Google map</th>
    			<td>
					<?php
					$map1 = get_option('google_map');
					wp_editor( $map1, 'google_map', array(
        			'wpautop'       => true,
        			'media_buttons' => true,
        			'textarea_name' => 'google_map',
        			'textarea_rows' => 10,
        			'teeny'         => true
        			) );
					?>
				</td>
    		</tr>
    		
    	
			<tr valign="top">
    			<th scope="row">Facebook</th>
    			<td><input type="text" name="facebook" class="full" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
    		</tr>
    		<tr valign="top">
    			<th scope="row">Instagram</th>
				<td><input type="text" name="instagram" class="full" value="<?php echo esc_attr( get_option('instagram') ); ?>" /></td>
    		</tr>
    		<tr valign="top">
    			<th scope="row">Linkedin</th>
    			<td><input type="text" name="linkedin" class="full" value="<?php echo esc_attr( get_option('linkedin') ); ?>" /></td>
    		</tr>
			<tr valign="top">
    			<th scope="row">Twitter</th>
    			<td><input type="text" name="twitter" class="full" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
    		</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
<?php
	}
	add_theme_support('widgets');
function wp_custom_sidebar() {
    register_sidebar( array (
        'name' => __( 'Footer Important Links', 'wp' ),
        'id' => 'custom-side-bar',
        'description' => __( 'Blog Sidebar', 'wp' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
    ));
}
add_action( 'widgets_init', 'wp_custom_sidebar' );
?>