<?php
$current = array('about', 'index');

if(!file_exists('header.php')) {
	define('PATH', dirname(dirname(__FILE__)));
}
else {
	define('PATH', dirname(__FILE__));
}
include(PATH . '/header.php');
?>
			<div id="main">
				<h1>About</h1>
				<p>Design, and You! is a site written by <a href="http://ryanmccue.info/">Ryan McCue</a> for his IT assignment of 2009. It is intended to introduce CSS to site developers while also teaching them the basics of design theory.</p>
				<p><del>Some</del> <ins>Most</ins> of the content is not yet finished, unfortunately, but it will be updated live at <a href="http://it.ryanmccue.info/">it.ryanmccue.info</a> and hopefully can become a resource for others to use.</p>
				<p>The full source code for this site is available at <a href="http://github.com/rmccue/Design-and-You">github.com/rmccue/Design-and-You</a> and can be downloaded in either <a href="http://github.com/rmccue/Design-and-You/zipball/master">zip</a> or <a href="http://github.com/rmccue/Design-and-You/tarball/master">tarball</a> format. This code is available under <a href="../LICENSE">the BSD license</a>.</p>
			</div>
			<ul id="sidebar">
				<li>
					<h2>References, Links and Discussions</h2>
					<p>Sometimes, references or links for more information may be put in the sidebar. If you want to learn more about topics mentioned in the page and continue researching, check over here for more links. Discussions about the subject may also be mentioned here.</p>
				</li>
			</ul>
<?php
include(PATH . '/footer.php');
?>