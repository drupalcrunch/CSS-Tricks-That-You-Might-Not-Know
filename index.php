<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Random CSS crap that you might not know... by Mike Herchel</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--<link rel="stylesheet" href="vender/prism.css">-->
		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/beige.css" id="theme">
		<link rel="stylesheet" href="css/herchel.css">
		<link rel="stylesheet" href="css/slides.css">
		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
	
		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<!--<script src="vender/prism.js"></script>-->
		<script src="vender/jquery.min.js"></script>
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>
		<script src="js/herchel.js"></script>
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
<?php require 'slides/1.html';?>
<?php require 'slides/2.html';?>			
<?php //require 'slides/3.html';?>
<?php require 'slides/4.html';?>			
<?php require 'slides/5.html';?>	
<?php require 'slides/6.html';?>
<?php require 'slides/7.html';?>				
<?php require 'slides/8.html';?>				
<?php require 'slides/9.html';?>	
<?php require 'slides/10.html';?>
<?php require 'slides/11.html';?>
<?php require 'slides/12.html';?>				
<?php require 'slides/13.html';?>	
<?php require 'slides/14.html';?>			
<?php require 'slides/15.html';?>	
<?php require 'slides/16.html';?>	
<section id="slidexx" class="editable">
<h1>The End</h1>
</section>
			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
