
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>CSS and jQuery Tooltip: Responsive, Mobile-Friendly demo by Osvaldas Valutis</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo of CSS and jQuery Tooltip: Responsive, Mobile-Friendly" />
	<meta name="robots" content="all">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="canonical" href="/examples/elegant-css-and-jquery-tooltip-responsive-mobile-friendly">
	<link rel="icon" href="../favicon.ico" />
	<link rel="stylesheet" href="../main.css" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:400italic,400">
	<style>

		body
		{
			font-family: Ubuntu, sans-serif;
			color: #111;
			background: #fff url( 'bg.gif' ) repeat 0 0;
		}

		#container
		{
			width: 400px;
			height: 300px;
			position: absolute;
			top: 50%;
			left: 50%;
			margin: -150px 0 0 -200px;
		}
			@media screen and (max-width: 440px)
			{
				#container
				{
					width: 100%;
					position: static;
					top: auto;
					left: auto;
					padding: 30px 20px;
					margin: 0;
				}
			}
			@media screen and (max-height: 340px)
			{
				#container
				{
					position: static;
					top: auto;
					left: auto;
					padding-top: 30px;
					padding-bottom: 30px;
					margin: 0 auto;
				}
			}

		#container p
		{
			text-align: justify;
			text-shadow: 0 1px 0 rgba( 255, 255, 255, .5 );
			line-height: 1.85;
		}
		#container a
		{
			color: #84e100;
			text-decoration: none;
		}
			#container a:hover
			{
				color: #6fbc00;
			}

		#container abbr
		{
			border-style: dotted;
			border-color: #111;
			border-width: 0 0 1px;
			cursor: help;
		}

		#info
		{
			width: 60px;
			height: 60px;
			background-color: rgba( 0, 0, 0, .05 );
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border-radius: 50%;
			padding: 5px;
			margin: 0 auto 50px;
		}
			#info:hover
			{
				background-color: rgba( 0, 0, 0, .1 );
			}
			#info abbr
			{
				height: 100%;
				font-size: 2.188em;
				font-weight: bold;
				line-height: 1.4;
				text-align: center;
				text-shadow: 0 1px rgba( 0, 0, 0, .25 );
				color: #fff;
				background: #84e100;
				background: -webkit-gradient( linear, left top, left bottom, from( #84e100 ), to( #6fbc00 ) );
				background: -webkit-linear-gradient( top, #84e100, #6fbc00 );
				background: -moz-linear-gradient( top, #84e100, #6fbc00 );
				background: -ms-radial-gradient( top, #84e100, #6fbc00 );
				background: -o-linear-gradient( top, #84e100, #6fbc00 );
				background: linear-gradient( top, #84e100, #6fbc00 );
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				border-radius: 50%;
				border: none;
				cursor: help;
				display: block;
			}
			#info
			{
				text-decoration: none;
			}


		/*
			TOOLTIP
		*/

		#tooltip
		{
			font-family: Ubuntu, sans-serif;
			font-size: 0.875em;
			text-align: center;
			text-shadow: 0 1px rgba( 0, 0, 0, .5 );
			line-height: 1.5;
			color: #fff;
			background: #333;
			background: -webkit-gradient( linear, left top, left bottom, from( rgba( 0, 0, 0, .6 ) ), to( rgba( 0, 0, 0, .8 ) ) );
			background: -webkit-linear-gradient( top, rgba( 0, 0, 0, .6 ), rgba( 0, 0, 0, .8 ) );
			background: -moz-linear-gradient( top, rgba( 0, 0, 0, .6 ), rgba( 0, 0, 0, .8 ) );
			background: -ms-radial-gradient( top, rgba( 0, 0, 0, .6 ), rgba( 0, 0, 0, .8 ) );
			background: -o-linear-gradient( top, rgba( 0, 0, 0, .6 ), rgba( 0, 0, 0, .8 ) );
			background: linear-gradient( top, rgba( 0, 0, 0, .6 ), rgba( 0, 0, 0, .8 ) );
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border-top: 1px solid #fff;
			-webkit-box-shadow: 0 3px 5px rgba( 0, 0, 0, .3 );
			-moz-box-shadow: 0 3px 5px rgba( 0, 0, 0, .3 );
			box-shadow: 0 3px 5px rgba( 0, 0, 0, .3 );
			position: absolute;
			z-index: 100;
			padding: 15px;
		}
			#tooltip:after
			{
		        width: 0;
		        height: 0;
		        border-left: 10px solid transparent;
		        border-right: 10px solid transparent;
				border-top: 10px solid #333;
		        border-top-color: rgba( 0, 0, 0, .7 );
				content: '';
				position: absolute;
				left: 50%;
				bottom: -10px;
				margin-left: -10px;
			}
				#tooltip.top:after
				{
			        border-top-color: transparent;
					border-bottom: 10px solid #333;
			        border-bottom-color: rgba( 0, 0, 0, .6 );
					top: -20px;
					bottom: auto;
				}
				#tooltip.left:after
				{
					left: 10px;
					margin: 0;
				}
				#tooltip.right:after
				{
					right: 10px;
					left: auto;
					margin: 0;
				}

	</style>
</head>

<body>




<div id="container">
	<div id="info"><abbr title="This is a demo of article called <em>CSS and jQuery Tooltip: Responsive, Mobile-Friendly</em>." rel="tooltip">i</abbr></div>
	<p>Tooltip is a splendid invention. Small detail in web design that plays a big role when it comes to <abbr title="User Experience" rel="tooltip">UX</abbr>. Usually, tooltips are used to present a tiny amount of hidden content (mainly explanatory, so-called tips), that pops up when user moves a cursor over or clicks (less common) on a special target. <a href="http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" title="CSS and jQuery Tooltip: Responsive, Mobile-Friendly" rel="tooltip" style="white-space: nowrap;">Keep reading &rsaquo;</a></p>
</div>

<script src="../jquery.min.js"></script>
<script>

	/*
		TOOLTIP
	*/

	$( function()
	{
		var targets = $( '[rel~=tooltip]' ),
			target	= false,
			tooltip = false,
			title	= false;

		targets.bind( 'mouseenter', function()
		{
			target	= $( this );
			tip		= target.attr( 'title' );
			tooltip	= $( '<div id="tooltip"></div>' );

			if( !tip || tip == '' )
				return false;

			target.removeAttr( 'title' );
			tooltip.css( 'opacity', 0 )
				   .html( tip )
				   .appendTo( 'body' );

			var init_tooltip = function()
			{
				if( $( window ).width() < tooltip.outerWidth() * 1.5 )
					tooltip.css( 'max-width', $( window ).width() / 2 );
				else
					tooltip.css( 'max-width', 340 );

				var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
					pos_top	 = target.offset().top - tooltip.outerHeight() - 20;

				if( pos_left < 0 )
				{
					pos_left = target.offset().left + target.outerWidth() / 2 - 20;
					tooltip.addClass( 'left' );
				}
				else
					tooltip.removeClass( 'left' );

				if( pos_left + tooltip.outerWidth() > $( window ).width() )
				{
					pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
					tooltip.addClass( 'right' );
				}
				else
					tooltip.removeClass( 'right' );

				if( pos_top < 0 )
				{
					var pos_top	 = target.offset().top + target.outerHeight();
					tooltip.addClass( 'top' );
				}
				else
					tooltip.removeClass( 'top' );

				tooltip.css( { left: pos_left, top: pos_top } )
					   .animate( { top: '+=10', opacity: 1 }, 50 );
			};

			init_tooltip();
			$( window ).resize( init_tooltip );

			var remove_tooltip = function()
			{
				tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
				{
					$( this ).remove();
				});

				target.attr( 'title', tip );
			};

			target.bind( 'mouseleave', remove_tooltip );
			tooltip.bind( 'click', remove_tooltip );
		});
	});

</script>




<!--
	STUFF
-->

<div class="sm">
	<ul>
		<li><a href="http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" class="sm__back" title="CSS and jQuery Tooltip: Responsive, Mobile-Friendly">Article</a></li>
		<li><a href="http://facebook.com/sharer/sharer.php?u=http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" target="_blank" rel="nofollow" class="socialite facebook-like" data-href="http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false">Like</a></li>
		<li><a href="http://plus.google.com/share?url=http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" target="_blank" rel="nofollow" class="socialite googleplus-one" data-size="medium" data-href="http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly">+1</a></li>
		<li><a href="http://twitter.com/intent/tweet?url=http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly&amp;text=CSS and jQuery Tooltip: Responsive, Mobile-Friendly&amp;via=osvaldas" target="_blank" rel="nofollow" class="socialite twitter-share" data-text="CSS and jQuery Tooltip: Responsive, Mobile-Friendly &ndash;" data-url="http://osvaldas.info/elegant-css-and-jquery-tooltip-responsive-mobile-friendly" data-via="osvaldas" data-related="osvaldas" data-count="horizontal">Tweet</a></li>
		<li><a href="http://twitter.com/osvaldas" class="socialite twitter-follow" target="_blank" rel="me" data-type="follow" data-show-count="true">Follow @osvaldas</a></li>
	</ul>
</div>

<div class="ad">
	<a href="#" class="ad__close" title="Close the ad"></a>
	<script async src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=osvaldasinfo" id="_carbonads_js"></script>
</div>

<script src="../main.js"></script>
<script>var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-7572727-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>




</body>

</html>