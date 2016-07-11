<?php
/**
 * @version    1.0
 * @package    BL Elara
 * @author     Basiclab <support@icotheme.com>
 * @copyright  Copyright (C) 2015 Basiclab.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://icotheme.com
 */

//Require plugins
require_once get_template_directory () . '/class-tgm-plugin-activation.php';

function elara_register_required_plugins() {

    $plugins = array(
		array(
            'name'               => esc_html__('Mega Main Menu', 'bl-elara'),
            'slug'               => 'mega_main_menu',
			'source'             => get_template_directory() . '/plugins/mega_main_menu.zip',
            'required'           => true,
            'external_url'       => '',
        ),
		array(
            'name'               => esc_html__('Revolution Slider', 'bl-elara'),
            'slug'               => 'revslider',
			'source'             => get_template_directory() . '/plugins/revslider.zip',
            'required'           => true,
            'external_url'       => '',
        ),
		array(
            'name'               => esc_html__('Visual Composer', 'bl-elara'),
            'slug'               => 'js_composer',
            'source'             => get_template_directory() . '/plugins/js_composer.zip',
            'required'           => true,
            'external_url'       => '',
        ),
		array(
            'name'               => esc_html__('Redux Framework', 'bl-elara'),
            'slug'               => 'redux-framework',
            'required'           => true,
			'external_url'       => '',
        ),
		
        // Plugins from the WordPress Plugin Repository.
		array(
            'name'               => esc_html__('Shortcodes Ultimate', 'bl-elara'),
            'slug'               => 'shortcodes-ultimate',
            'required'           => true,
			'external_url'       => '',
        ),
        array(
            'name'      => esc_html__('Contact Form 7', 'bl-elara'),
            'slug'      => 'contact-form-7',
            'required'  => true,
			'external_url'       => '',
        ),
		array(
            'name'      => esc_html__('MailPoet Newsletters', 'bl-elara'),
            'slug'      => 'wysija-newsletters',
            'required'  => true,
			'external_url'       => '',
        ),
		array(
            'name'      	=> esc_html__('Projects', 'bl-elara'),
            'slug'      	=> 'projects-by-woothemes',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('TinyMCE Advanced', 'bl-elara'),
            'slug'      	=> 'tinymce-advanced',
            'required' 		=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('Widget Importer & Exporter', 'bl-elara'),
            'slug'      	=> 'widget-importer-exporter',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('WooCommerce', 'bl-elara'),
            'slug'      	=> 'woocommerce',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('YITH WooCommerce Compare', 'bl-elara'),
            'slug'      	=> 'yith-woocommerce-compare',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('YITH WooCommerce Wishlist', 'bl-elara'),
            'slug'     	 	=> 'yith-woocommerce-wishlist',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('YITH WooCommerce Zoom Magnifier', 'bl-elara'),
            'slug'      	=> 'yith-woocommerce-zoom-magnifier',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('Image Widget', 'bl-elara'),
            'slug'      	=> 'image-widget',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('Testimonials', 'bl-elara'),
            'slug'      	=> 'testimonials-by-woothemes',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'      	=> esc_html__('Display Widgets', 'bl-elara'),
            'slug'      	=> 'display-widgets',
            'required'  	=> true,
			'external_url'  => '',
        ),
		array(
            'name'               => esc_html__('VG WooCarousel', 'bl-elara'),
            'slug'               => 'vg-woocarousel',
            'required'           => true,
			'external_url'       => '',
        ),
		array(
            'name'               => esc_html__('VG PostCarousel', 'bl-elara'),
            'slug'               => 'vg-postcarousel',
            'required'           => true,
			'external_url'       => '',
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'bl-elara' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'bl-elara' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'bl-elara' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'bl-elara' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'bl-elara' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'bl-elara' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'bl-elara' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'bl-elara' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'bl-elara' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'bl-elara' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'bl-elara' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'elara_register_required_plugins' ); 

//Init the Redux Framework
if ( class_exists( 'ReduxFramework' ) && !isset( $redux_demo ) && file_exists( get_template_directory().'/theme-config.php' ) ) {
    require_once( get_template_directory().'/theme-config.php' );
}

//Add Woocommerce support
add_theme_support( 'woocommerce' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Override woocommerce widgets
function elara_override_woocommerce_widgets() {
	//Show mini cart on all pages
	if ( class_exists( 'WC_Widget_Cart' ) ) {
		unregister_widget( 'WC_Widget_Cart' ); 
		include_once( get_template_directory() . '/woocommerce/class-wc-widget-cart.php' );
		register_widget( 'Custom_WC_Widget_Cart' );
	}
}
add_action( 'widgets_init', 'elara_override_woocommerce_widgets', 15 );

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
function elara_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	
	<span class="mcart-number"><?php echo WC()->cart->cart_contents_count; ?></span>
	
	<?php
	$fragments['span.mcart-number'] = ob_get_clean();
	
	return $fragments;
} 
add_filter( 'woocommerce_add_to_cart_fragments', 'elara_woocommerce_header_add_to_cart_fragment' );

//Change price html
function elara_woo_price_html( $price,$product ){
	// return $product->price;
	if ( $product->price > 0 ) {
		if ( $product->price && isset( $product->regular_price ) && ( $product->price!=$product->regular_price )) {
			$from = $product->regular_price;
			$to = $product->price;
			
			return '<span class="old-price">'. ( ( is_numeric( $from ) ) ? woocommerce_price( $from ) : $from ) .'</span><span class="special-price">'.( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) .'</span>';
		} else {
			$to = $product->price;
			
			return '<span class="special-price">' . ( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) . '</span>';
		}
	} else {
		return '<span class="special-price">0</span>';
	}
}
add_filter( 'woocommerce_get_price_html', 'elara_woo_price_html', 100, 2 );

// Add image to category description
function elara_woocommerce_category_image() {
	if ( is_product_category() ){
		global $wp_query;
		
		$cat = $wp_query->get_queried_object();
		$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
		$image = wp_get_attachment_url( $thumbnail_id );
		
		if ( $image ) {
			echo '<p class="category-image-desc"><img src="' . esc_url($image) . '" alt="" /></p>';
		}
	}
}
add_action( 'woocommerce_archive_description', 'elara_woocommerce_category_image', 2 );

function elara_get_project_thumbnail($size = 'project-single') {
	global $post;
	if ( has_post_thumbnail() )
		return get_the_post_thumbnail( $post->ID, $size );
}
add_action('projects_get_project_thumbnail','elara_get_project_thumbnail', 20);

// Change products per page
function elara_woo_change_per_page() {
	global $elara_options;
	
	return $elara_options['product_per_page'];
}
add_filter( 'loop_shop_per_page', 'elara_woo_change_per_page', 20 );

//Limit number of products by shortcode [products]
//add_filter( 'woocommerce_shortcode_products_query', 'elara_woocommerce_shortcode_limit' );
function elara_woocommerce_shortcode_limit( $args ) {
	global $elara_options, $elara_productsfound;
	
	if(isset($elara_options['shortcode_limit']) && $args['posts_per_page']==-1) {
		$args['posts_per_page'] = $elara_options['shortcode_limit'];
	}
	
	$elara_productsfound = new WP_Query($args);
	$elara_productsfound = $elara_productsfound->post_count;
	
	return $args;
}

//Change number of related products on product page. Set your own value for 'posts_per_page'
function elara_woo_related_products_limit( $args ) {
	global $product, $elara_options;
	$args['posts_per_page'] = $elara_options['related_amount'];

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'elara_woo_related_products_limit' );

//move message to top
remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
add_action( 'woocommerce_show_message', 'wc_print_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 5 );

//Single product organize
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_show_related_products', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

//remove rating
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

//Display social sharing on product page
function elara_woocommerce_social_share(){
	global $elara_options;
?>
	<div class="share_buttons">
		<?php if ($elara_options['share_code']!='') {
			echo wp_kses($elara_options['share_code'], array(
				'div' => array(
					'class' => array()
				),
				'span' => array(
					'class' => array(),
					'displayText' => array()
				),
			));
		} ?>
	</div>
<?php
}
add_action( 'woocommerce_share', 'elara_woocommerce_social_share', 35 );

//Display stock status on product page
function elara_product_stock_status(){
	global $product;
	?>
	<div class="stock-status">
		<span class="availability"><?php esc_html_e('Availability: ', 'bl-elara');?></span>
		<?php if($product->is_in_stock()){ ?>
			<span class="color"><?php esc_html_e(' In stock ', 'bl-elara');?></span>
		<?php } else { ?>
			<span class="color"><?php esc_html_e(' Out of stock ', 'bl-elara');?></span>
		<?php } ?>
	</div>
	<?php
}
add_action( 'woocommerce_single_product_summary', 'elara_product_stock_status', 10 ); 
 
//Show countdown on product page
function elara_product_countdown(){
	global $product;
	?>
	<?php
	$countdown = false;
	$sale_end = get_post_meta( $product->id, '_sale_price_dates_to', true );
	/* simple product */
	if($sale_end){
		$countdown = true;
		$sale_end = date('Y/m/d', (int)$sale_end);
		?>
		<div class="timer-view"><div class="countbox hastime" data-time="<?php echo esc_attr($sale_end); ?>"></div></div>
	<?php } ?>
	<?php /* variable product */
	if($product->children){
		$vsale_end = array();
		
		foreach($product->children as $pvariable){
			$vsale_end[] = (int)get_post_meta( $pvariable, '_sale_price_dates_to', true );
			
			if( get_post_meta( $pvariable, '_sale_price_dates_to', true ) ){
				$countdown = true;
			}
		}
		if($countdown){
			/* get the latest time */
			$vsale_end_date = max($vsale_end);
			$vsale_end_date = date('Y/m/d', $vsale_end_date);
			?>
			<div class="timer-view"><div class="countbox hastime" data-time="<?php echo esc_attr($vsale_end_date); ?>"></div></div>
			<?php
		}
	}
	?>
<?php
}
add_action( 'woocommerce_single_product_summary', 'elara_product_countdown', 35 ); 
 
//Show buttons wishlist, compare, email on product page
function elara_product_buttons(){
	global $product;
	?>
	<div class="actions">
		<div class="action-buttons">
			<div class="add-to-links">
				<?php if(class_exists('YITH_Woocompare')) {
					echo do_shortcode('[yith_compare_button]');
				} ?>
				<?php if (class_exists('YITH_WCWL')) {
					echo preg_replace("/<img[^>]+\>/i", " ", do_shortcode('[yith_wcwl_add_to_wishlist]'));
				} ?>
			</div>
			<?php echo '<div class="sharefriend"><a href="mailto: yourfriend@domain.com?Subject=Checkout this product: '.$product->get_title().'">'.esc_html__( 'Email your friend', 'bl-elara' ).'</a></div>'; ?>
		</div>
	</div>
	<?php
}
//add_action( 'woocommerce_single_product_summary', 'elara_product_buttons', 30 );


//Project organize
remove_action( 'projects_before_single_project_summary', 'projects_template_single_title', 10 );
add_action( 'projects_single_project_summary', 'projects_template_single_title', 5 );
remove_action( 'projects_before_single_project_summary', 'projects_template_single_short_description', 20 );
remove_action( 'projects_before_single_project_summary', 'projects_template_single_gallery', 40 );
add_action( 'projects_single_project_gallery', 'projects_template_single_gallery', 40 );
//projects list
remove_action( 'projects_loop_item', 'projects_template_loop_project_title', 20 ); 
 
//Change search form
function elara_search_form( $form ) {
	if(get_search_query()!=''){
		$search_str = get_search_query();
	} else {
		$search_str = esc_html__( 'Search...', 'bl-elara' );
	}
	
	$form = '<form method="get" id="blogsearchform" class="searchform" action="' . esc_url(home_url( '/' ) ). '" >
	<div class="form-input">
		<input class="input_text" type="text" value="'.esc_attr($search_str).'" name="s" id="search_input" />
		<button class="button" type="submit" id="blogsearchsubmit"><i class="fa fa-search"></i></button>
		<input type="hidden" name="post_type" value="post" />
		</div>
	</form>';
	$form .= '<script type="text/javascript">';
	$form .= 'jQuery(document).ready(function(){
		jQuery("#search_input").focus(function(){
			if(jQuery(this).val()=="'.esc_html__( 'Search...', 'bl-elara' ).'"){
				jQuery(this).val("");
			}
		});
		jQuery("#search_input").focusout(function(){
			if(jQuery(this).val()==""){
				jQuery(this).val("'.esc_html__( 'Search...', 'bl-elara' ).'");
			}
		});
		jQuery("#blogsearchsubmit").click(function(){
			if(jQuery("#search_input").val()=="'.esc_html__( 'Search...', 'bl-elara' ).'" || jQuery("#search_input").val()==""){
				jQuery("#search_input").focus();
				return false;
			}
		});
	});';
	$form .= '</script>';
	return $form;
}
add_filter( 'get_search_form', 'elara_search_form' ); 
 
//Change woocommerce search form
function elara_woo_search_form( $form ) {
	global $wpdb;
	
	if(get_search_query()!=''){
		$search_str = get_search_query();
	} else {
		$search_str = esc_html__( 'Search entire store here...', 'bl-elara' );
	}
	
	$form = '<form method="get" id="searchform" action="'.esc_url( home_url( '/'  ) ).'">';
		$form .= '<div>';
			$form .= '<input type="text" value="'.esc_attr($search_str).'" name="s" id="ws" placeholder="" />';
			$form .= '<button class="btn btn-primary" type="submit" id="wsearchsubmit"><i class="fa fa-search"></i></button>';
			$form .= '<input type="hidden" name="post_type" value="product" />';
		$form .= '</div>';
	$form .= '</form>';
	$form .= '<script type="text/javascript">';
	$form .= 'jQuery(document).ready(function(){
		jQuery("#ws").focus(function(){
			if(jQuery(this).val()=="'.esc_html__( 'Search entire store here...', 'bl-elara' ).'"){
				jQuery(this).val("");
			}
		});
		jQuery("#ws").focusout(function(){
			if(jQuery(this).val()==""){
				jQuery(this).val("'.esc_html__( 'Search entire store here...', 'bl-elara' ).'");
			}
		});
		jQuery("#wsearchsubmit").click(function(){
			if(jQuery("#ws").val()=="'.esc_html__( 'Search entire store here...', 'bl-elara' ).'" || jQuery("#ws").val()==""){
				jQuery("#ws").focus();
				return false;
			}
		});
	});';
	$form .= '</script>';
	return $form;
}
add_filter( 'get_product_search_form', 'elara_woo_search_form' ); 
 
