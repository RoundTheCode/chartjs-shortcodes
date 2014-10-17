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
* [Polar Area](#polar-area)
* [Pie](#pie)
* [Doughnut](#doughnut)
* [Shortcode Parameters](#shortcode-parameters)

# Usage

### Charts

### Line
	  [chart width="600" height="400" type="line" labels="a, b, c, d"]
        [data data="10, 50, 90, 40" fillcolor="blue"]
	    [data data="10, 20, 30, 40" fillcolor="red"]
	  [/chart]
      
### Bar
	  [chart width="600" height="400" type="bar" labels="a, b, c, d"]
        [data data="10, 50, 90, 40" fillcolor="blue"]
	    [data data="10, 20, 30, 40" fillcolor="red"]
	  [/chart]
      
### Polar Area
	  [chart width="600" height="400" type="polararea"]
        [data value="75" color="blue"]
	    [data value="25" color="red"]
	  [/chart]
      
### Pie
	  [chart width="600" height="400" type="pie"]
        [data value="75" color="blue"]
	    [data value="25" color="red"]
	  [/chart]
      
### Doughnut
	  [chart width="600" height="400" type="doughnut"]
        [data value="75" color="blue"]
	    [data value="25" color="red"]
	  [/chart]

### Shortcode Parameters

#### [chart] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
width | width, in pixels, of the chart | required | any number | false
height | height, in pixels, of the chart | required | any number | false
labels | Data point labels separated by a comma. Number of labels must match the number of data points in the [data] shortcodes | optional | any text | none

#### [data] parameters for Polar Area, Pie and Doughnut charts
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
value | Data point value | optional | any number | false
label | Data point label | optional | any text | false
color | Area fill color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false

#### [data] parameters for Line and Bar charts
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
data | Data points separated by a comma for use in Line and Bar charts. Number of data points must match the number of labels in the [chart] shortcode | optional | any text | none
fillcolor | Line or bar fill color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
strokecolor | Line or bar stroke (outline) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
highlightfill | Line or bar fill highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false
highlightstroke | Line or bar stroke (outline) highlight (mouse-over) color | optional | any valid CSS color value. You can use HEX notation, RGB, RGBA or HSL. | false

* * *
