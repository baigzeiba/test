<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>position demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<style>

/* This is the default Tooltipster theme (feel free to modify or duplicate and create multiple themes!): */
.tooltipster-default {
	border-radius: 5px; 
	border: 2px solid #000;
	background: #4c4c4c;
	color: #fff;
    z-index: 9999999 !important;
}

/* Use this next selector to style things like font-size and line-height: */
.tooltipster-default .tooltipster-content {
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 16px;
	padding: 8px 10px;
	overflow: hidden;
}

/* This next selector defines the color of the border on the outside of the arrow. This will automatically match the color and size of the border set on the main tooltip styles. Set display: none; if you would like a border around the tooltip but no border around the arrow */
.tooltipster-default .tooltipster-arrow .tooltipster-arrow-border {
	/* border-color: ... !important; */
}


/* If you're using the icon option, use this next selector to style them */
.tooltipster-icon {
	cursor: help;
	margin-left: 4px;
}








/* This is the base styling required to make all Tooltipsters work */
.tooltipster-base {
	padding: 0;
	font-size: 0;
	line-height: 0;
	position: absolute;
	left: 0;
	top: 0;
	z-index: 9999999;
	pointer-events: none;
	width: auto;
	overflow: visible;
}
.tooltipster-base .tooltipster-content {
	overflow: hidden;
}


/* These next classes handle the styles for the little arrow attached to the tooltip. By default, the arrow will inherit the same colors and border as what is set on the main tooltip itself. */
.tooltipster-arrow {
	display: block;
	text-align: center;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: -1;
}
.tooltipster-arrow span, .tooltipster-arrow-border {
	display: block;
	width: 0; 
	height: 0;
	position: absolute;
}
.tooltipster-arrow-top span, .tooltipster-arrow-top-right span, .tooltipster-arrow-top-left span {
	border-left: 8px solid transparent !important;
	border-right: 8px solid transparent !important;
	border-top: 8px solid;
	bottom: -7px;
}
.tooltipster-arrow-top .tooltipster-arrow-border, .tooltipster-arrow-top-right .tooltipster-arrow-border, .tooltipster-arrow-top-left .tooltipster-arrow-border {
	border-left: 9px solid transparent !important;
	border-right: 9px solid transparent !important;
	border-top: 9px solid;
	bottom: -7px;
}

.tooltipster-arrow-bottom span, .tooltipster-arrow-bottom-right span, .tooltipster-arrow-bottom-left span {
	border-left: 8px solid transparent !important;
	border-right: 8px solid transparent !important;
	border-bottom: 8px solid;
	top: -7px;
}
.tooltipster-arrow-bottom .tooltipster-arrow-border, .tooltipster-arrow-bottom-right .tooltipster-arrow-border, .tooltipster-arrow-bottom-left .tooltipster-arrow-border {
	border-left: 9px solid transparent !important;
	border-right: 9px solid transparent !important;
	border-bottom: 9px solid;
	top: -7px;
}
.tooltipster-arrow-top span, .tooltipster-arrow-top .tooltipster-arrow-border, .tooltipster-arrow-bottom span, .tooltipster-arrow-bottom .tooltipster-arrow-border {
	left: 0;
	right: 0;
	margin: 0 auto;
}
.tooltipster-arrow-top-left span, .tooltipster-arrow-bottom-left span {
	left: 6px;
}
.tooltipster-arrow-top-left .tooltipster-arrow-border, .tooltipster-arrow-bottom-left .tooltipster-arrow-border {
	left: 5px;
}
.tooltipster-arrow-top-right span,  .tooltipster-arrow-bottom-right span {
	right: 6px;
}
.tooltipster-arrow-top-right .tooltipster-arrow-border, .tooltipster-arrow-bottom-right .tooltipster-arrow-border {
	right: 5px;
}
.tooltipster-arrow-left span, .tooltipster-arrow-left .tooltipster-arrow-border {
	border-top: 8px solid transparent !important;
	border-bottom: 8px solid transparent !important; 
	border-left: 8px solid;
	top: 50%;
	margin-top: -7px;
	right: -7px;
}
.tooltipster-arrow-left .tooltipster-arrow-border {
	border-top: 9px solid transparent !important;
	border-bottom: 9px solid transparent !important; 
	border-left: 9px solid;
	margin-top: -8px;
}
.tooltipster-arrow-right span, .tooltipster-arrow-right .tooltipster-arrow-border {
	border-top: 8px solid transparent !important;
	border-bottom: 8px solid transparent !important; 
	border-right: 8px solid;
	top: 50%;
	margin-top: -7px;
	left: -7px;
}
.tooltipster-arrow-right .tooltipster-arrow-border {
	border-top: 9px solid transparent !important;
	border-bottom: 9px solid transparent !important; 
	border-right: 9px solid;
	margin-top: -8px;
}