//Add breadcrumbs
function elara_breadcrumb() {
	global $post;
	echo '<div class="breadcrumbs">';
    if (!is_home()) {
        echo '<a href="';
        echo esc_url( home_url( '/'  ) );
        echo '">';
        echo esc_html__('Home', 'bl-elara');
        echo '</a><span class="separator">/</span>';
        if (is_category() || is_single()) {
            the_category(' <span class="separator">/</span> ');
            if (is_single()) {
                echo '<span class="separator">/</span>';
                the_title();
            }
        } elseif (is_page()) {
            if($post->post_parent){
				$anc = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<a href="'.esc_url(get_permalink($ancestor)).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a><span class="separator">/</span>';
				}
				echo $output;
				echo '<span title="'.$title.'"> '.$title.'</span>';
			} else {
				echo '<span> '.get_the_title().'</span>';
			}
        }
		elseif (is_tag()) {single_tag_title();}
		elseif (is_day()) {echo "<span>". esc_html__('Archive for', 'bl-elara'); the_time('F jS, Y'); echo'</span>';}
		elseif (is_month()) {echo "<span>". esc_html__('Archive for', 'bl-elara'); the_time('F, Y'); echo'</span>';}
		elseif (is_year()) {echo "<span>". esc_html__('Archive for', 'bl-elara'); the_time('Y'); echo'</span>';}
		elseif (is_author()) {echo "<span>". esc_html__('Author Archive', 'bl-elara').'</span>';}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<span>". esc_html__('Blog Archives', 'bl-elara').'</span>';}
		elseif (is_search()) {echo "<span>". esc_html__('Search Results', 'bl-elara').'</span>';}
	} else {
		echo '<a href="';
        echo esc_url( home_url( '/'  ) );
        echo '">';
        echo esc_html__('Home', 'bl-elara');
        echo '</a><span class="separator">/</span>';
		esc_html_e('Blog', 'bl-elara');
	}
	echo '</div>';
}
function elara_limitStringByWord ($string, $maxlength, $suffix = '') {

	if(function_exists( 'mb_strlen' )) {
		// use multibyte functions by Iysov
		if(mb_strlen( $string )<=$maxlength) return $string;
		$string = mb_substr( $string, 0, $maxlength );
		$index = mb_strrpos( $string, ' ' );
		if($index === FALSE) {
			return $string;
		} else {
			return mb_substr( $string, 0, $index ).$suffix;
		}
	} else { // original code here
		if(strlen( $string )<=$maxlength) return $string;
		$string = substr( $string, 0, $maxlength );
		$index = strrpos( $string, ' ' );
		if($index === FALSE) {
			return $string;
		} else {
			return substr( $string, 0, $index ).$suffix;
		}
	}
} 
// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 625; 


