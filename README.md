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
	  [chart width="600" height="400" type="line" labels="January, February, March, April, May, June, July"]
        [data values="65, 59, 80, 81, 56, 55, 40" label="My First dataset" fillcolor="rgba(220,220,220,0.2)" strokecolor="rgba(220,220,220,1)" pointcolor="rgba(220,220,220,1)" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="rgba(220,220,220,1)"]
        [data values="28, 48, 40, 19, 86, 27, 90" label="My Second dataset" fillcolor="rgba(151,187,205,0.2)" strokecolor="rgba(151,187,205,1)" pointcolor="rgba(151,187,205,1)" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="rgba(151,187,205,1)"]
	  [/chart]
      
### Bar
	  [chart width="600" height="400" type="bar" labels="January, February, March, April, May, June, July"]
        [data values="65, 59, 80, 81, 56, 55, 40" label="My First dataset" fillcolor="rgba(220,220,220,0.5)" strokecolor="rgba(220,220,220,0.8)" highlightfill="rgba(220,220,220,0.75)" highlightstroke="rgba(220,220,220,1)"]
        [data values="28, 48, 40, 19, 86, 27, 90" label="My Second dataset" fillcolor="rgba(151,187,205,0.5)" strokecolor="rgba(151,187,205,0.8)" highlightfill="rgba(151,187,205,0.75)" highlightstroke="rgba(151,187,205,1)"]
	  [/chart]
      
### Radar
	  [chart width="600" height="400" type="radar" labels="Eating, Drinking, Sleeping, Designing, Coding, Cycling, Running]
        [data values="65, 59, 90, 81, 56, 55, 40" label="My First dataset" fillcolor="rgba(220,220,220,0.2)" strokecolor="rgba(220,220,220,1)" pointcolor="rgba(220,220,220,1)" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="rgba(220,220,220,1)"]
        [data values="28, 48, 40, 19, 96, 27, 100" label="My Second dataset" fillcolor="rgba(151,187,205,0.2)" strokecolor="rgba(151,187,205,1)" pointcolor="rgba(151,187,205,1)" pointstrokecolor="#fff" pointhighlightfill="#fff" pointhighlightstroke="rgba(151,187,205,1)"]
	  [/chart]
      
### Polar Area
	  [chart width="600" height="400" type="polararea"]
        [data label="Red" value="300" color="#F7464A" highlight="#FF5A5E"]
	    [data label="Green" value="50" color="#46BFBD" highlight="#5AD3D1"]
	    [data label="Yellow" value="100" color="#FDB45C" highlight="#FFC870"]
	    [data label="Grey" value="40" color="#949FB1" highlight="#A8B3C5"]
	    [data label="Dark Grey" value="120" color="#4D5360" highlight="#616774"]
	  [/chart]
      
### Pie
	  [chart width="600" height="400" type="pie"]
        [data label="Red" value="300" color="#F7464A" highlight="#FF5A5E"]
	    [data label="Green" value="50" color="#46BFBD" highlight="#5AD3D1"]
	    [data label="Yellow" value="100" color="#FDB45C" highlight="#FFC870"]
	  [/chart]
      
### Doughnut
	  [chart width="600" height="400" type="doughnut"]
        [data label="Red" value="300" color="#F7464A" highlight="#FF5A5E"]
	    [data label="Green" value="50" color="#46BFBD" highlight="#5AD3D1"]
	    [data label="Yellow" value="100" color="#FDB45C" highlight="#FFC870"]
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