/* Some CSS magic for the awesome animations - feel free to make your own custom animations and reference it in your Tooltipster settings! */

.tooltipster-fade {
	opacity: 0;
	-webkit-transition-property: opacity;
	-moz-transition-property: opacity;
	-o-transition-property: opacity;
	-ms-transition-property: opacity;
	transition-property: opacity;
}
.tooltipster-fade-show {
	opacity: 1;
}

.tooltipster-grow {
	-webkit-transform: scale(0,0);
	-moz-transform: scale(0,0);
	-o-transform: scale(0,0);
	-ms-transform: scale(0,0);
	transform: scale(0,0);
	-webkit-transition-property: -webkit-transform;
	-moz-transition-property: -moz-transform;
	-o-transition-property: -o-transform;
	-ms-transition-property: -ms-transform;
	transition-property: transform;
	-webkit-backface-visibility: hidden;
}
.tooltipster-grow-show {
	-webkit-transform: scale(1,1);
	-moz-transform: scale(1,1);
	-o-transform: scale(1,1);
	-ms-transform: scale(1,1);
	transform: scale(1,1);
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
}

.tooltipster-swing {
	opacity: 0;
	-webkit-transform: rotateZ(4deg);
	-moz-transform: rotateZ(4deg);
	-o-transform: rotateZ(4deg);
	-ms-transform: rotateZ(4deg);
	transform: rotateZ(4deg);
	-webkit-transition-property: -webkit-transform, opacity;
	-moz-transition-property: -moz-transform;
	-o-transition-property: -o-transform;
	-ms-transition-property: -ms-transform;
	transition-property: transform;
}
.tooltipster-swing-show {
	opacity: 1;
	-webkit-transform: rotateZ(0deg);
	-moz-transform: rotateZ(0deg);
	-o-transform: rotateZ(0deg);
	-ms-transform: rotateZ(0deg);
	transform: rotateZ(0deg);
	-webkit-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 1);
	-webkit-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4); 
	-moz-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4); 
	-ms-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4); 
	-o-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4); 
	transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4);
}

.tooltipster-fall {
	top: 0;
	-webkit-transition-property: top;
	-moz-transition-property: top;
	-o-transition-property: top;
	-ms-transition-property: top;
	transition-property: top;
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
}
.tooltipster-fall-show {
}
.tooltipster-fall.tooltipster-dying {
	-webkit-transition-property: all;
	-moz-transition-property: all;
	-o-transition-property: all;
	-ms-transition-property: all;
	transition-property: all;
	top: 0px !important;
	opacity: 0;
}

.tooltipster-slide {
	left: -40px;
	-webkit-transition-property: left;
	-moz-transition-property: left;
	-o-transition-property: left;
	-ms-transition-property: left;
	transition-property: left;
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
	-webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	-o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15); 
	transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
}
.tooltipster-slide.tooltipster-slide-show {
}
.tooltipster-slide.tooltipster-dying {
	-webkit-transition-property: all;
	-moz-transition-property: all;
	-o-transition-property: all;
	-ms-transition-property: all;
	transition-property: all;
	left: 0px !important;
	opacity: 0;
}


/* CSS transition for when contenting is changing in a tooltip that is still open. The only properties that will NOT transition are: width, height, top, and left */
.tooltipster-content-changing {
	opacity: 0.5;
	-webkit-transform: scale(1.1, 1.1);
	-moz-transform: scale(1.1, 1.1);
	-o-transform: scale(1.1, 1.1);
	-ms-transform: scale(1.1, 1.1);
	transform: scale(1.1, 1.1);
}

	
	</style>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
 
<p style="position: absolute; z-index: -1;">
    <a href="#" class="tooltip" title="This is my image's tooltip message!" >foo</a><br/><br />
    <a href="#" class="tooltip" title="This is my image's tooltip message!" >bar</a>
</p>


<script>
$(document).ready(function() {
   $('.tooltip').tooltipster({
                content: $('<span><strong>This text is in bold case !</strong></span>'),
       trigger: 'click',
            });
});

</script>
 
</body>
</html>