function elara_setup() {
	/*
	 * Makes elara Themes available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Basiclab, use a find and replace
	 * to change 'bl-elara' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('bl-elara', get_template_directory() . '/languages');

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('image', 'gallery', 'video', 'audio'));

	// Register menus
	register_nav_menu('primary', esc_html__('Primary Menu', 'bl-elara'));
	register_nav_menu('top-menu', esc_html__('Top Menu', 'bl-elara'));
	register_nav_menu('mobilemenu', esc_html__('Mobile Menu', 'bl-elara'));

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support('custom-background', array(
		'default-color' => 'e6e6e6',
	));
	add_theme_support( "custom-header", array(
		'default-color' => '',
	));
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');
	
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');

	set_post_thumbnail_size(1170, 9999); // Unlimited height, soft crop
	add_image_size('elara-category-thumb', 870, 580, true); // (cropped)
	add_image_size('elara-post-thumb', 300, 200, true); // (cropped)
	add_image_size('elara-post-thumbwide', 570, 352, true); // (cropped)
}
add_action('after_setup_theme', 'elara_setup'); 
 
function elara_get_font_url() {
	$font_url = '';

	/*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bl-elara' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat|Open Sans:300,400,600,700,800&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
 
function elara_scripts_styles() {
	global $wp_styles, $wp_scripts, $elara_options;
	
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	*/
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	if ( !is_admin()) {
		// Add Bootstrap JavaScript
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0', true );
	
		// Add jQuery Cookie
		wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '1.4.1', true);		
		
		// Add Fancybox
		wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array('jquery'), '2.1.5', true);
		wp_enqueue_style('jquery-fancybox-css', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css', array(), '2.1.5');
		wp_enqueue_script('jquery-fancybox-buttons', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.js', array('jquery'), '1.0.5', true);
		wp_enqueue_style('jquery-fancybox-buttons', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.css', array(), '1.0.5');
	
		//Superfish
		wp_enqueue_script( 'elara-superfish-js', get_template_directory_uri() . '/js/superfish/superfish.min.js', array('jquery'), '1.3.15', true );
	
		//Add Shuffle js
		wp_enqueue_script( 'elara-modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.min.js', array('jquery'), '2.6.2', true );
		wp_enqueue_script( 'elara-shuffle-js', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array('jquery'), '3.0.0', true );
		
		// Add owl.carousel files
		wp_enqueue_script('owl.carousel', 	get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'));
		wp_enqueue_style('owl.carousel', 	get_template_directory_uri() . '/css/owl.carousel.css');
		wp_enqueue_style('owl.theme', 		get_template_directory_uri() . '/css/owl.theme.css');
		
		// Add jQuery countdown file
		wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery'), '2.0.4', true );
		
		// Add theme.js file
		wp_enqueue_script( 'elara-theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '20140826', true );
	}
	
	$font_url = elara_get_font_url();
	if ( ! empty( $font_url ) )
		wp_enqueue_style( 'elara-fonts', esc_url_raw( $font_url ), array(), null );
	
	if ( !is_admin()) {
		// Loads our main stylesheet.
		wp_enqueue_style( 'elara-style', get_stylesheet_uri() );

		// Load fontawesome css
		wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0' );
		
		// Load bootstrap css
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2.0' );
	}
	// Compile Less to CSS
	
	// get Preset Color Option
	$presetopt = elara_get_preset();
	// end block
	
	if ($elara_options['bodyfont']['font-family']) {
		$bodyfont = $elara_options['bodyfont']['font-family'];
	} else {
		$bodyfont = 'Montserrat';
	}
	if ($elara_options['headingfont']['font-family']) {
		$headingfont = $elara_options['headingfont']['font-family'];
	} else {
		$headingfont = 'Montserrat';
	}
	if($elara_options['enable_less']){
		$themevariables = array(
			'heading_font'=> $headingfont,
			'body_font'=> $bodyfont,
			'heading_color'=> $elara_options['headingfont']['color'],
			'text_color'=> $elara_options['bodyfont']['color'],
			'primary_color' => $elara_options['primary_color'],
			'rate_color' => $elara_options['rate_color'],
			'price_color' => $elara_options['price_color'],
		);
		switch ($presetopt) {
			case 2:
				$themevariables['primary_color'] = $elara_options['primary2_color'];
				$themevariables['rate_color'] = $elara_options['rate2_color'];
				$themevariables['price_color'] = $elara_options['price2_color'];
			break;
			case 3:
				$themevariables['primary_color'] = $elara_options['primary3_color'];
				$themevariables['rate_color'] = $elara_options['rate3_color'];
				$themevariables['price_color'] = $elara_options['price3_color'];
			break;
			case 4:
				$themevariables['primary_color'] = $elara_options['primary4_color'];
				$themevariables['rate_color'] = $elara_options['rate4_color'];
				$themevariables['price_color'] = $elara_options['price4_color'];
			break;
		}
		if( function_exists('compileLessFile') ){
			compileLessFile('theme.less', 'theme'.$presetopt.'.css', $themevariables);
			compileLessFile('compare.less', 'compare'.$presetopt.'.css', $themevariables);
			compileLessFile('ie.less', 'ie'.$presetopt.'.css', $themevariables);
		}
	}
	
	if ( !is_admin()) {
		if( function_exists('compileLessFile') ){
			// Load main theme css style
			wp_enqueue_style( 'elara-css', get_template_directory_uri() . '/css/theme'.$presetopt.'.css', array(), '1.0.0' );
			//Compare CSS
			wp_enqueue_style( 'elara-css', get_template_directory_uri() . '/css/compare'.$presetopt.'.css', array(), '1.0.0' );
			// Loads the Internet Explorer specific stylesheet.
			wp_enqueue_style( 'elara-ie', get_template_directory_uri() . '/css/ie'.$presetopt.'.css', array( 'elara-style' ), '20152907' );
		} else {
			// Load main theme css style
			wp_enqueue_style( 'elara-css', get_template_directory_uri() . '/css/theme1.css', array(), '1.0.0' );
			//Compare CSS
			wp_enqueue_style( 'elara-css', get_template_directory_uri() . '/css/compare1.css', array(), '1.0.0' );
			// Loads the Internet Explorer specific stylesheet.
			wp_enqueue_style( 'elara-ie', get_template_directory_uri() . '/css/ie1.css', array( 'elara-style' ), '20152907' );
		}
		$wp_styles->add_data( 'elara-ie', 'conditional', 'lte IE 9' );
	}
	if($elara_options['enable_sswitcher']){
		// Add styleswitcher.js file
		wp_enqueue_script( 'elara-styleswitcher-js', get_template_directory_uri() . '/js/styleswitcher.js', array(), '20140826', true );
		// Load styleswitcher css style
		wp_enqueue_style( 'elara-styleswitcher-css', get_template_directory_uri() . '/css/styleswitcher.css', array(), '1.0.0' );
	}
	if ( is_rtl() ) {
		wp_enqueue_style( 'elara-rtl', get_template_directory_uri() . '/rtl.css', array(), '1.0.0' );
	}
}
add_action( 'wp_enqueue_scripts', 'elara_scripts_styles' );

//Include
if (!class_exists('elara_widgets') && file_exists(get_template_directory().'/include/vinawidgets.php')) {
    require_once(get_template_directory().'/include/vinawidgets.php');
}
if (file_exists(get_template_directory().'/include/styleswitcher.php')) {
    require_once(get_template_directory().'/include/styleswitcher.php');
}
if (file_exists(get_template_directory().'/include/wooajax.php')) {
    require_once(get_template_directory().'/include/wooajax.php');
}
if (file_exists(get_template_directory().'/include/shortcodes.php')) {
    require_once(get_template_directory().'/include/shortcodes.php');
}
 
function elara_mce_css( $mce_css ) {
	$font_url = elara_get_font_url();

	if ( empty( $font_url ) )
		return $mce_css;

	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $font_url ) );

	return $mce_css;
}
add_filter( 'mce_css', 'elara_mce_css' ); 

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Basiclab 1.0
 */
function elara_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'elara_page_menu_args' );

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Basiclab 1.0
 */
