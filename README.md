Chart.js Shortcodes for WordPress
===

WordPress plugin that provides shortcodes for easier use of the Chart.js charts in your content.

## Requirements
This plugin won't do anything if you don't have WordPress theme built with the [Chart.js](http://www.chartjs.org/) framework. **This plugin does not include the Chart.js scripts**.

The plugin is tested to work with ```WordPress 4.0```.

This plugin contains a ```composer.json``` file for those of you who manage your PHP dependencies with [Composer](https://getcomposer.org).

## Shortcode Reference

### Chart Examples
* [Line](#line)
* [Bar](#bar)
* [Radar](#radar)
* [Polar Area](#polar-area)
* [Pie](#pie)
* [Doughnut](#doughnut)
* [Shortcode Parameters](#shortcode-parameters)

# Usage

### Charts

### Line
	  [chart width="600" height="400" type="line" labels="a, b, c, d"]
        [data values="10, 50, 90, 40" label="Blue Line" fillcolor="LightBlue" strokecolor="CornflowerBlue" pointcolor="CornflowerBlue" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="CornflowerBlue"]
        [data values="10, 20, 30, 40" labe="Purple Line" fillcolor="Plum" strokecolor="MediumOrchid" pointcolor="MediumOrchid" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="MediumOrchid"]
	  [/chart]
      
### Bar
	  [chart width="600" height="400" type="bar" labels="a, b, c, d"]
        [data values="10, 50, 90, 40" label="Blue Bars" fillcolor="LightBlue" strokecolor="CornflowerBlue" pointcolor="CornflowerBlue" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="CornflowerBlue"]
        [data values="10, 20, 30, 40" labe="Purple Bars" fillcolor="Plum" strokecolor="MediumOrchid" pointcolor="MediumOrchid" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="MediumOrchid"]
	  [/chart]
      
### Radar
	  [chart width="600" height="400" type="radar" labels="a, b, c, d"]
        [data values="10, 50, 90, 40" label="Blue Radar" fillcolor="LightBlue" strokecolor="CornflowerBlue" pointcolor="CornflowerBlue" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="CornflowerBlue"]
        [data values="10, 20, 30, 40" labe="Purple Radar" fillcolor="Plum" strokecolor="MediumOrchid" pointcolor="MediumOrchid" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="MediumOrchid"]
	  [/chart]
      
### Polar Area
	  [chart width="600" height="400" type="polararea"]
        [data label="Blue" value="75" color="CornflowerBlue" highlight="LightBlue"]
	    [data label="Purple" value="25" color="MediumOrchid" highlight="Plum"]
	  [/chart]
      
### Pie
	  [chart width="600" height="400" type="pie"]
        [data label="Blue" value="75" color="CornflowerBlue" highlight="LightBlue"]
	    [data label="Purple" value="25" color="MediumOrchid" highlight="Plum"]
	  [/chart]
      
### Doughnut
	  [chart width="600" height="400" type="doughnut"]
        [data label="Blue" value="75" color="CornflowerBlue" highlight="LightBlue"]
	    [data label="Purple" value="25" color="MediumOrchid" highlight="Plum"]
	  [/chart]

### Shortcode Parameters

#### [chart] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
width | width, in pixels, of the chart | required | any number | false
height | height, in pixels, of the chart | required | any number | false
labels | Data point labels separated by a comma. Number of labels must match the number of data points in the [data] shortcodes | optional | any text | none
legend | Generate legend for this chart. **Note: legend requires additional styling in your WordPress theme** | optional | true/false | false

#### [data] parameters for Line, Bar, and Radar charts
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
data | Data points separated by a comma. Number of data points must match the number of labels in the [chart] shortcode | optional | any text | none
label | Data set label | optional | any text | false
fillcolor | Line or bar fill color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
strokecolor | Line or bar stroke (outline) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
highlightfill | Line or bar fill highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
highlightstroke | Line or bar stroke (outline) highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
pointcolor | Data point color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
pointstrokecolor | Data point stroke (outline) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
pointhighlightfill | Data point highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
pointHighlightStroke | Data point stroke (outline) highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false

#### [data] parameters for Polar Area, Pie and Doughnut charts
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
value | Data point value | optional | any number | false
label | Data point label | optional | any text | false
color | Area fill color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
highlight | Area highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false

* * *
