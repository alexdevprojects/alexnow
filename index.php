<!DOCTYPE html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Alexnow.com :: Welcome! </title>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="http://flipclockjs.com/_themes/flipclockjs/css/flipclock.css">
	<script src="http://flipclockjs.com/_themes/flipclockjs/js/flipclock/flipclock.js"></script>	

	<script>
	var clock;
	$(document).ready(function() {
		
		$( "#accordion" ).accordion();
		
		
    	$( "#menu" ).menu();
  
		
		var availableTags = [
			"JavaScript",
			"jQuery",
			"PHP",
			"Zend",
			"CodeIgniter",
		];

		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 33
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);


		// Grab the current date
			var currentDate = new Date();
			var futureDate  = new Date(2015, 6, 4, 0, 0, 0);

			// Calculate the difference in seconds between the future and current date
			var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

			// Instantiate a coutdown FlipClock
			clock = $('.clock').FlipClock(diff, {
				clockFace: 'DailyCounter',
				countdown: true
			});

	});
	</script>
	<style>
		body {
			font: 62.5% "Trebuchet MS", sans-serif;
			margin: 50px;
			background-color: #EEEEEE;
		}

		.demoHeaders {
			margin-top: 2em;
		}

		#dialog-link {
			padding: .4em 1em .4em 20px;
			text-decoration: none;
			position: relative;
		}

		#dialog-link span.ui-icon {
			margin: 0 5px 0 0;
			position: absolute;
			left: .2em;
			top: 50%;
			margin-top: -8px;
		}

		#icons {
			margin: 0;
			padding: 0;
		}

		#icons li {
		margin: 2px;
			position: relative;
			padding: 4px 0;
			cursor: pointer;
			float: left;
			list-style: none;
		}

		#icons span.ui-icon {
			float: left;
			margin: 0 4px;
		}

		.fakewindowcontain .ui-widget-overlay {
			position: absolute;
		}
	
		.welcomeHead{
		  font-family: sans-serif;
		  font-size: 55px;
//		  font-style: ;
//		  font-variant: ;
//		  font-weight: ;
		  color: #DFDFDF;
//		  direction: ;
		  letter-spacing: ;
//		  line-height: ;
		  text-align: left;
		  text-decoration: none;
		  text-indent: 50px;
//		  text-transform: ;
//		  vertical-align: ;
//		  white-space: ;
//		  word-spacing: ;
//		  hanging-punctuation: ;
//		  punctuation-trim: ;
//		  text-align-last: ;
//		  text-justify: ;
//		  text-outline: ;
//		  text-overflow: ;
		  text-shadow: 3px 3px #909090;
//		  text-wrap: ;
//		  word-break: ;
//		  word-wrap: ;
		  border: none;
		  opacity: 85%;
		}
	
		.welcomeDiv{
		  background-color: #3399FF;
		  border-top-right-radius: 25px;
		  border-bottom-left-radius: 25px;
		}
	
//  	.ui-menu { width: 150px; }

.clocktitle {
	padding-left: auto;
	padding-right: auto;
}
		</style>
	</head>
	<body>

<?php
/*
<ul id="menu">
  <li><a href="#">[*]</a>
    <ul> 
      <li class="ui-state-disabled"><a href="#">Sections</a></li>
      <li><a href="#">Demos</a></li>
      <li><a href="#">Scripts</a></li>
      <li><a href="#">Sites</a></li>
      <li>
        <a href="#">Delphi</a>
    <ul>
      <li class="ui-state-disabled"><a href="#">Ada</a></li>
      <li><a href="#">Saarland</a></li>
      <li><a href="#">Salzburg</a></li>
    </ul>
  </li>
  <li><a href="#">Saarland</a></li>
  <li>
    <a href="#">Salzburg</a>
    <ul>
      <li>
        <a href="#">Delphi</a>
        <ul>
          <li><a href="#">Ada</a></li>
          <li><a href="#">Saarland</a></li>
          <li><a href="#">Salzburg</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Delphi</a>
        <ul>
          <li><a href="#">Ada</a></li>
          <li><a href="#">Saarland</a></li>
          <li><a href="#">Salzburg</a></li>
        </ul>
      </li>
      <li><a href="#">Perch</a></li>
    </ul>
  </li>
  <li class="ui-state-disabled"><a href="#">Amesville</a></li>

  </li>
  </ul>
 
 </ul>

*/
?>

		<div class="welcomeDiv" id="welcomeDiv">
			<p class="welcomeHead">alexnow.com is back!</p>
		</div>

<!--
<div class="panelDiv">
<p class="panelHead">Latest Update</p>
<p class="panelText">This site is under complete remodel.</p>
</div>
// -->
		<h2 class="demoHeaders clocktitle">Countdown to party time!</h2>
		<div class="clock" style="margin:2em;"></div>

		<h2 class="demoHeaders">Latest Update</h2>
		<div class="ui-widget">
			<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
				<strong>Hi there!</strong> This site is getting the Reboot treatment. Please check back soon :)</p>
			</div>
		</div>

		<h2 class="demoHeaders">Some of the things I'm working on</h2>

		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Portfolio</a></li>
				<li><a href="#tabs-2">Gallery</a></li>
				<li><a href="#tabs-3">Blog</a></li>
				<li><a href="#tabs-4">Gaming</a></li>
			</ul>
			<div id="tabs-1" class="tabsection">A collection of sites and web apps I've built or expanded on to showcase some of my experience with web building technologies such as <strong>PHP, jQuery, Angular, Backbone, WordPress, CodeIgniter</strong> and more.</div>
			<div id="tabs-2" class="tabsection"><strong>PHP based Photo Gallery.</strong> Why give up the rights to all the nice pictures to Facebook?</div>
			<div id="tabs-3" class="tabsection">Words of wisdom from yours truly. Or, more likely, drunken ramblings.</div>
			<div id="tabs-4" class="tabsection">Gaming rules! I'll be sharing things and stuff and, uh, more stuff from my gaming adventures! </div>
		</div>

	</body>
</html>

