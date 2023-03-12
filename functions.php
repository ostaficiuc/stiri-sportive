<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
      	wp_enqueue_style( 'newsup-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), '1.2.4' );
		
    }
}




	function your_function() {	?>

			<script
				type="module"
				src="https://widgets.api-sports.io/football/1.1.8/widget.js">
			</script>

<?php }
	function your_function2() {	?>
			<script
				type="module"
				src="https://widgets.api-sports.io/2.0.3/widgets.js">
			</script>

<?php }

add_action( 'wp_footer', 'your_function' );



// function that runs when shortcode is called
function wpb_demo_shortcode($atts = [], $content = null, $tag = '') { 
	$wporg_atts = shortcode_atts(
		array(
			'league' => '39',
			
		), $atts, $tag
	);
	ob_start();?>
	<div id="wg-api-football-fixtures"
						data-host="v3.football.api-sports.io"
						data-refresh="3600"
		 				data-league="<?php echo $wporg_atts['league'];  ?>"
		 				data-season="2022"
						data-date="<?php echo date('Y-m-d');?>"
						data-key="48d25bc1b7b6f923560061db8664c9b6"
						data-theme=""
						data-show-errors="false"
						class="api_football_loader">
	</div> 
	<?php $html = ob_get_clean();
    return $html;
}
// register shortcode for live games
add_shortcode('football-short', 'wpb_demo_shortcode');?>



<?php function wpb_demo_shortcode2($atts2 = [], $content = null, $tag = '') { 
	$wporg_atts2 = shortcode_atts(
		array(
			'table' => '39',
			
		), $atts, $tag
	);
	ob_start();?>
			<div id="wg-api-football-standings"
			data-host="v3.football.api-sports.io"
			data-key="48d25bc1b7b6f923560061db8664c9b6"
			data-league="39"
			data-team=""
			data-season="2022"
			data-theme=""
			data-show-errors="false"
			data-show-logos="true"
			class="wg_loader">
		</div>
		

	<?php $html2 = ob_get_clean();
    return $html2;
}
// register shortcode for live standinds
add_shortcode('football-standings', 'wpb_demo_shortcode2');?>