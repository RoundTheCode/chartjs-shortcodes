<?php
/*
Plugin Name: Chart.js Shortcodes
Plugin URI: https://github.com/MWDelaney/chartjs-shortcodes
Description: The plugin adds a shortcodes for chart.js charts.
Version: 0.1
Author: Michael W. Delaney
Author URI: 
License: GPL2
*/

/*  Copyright 2014  Michael W. Delaney

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* ============================================================= */

require_once( dirname( __FILE__ ) . '/includes/defaults.php' );
require_once( dirname( __FILE__ ) . '/includes/functions.php' );
require_once( dirname( __FILE__ ) . '/includes/actions-filters.php' );

// Begin Shortcodes
class ChartjsShortcodes {

  function __construct() {
    add_action( 'init', array( $this, 'add_shortcodes' ) );
  }

  /*--------------------------------------------------------------------------------------
    *
    * add_shortcodes
    *
    *-------------------------------------------------------------------------------------*/
  function add_shortcodes() {

    $shortcodes = array(
      'chart',
      'data'
    );

    foreach ( $shortcodes as $shortcode ) {

      $function = 'chartjs_' . str_replace( '-', '_', $shortcode );
      add_shortcode( $shortcode, array( $this, $function ) );
      
    }
  }

  /*--------------------------------------------------------------------------------------
    *
    * chart
    *
    *-------------------------------------------------------------------------------------*/
  function chartjs_chart( $atts, $content = null ) {

    if( isset( $GLOBALS['charts_count'] ) )
      $GLOBALS['charts_count']++;
    else
      $GLOBALS['charts_count'] = 0;
      
    extract( shortcode_atts( array(
      "type"       => false,
      "width"      => 400,
      "height"     => 400,
      "labels"     => false,
      "legend"     => false
    ), $atts ) );
    
    if(strtolower($type) == "polararea")
      $type = "PolarArea";
    else
      $type = ucwords(strtolower($type));

    $labels = $this->parse_labels( $labels );
    $chartname = 'my' . $GLOBALS["charts_count"] . 'Chart';

    return sprintf( 
      '<canvas id="%1$s" width="%2$s" height="%3$s"></canvas>%4$s
       <script>
        var ctx = jQuery("#%1$s").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var data = 
            %7$s
        var ' . $chartname . ' = new Chart(ctx).%5$s(data);
        %6$s
       </script>',
      "chart-" . $GLOBALS['charts_count'],
      esc_attr( $width ),
      esc_attr( $height ),
      ( $legend ) ? '<div class="chartjs-legend" id="' . $chartname . '-legend"></div>' : '',
      $type,
      ( $legend ) ? 'document.getElementById("' . $chartname . '-legend").innerHTML = ' . $chartname . '.generateLegend();' : '',
      sprintf(
          '%s
          %s
          %s
          %s',
          ( $labels ) ? '{' : '[',
          ( $labels ) ? 'labels: [' . $labels . '],' : '',
          ( $labels ) ? 'datasets: [ ' . do_shortcode( $content ) . ']' : do_shortcode( $content ),
          ( $labels ) ? '};' : '];'
      )
    );

  }
    
  /*--------------------------------------------------------------------------------------
    *
    * data
    *
    *-------------------------------------------------------------------------------------*/
  function chartjs_data( $atts, $content = null ) {

    extract( shortcode_atts( array(
      "values"                => false,
      "value"                 => false,
      "label"                 => false,
      "color"                 => false,
      "highlight"             => false,
      "fillcolor"             => false,
      "strokecolor"           => false,
      "highlightfill"         => false,
      "highlightstroke"       => false,
      "pointcolor"            => false,
      "pointstrokecolor"      => false,
      "pointhighlightfill"    => false,
      "pointHighlightStroke"  => false,
    ), $atts ) );
      
    $attributes  = '';
    $attributes .= ( $values )                  ? ' data: [' . $data . '],' : '';
    $attributes .= ( $value )                   ? ' value: ' . $value . ',' : '';
    $attributes .= ( $label )                   ? ' label: "' . $label . '",' : '';
    $attributes .= ( $color )                   ? ' color: "' . $color . '",' : '';
    $attributes .= ( $highlight )               ? ' highlight: "' . $highlight . '",' : '';
    $attributes .= ( $fillcolor )               ? ' fillColor: "' . $fillcolor . '",' : '';
    $attributes .= ( $strokecolor )             ? ' strokeColor: "' . $strokecolor . '",' : '';
    $attributes .= ( $highlightfill )           ? ' highlightFill: "' . $highlightfill . '",' : '';
    $attributes .= ( $highlightstroke )         ? ' highlightStroke: "' . $highlightstroke . '",' : '';
    $attributes .= ( $pointcolor )              ? ' pointColor: "' . $pointcolor . '",' : '';
    $attributes .= ( $pointstrokecolor )        ? ' pointStrokeColor: "' . $pointstrokecolor . '",' : '';
    $attributes .= ( $pointhighlightfill )      ? ' pointHighlightFill: "' . $pointhighlightfill . '",' : '';
    $attributes .= ( $pointHighlightStroke )    ? ' pointHighlightStroke: "' . $pointHighlightStroke . '",' : '';

    return sprintf( 
      '{ %s },',
      $attributes
    );
  }
  
  /*--------------------------------------------------------------------------------------
    *
    * Parse labelsfor shortcodes
    *
    *-------------------------------------------------------------------------------------*/
  function parse_labels( $labels ) {

    $labels_clean = '';

    if( $labels ) {
      $labels = explode( ',', $labels );
      foreach( $labels as $l ) {
        $labels_clean .= sprintf( 
            '"%s", ', 
            esc_attr( trim( $l ) ) 
        );
      }
    }
    else { 
      $labels_clean = false;
    }
    return $labels_clean;
  }

}

new ChartjsShortcodes();