function elara_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Pages Sidebar', 'bl-elara'),
		'id' => 'sidebar-page',
		'description' => esc_html__('Sidebar on content pages', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Blog Sidebar', 'bl-elara'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Sidebar on blog page', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Category Sidebar', 'bl-elara'),
		'id' => 'sidebar-category',
		'description' => esc_html__('Sidebar on product category page', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
		'before' => '<div class="widget-content">',
		'after' => '</div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Product Sidebar', 'bl-elara'),
		'id' => 'sidebar-product',
		'description' => esc_html__('Sidebar on product page', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 1', 'bl-elara'),
		'id' => 'footer-1',
		'class' => 'footer-1',
		'description' => esc_html__('Widget on footer 1', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 2', 'bl-elara'),
		'id' => 'footer-2',
		'class' => 'footer-2',
		'description' => esc_html__('Widget on footer 2', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 3', 'bl-elara'),
		'id' => 'footer-3',
		'class' => 'footer-3',
		'description' => esc_html__('Widget on footer 3', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 4', 'bl-elara'),
		'id' => 'footer-4',
		'class' => 'footer-4',
		'description' => esc_html__('Widget on footer 4', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 5', 'bl-elara'),
		'id' => 'footer-5',
		'class' => 'footer-5',
		'description' => esc_html__('Widget on footer 5', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 1 Home 4', 'bl-elara'),
		'id' => 'footer4-1',
		'class' => 'footer4-1',
		'description' => esc_html__('Widget on footer 1 Home 4', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 2 Home 4', 'bl-elara'),
		'id' => 'footer4-2',
		'class' => 'footer4-2',
		'description' => esc_html__('Widget on footer 2 Home 4', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 1 Home 5', 'bl-elara'),
		'id' => 'footer5-1',
		'class' => 'footer5-1',
		'description' => esc_html__('Widget on footer 1 Home 5', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 2 Home 5', 'bl-elara'),
		'id' => 'footer5-2',
		'class' => 'footer5-2',
		'description' => esc_html__('Widget on footer 2 Home 5', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 3 Home 5', 'bl-elara'),
		'id' => 'footer5-3',
		'class' => 'footer5-3',
		'description' => esc_html__('Widget on footer 3 Home 5', 'bl-elara'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-static-title"><h4><span>',
		'after_title' => '</span><span class="mobile-button visible-xs"></span></h4></div>',
	));
}
add_action('widgets_init', 'elara_widgets_init');

if (! function_exists('elara_content_nav')) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Basiclab 1.0
 */
function elara_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr($html_id); ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php esc_html_e( 'Post navigation', 'bl-elara' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link(wp_kses(__('<span class="meta-nav">&larr;</span> Older posts', 'bl-elara'), array('span' => array()))); ?></div>
			<div class="nav-next"><?php previous_posts_link(wp_kses(__('Newer posts <span class="meta-nav">&rarr;</span>', 'bl-elara'), array('span' => array()))); ?></div>
		</nav><!-- #<?php echo esc_attr($html_id); ?> .navigation -->
	<?php endif;
}
endif;

if(! function_exists('elara_pagination')) :
/* Pagination */
function elara_pagination() {
	global $wp_query;

	$big = 999999999; // need an unlikely integer
	
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'prev_text'    => wp_kses(__('<i class="fa fa-chevron-left"></i>', 'bl-elara'), array('i' => array())),
		'next_text'    => wp_kses(__('<i class="fa fa-chevron-right"></i>', 'bl-elara'), array('i' => array())),
	));
}
endif;

if(! function_exists('elara_entry_meta')) :
function elara_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list(esc_html__(', ', 'bl-elara'));

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list('', esc_html__(', ', 'bl-elara'));
	
	$date = sprintf('<time class="entry-date" datetime="%3$s">%4$s</time>',
		esc_url(get_permalink()),
		esc_attr(get_the_time()),
		esc_attr(get_the_date('c')),
		esc_html(get_the_date())
	);

	$author = sprintf('<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url(get_author_posts_url(get_the_author_meta('ID'))),
		esc_attr(sprintf(esc_html__('View all posts by %s', 'bl-elara'), get_the_author())),
		get_the_author()
	);
	
	$num_comments =(int)get_comments_number();
	$write_comments = '';
	if(comments_open()) {
		if($num_comments == 0) {
			$comments = esc_html__('0 comments', 'bl-elara');
		} elseif($num_comments > 1) {
			$comments = $num_comments . esc_html__(' comments', 'bl-elara');
		} else {
			$comments = esc_html__('1 comment', 'bl-elara');
		}
		$write_comments = '<a href="' . esc_url(get_comments_link()) .'">'. $comments.'</a>';
	}

	// Translators: 1 is author's name, 2 is date, 3 is the tags and 4 is comments.

	$utility_text = wp_kses(__('Posted by %1$s<span class="separator">/</span>%2$s<span class="separator">/</span>%3$s<span class="tagslist"><span class="separator">/</span>%4$s</span>', 'bl-elara'), array('span' => array()));
	
	printf($utility_text, $author, $categories_list, $write_comments, $tag_list);
}
endif;

function elara_entry_meta_small() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list(esc_html__(', ', 'bl-elara'));

	$author = sprintf('<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url(get_author_posts_url(get_the_author_meta('ID'))),
		esc_attr(sprintf(esc_html__('View all posts by %s', 'bl-elara'), get_the_author())),
		get_the_author()
	);
	
	$num_comments =(int)get_comments_number();
	$write_comments = '';
	if(comments_open()) {
		if($num_comments == 0) {
			$comments = esc_html__('0 Comments', 'bl-elara');
		} elseif($num_comments > 1) {
			$comments = $num_comments . esc_html__(' Comments', 'bl-elara');
		} else {
			$comments = esc_html__('1 Comment', 'bl-elara');
		}
		$write_comments = '<a href="' . esc_url(get_comments_link()) .'">'. $comments.'</a>';
	}
	
	$utility_text = wp_kses(__('Posted by %1$s<span class="separator">/</span>%2$s<span class="separator">/</span>%3$s', 'bl-elara'), array('span' => array()));

	printf($utility_text, $author, $categories_list, $write_comments);
}

function elara_add_meta_box() {

	$screens = array('post');

	foreach($screens as $screen) {

		add_meta_box(
			'elara_post_intro_section',
			esc_html__('Post featured content', 'bl-elara'),
			'elara_meta_box_callback',
			$screen
		);
	}
}
add_action('add_meta_boxes', 'elara_add_meta_box');

function elara_meta_box_callback($post) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field('elara_meta_box', 'elara_meta_box_nonce');

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta($post->ID, '_elara_meta_value_key', true);

	echo '<label for="elara_post_intro">';
	esc_html_e('This content will be used to replace the featured image, use shortcode here', 'bl-elara');
	echo '</label><br />';
	//echo '<textarea id="elara_post_intro" name="elara_post_intro" rows="5" cols="50" />' . esc_attr($value) . '</textarea>';
	wp_editor($value, 'elara_post_intro', $settings = array());
	
	
}

function elara_save_meta_box_data($post_id) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if(! isset($_POST['elara_meta_box_nonce'])) {
		return;
	}

	// Verify that the nonce is valid.
	if(! wp_verify_nonce($_POST['elara_meta_box_nonce'], 'elara_meta_box')) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Check the user's permissions.
	if(isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

		if(! current_user_can('edit_page', $post_id)) {
			return;
		}

	} else {

		if(! current_user_can('edit_post', $post_id)) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if(! isset($_POST['elara_post_intro'])) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field($_POST['elara_post_intro']);

	// Update the meta field in the database.
	update_post_meta($post_id, '_elara_meta_value_key', $my_data);
}
add_action('save_post', 'elara_save_meta_box_data');

if(! function_exists('elara_comment')) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own elara_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Basiclab 1.0
 */
function elara_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	switch($comment->comment_type) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php esc_html_e('Pingback:', 'bl-elara'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(esc_html__('(Edit)', 'bl-elara'), '<span class="edit-link">', '</span>'); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-avatar">
				<?php echo get_avatar($comment, 50); ?>
			</div>
			<div class="comment-info">
				<header class="comment-meta comment-author vcard">
					<?php
						
						printf('<cite><b class="fn">%1$s</b> %2$s</cite>',
							get_comment_author_link(),
							// If current post author is also comment author, make it known visually.
							($comment->user_id === $post->post_author) ? '<span>' . esc_html__('Post author', 'bl-elara') . '</span>' : ''
						);
						printf('<time datetime="%1$s">%2$s</time>',
							get_comment_time('c'),
							/* translators: 1: date, 2: time */
							sprintf(esc_html__('%1$s at %2$s', 'bl-elara'), get_comment_date(), get_comment_time())
						);
					?>
					<div class="reply">
						<?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__('Reply', 'bl-elara'), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
					</div><!-- .reply -->
				</header><!-- .comment-meta -->
				<?php if('0' == $comment->comment_approved) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'bl-elara'); ?></p>
				<?php endif; ?>

				<section class="comment-content comment">
					<?php comment_text(); ?>
					<?php edit_comment_link(esc_html__('Edit', 'bl-elara'), '<p class="edit-link">', '</p>'); ?>
				</section><!-- .comment-content -->
			</div>
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;
if(! function_exists('before_comment_fields') &&  ! function_exists('after_comment_fields')) :
//Change comment form
function elara_before_comment_fields() {
	echo '<div class="comment-input">';
}
add_action('comment_form_before_fields', 'elara_before_comment_fields');

function elara_after_comment_fields() {
	echo '</div>';
}
add_action('comment_form_after_fields', 'elara_after_comment_fields');

endif; 
 
function elara_customize_register($wp_customize) {
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}
add_action('customize_register', 'elara_customize_register');

/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Basiclab 1.0
 */
 
add_action('wp_enqueue_scripts', 'wcqi_enqueue_polyfill');
function wcqi_enqueue_polyfill() {
    wp_enqueue_script('wcqi-number-polyfill');
}

// Remove Redux Ads
function my_custom_admin_styles() {
?>
<style type="text/css">
.rAds {
	display: none !important;
}
</style>
<?php
}
add_action('admin_head', 'my_custom_admin_styles');

/* Remove Redux Demo Link */
function removeDemoModeLink()
{
    if(class_exists('ReduxFrameworkPlugin')) {
        remove_filter('plugin_row_meta', array(ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2);
    }
    if(class_exists('ReduxFrameworkPlugin')) {
        remove_action('admin_notices', array(ReduxFrameworkPlugin::get_instance(), 'admin_notices'));    
    }
}
add_action('init', 'removeDemoModeLink');

// add specific class
function elara_add_query_vars_filter($vars){
	$vars[] = "ilayout";
	$vars[] = "preset";
	return $vars;
}
add_filter('query_vars', 'elara_add_query_vars_filter');

// Get value from URL and set Cookie, Class Subffix
function elara_body_class($classes)
{	
	global $elara_options;
	
	// Set Class Layout for Body Tag
	$classes[] = elara_get_layout();
	
	// Set Class Preset Color for Body Tag
	$classes[] = "preset-" . elara_get_preset();
	
	return $classes;
}
add_filter('body_class', 'elara_body_class');

// Override get_header function
function elara_get_header()
{
	// Set Cookie for Layout and Preset Color
	elara_set_layout_preset_color();
	
	// Reset Layout and Preset Color
	elara_reset_layout_preset_color();
	
	// Get Header Name
	$header = elara_get_layout();
	
	get_header($header);	
}

// Override get_footer function
function elara_get_footer()
{
	// Get Footer Name
	$footer = elara_get_layout();
	
	get_footer($footer);	
}

//  get Layout
function elara_get_layout()
{
	global $elara_options;
	
	$ilayout = get_query_var('ilayout', '');
	if(!empty($ilayout)) {
		$layout = $ilayout;
	}
	else {
		$pageLayout = isset($_COOKIE['page-layout']) ? $_COOKIE['page-layout'] : "";
		$layout     = (!empty($pageLayout)) ? $pageLayout : $elara_options['page_layout'];
	}
	
	return $layout;
}

// get Preset Color
function elara_get_preset()
{
	global $elara_options;
	
	$preset = get_query_var('preset', '');
	if(!empty($preset)) {
		$presetColor = $preset;
	}
	else {
		$presetColor = isset($_COOKIE['preset-color']) ? $_COOKIE['preset-color'] : "";
		$presetColor = ((!empty($presetColor)) ? $presetColor : $elara_options['preset_option']);
	}
	
	return $presetColor;
}

// set Cookie for Layout and Preset Color
function elara_set_layout_preset_color()
{
	// Set Layout Style
	$ilayout = get_query_var('ilayout', '');
	if(!empty($ilayout)) {
		setcookie('page-layout', $ilayout, strtotime('+1 day'), '/');
	}
	
	// Set Preset Color
	$preset = get_query_var('preset', '');
	if(!empty($preset)) {
		setcookie('preset-color', $preset, strtotime('+1 day'), '/');
	}
	
	return true;
}

// reset Layout Option and Preset Color
function elara_reset_layout_preset_color()
{
	global $elara_options;
	
	$requestURI = $_SERVER['REQUEST_URI'];
	$homeURL	= home_url('/');
	$isHomePage = strpos($homeURL, $requestURI);
	
	if($requestURI == '/' || $isHomePage !== false) 
	{
		$pageLayout  = isset($_COOKIE['page-layout']) ? $_COOKIE['page-layout'] : "";
		$presetColor = isset($_COOKIE['preset-color']) ? $_COOKIE['preset-color'] : "";
		if($pageLayout != $elara_options['page_layout'] 
		|| $presetColor != $elara_options['preset_option']) {
			setcookie('page-layout', $elara_options['page_layout'], strtotime('+1 day'), '/');
			setcookie('preset-color', $elara_options['preset_option'], strtotime('+1 day'), '/');
			wp_redirect(home_url());
			exit;
		}
	}
}
add_action('init', 'elara_reset_layout_preset_color');

function elara_get_global_variables($variable = 'elara_options')
{
	global $woocommerce, $elara_options, $elara_productsfound, $product, $elara_productrows, $elara_secondimage, $woocommerce_loop, $projects_loop, $projects, $project, $post, $elara_projectrows, $elara_projectsfound, $wpdb, $wp_query, $is_IE, $elara_columns;
	
	switch($variable)
	{
		case "elara_options":
			return $elara_options;
		break;
		case "woocommerce":
			return $woocommerce;
		break;	
		case "elara_productsfound":
			return $elara_productsfound;
		break;	
		case "product":
			return $product;
		break;	
		case "elara_productrows":
			return $elara_productrows;
		break;
		case "elara_secondimage":
			return $elara_secondimage;
		break;
		case "elara_columns":
			return $elara_columns;
		break;
		case "woocommerce_loop":
			return $woocommerce_loop;
		break;	
		case "projects_loop":
			return $projects_loop;
		break;
		case "projects":
			return $projects;
		break;
		case "project":
			return $project;
		break;		
		case "post":
			return $post;
		break;	
		case "elara_projectrows":
			return $elara_projectrows;
		break;	
		case "elara_projectsfound":
			return $elara_projectsfound;
		break;	
		case "wpdb":
			return $wpdb;
		break;		
		case "wp_query":
			return $wp_query;
		break;	
		case "is_IE":
			return $is_IE;
		break;
	}
	return false;
}