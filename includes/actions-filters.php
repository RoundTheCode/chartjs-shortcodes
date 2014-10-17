<?php

/*  Include the styling for the help tab in the admin
*/

function chartjs_shortcodes_styles_all() {
    wp_register_style( 'chartjs-shortcodes-help-all', plugins_url( 'chartjs-shortcodes/includes/help/css/chartjs-shortcodes-help-all.css' ) );
    wp_enqueue_style( 'chartjs-shortcodes-help-all' );
}

add_action( 'admin_enqueue_scripts', 'chartjs_shortcodes_styles_all' );


function chartjs_shortcodes_help_styles() {
    $screen = get_current_screen(); 
    if($screen->parent_base != "gf_edit_forms") {
        wp_register_style( 'chartjs-font', plugins_url( 'chartjs-shortcodes/includes/help/chartjs-font.css' ) );
        wp_register_style( 'chartjs-shortcodes-help', plugins_url( 'chartjs-shortcodes/includes/help/css/chartjs-shortcodes-help.css' ) );
        wp_register_style( 'bootstrap-modal', plugins_url( 'chartjs-shortcodes/includes/help/css/bootstrap-modal.css' ) );
        wp_register_script( 'bootstrap', plugins_url( 'chartjs-shortcodes/includes/help/js/bootstrap.min.js' ) );
        wp_enqueue_style( 'chartjs-shortcodes-help' );
        wp_enqueue_style( 'chartjs-modal' );
        wp_enqueue_style( 'chartjs-font' );
        wp_enqueue_script( 'bootstrap' );
    }

}
add_action( 'media_buttons', 'chartjs_shortcodes_help_styles' );

add_filter('the_content', 'chartjs_fix_shortcodes');

//action to add a custom button to the content editor
function add_chartjs_button() {
    $screen = get_current_screen(); 
    if($screen->parent_base != "gf_edit_forms") {
        //the id of the container I want to show in the popup
        $popup_id = 'chartjs-shortcodes-help';

        //our popup's title
        $title = 'Chart.js Shortcodes Help';

        //append the icon
        printf(
        '<a data-toggle="modal" data-target="#chartjs-shortcodes-help" title="%2$s" href="%3$s" class="%4$s"><span class="chartjs-logo wp-media-buttons-icon"></span></a>',
        esc_attr( $popup_id ),
        esc_attr( $title ),
        esc_url( '#' ),
        esc_attr( 'button add_media chartjs-shortcodes-button')
        //sprintf( '<img src="%s" style="height: 20px; position: relative; top: -2px;">', esc_url( $img ) )
        );
    }
}


// Create a Media Button for the help file
//add a button to the content editor, next to the media button
//this button will show a popup that contains inline content

add_action('media_buttons', 'add_chartjs_button', 11);

function chartjs_shortcodes_help() {
    include('chartjs-shortcodes-help.php');
}
add_action( 'admin_footer', 'chartjs_shortcodes_help' );

// Add the Bootstrap Shortcodes button to Distraction Free Writing mode 
function chartjs_fullscreenbuttons($buttons) {
	
	$buttons[] = 'separator';
	
	$buttons['chartjs-shortcodes'] = array(
		'title' => __('Chart.js Shortcodes Help'),
		'onclick' => "jQuery('#chartjs-shortcodes-help').modal('show');",
		'both' => false 
	);
	
	return $buttons;
}
add_action ('wp_fullscreen_buttons', 'chartjs_fullscreenbuttons');

add_filter("gform_noconflict_styles", "chartjs_register_script");
function chartjs_register_script($scripts){

    //registering my script with Gravity Forms so that it gets enqueued when running on no-conflict mode
    $scripts[] = "chartjs-shortcodes-help-all";
    return $scripts;
}
