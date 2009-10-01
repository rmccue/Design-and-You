			<div style="clear:both;"></div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<p><a rel="license" href="http://creativecommons.org/licenses/by-nc/2.5/au/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc/2.5/au/88x31.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" property="dc:title" rel="dc:type">Design, and You!</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://it.ryanmccue.info/" property="cc:attributionName" rel="cc:attributionURL">Ryan McCue</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/2.5/au/">Creative Commons Attribution-Noncommercial 2.5 Australia License</a>.</p>
		</div>
	</div>

	<script>
		$(document).ready(function () {
			//Compensate for certain browsers and their lack of support for :hover
			$('#header li').hover(function () {
				$(this).addClass('hover');
			}, function () {
				$(this).removeClass('hover');
			});
			//$('#header li ul').hide();
		});
	</script>

	<!--[if lte IE 6]>
		<script src="http://ie6-upgrade-warning.googlecode.com/svn/trunk/ie6/warning.js"></script>
		<script>
			$(document).ready(function(){
				e("http://ie6-upgrade-warning.googlecode.com/svn/trunk/ie6/");
			});
		</script>
	<![endif]-->
	<!--[if lt IE 8]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
	<![endif]-->
</body>
</html>