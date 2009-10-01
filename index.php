<?php
if(!file_exists('header.php')) {
	define('PATH', dirname(dirname(__FILE__)));
}
else {
	define('PATH', dirname(__FILE__));
}

include(PATH . '/header.php');
?>
			<div id="main">
				<h1>Welcome!</h1>
				<p>Welcome to Design, and You! This site is intended to give you a simple introduction into the theory of design and how it applies to the web.</p>

				<p>Throughout the site, you'll be introduced to concepts such as colour theory and layout.</p>

				<p>Before reading this site, you should have knowledge of basic HTML. Knowing how to construct table layouts or style using the <code>&lt;font&gt;</code> tag will not help you and may hinder you. Several conventions are used throughout the site to bring your attention to certain areas.</p>

				<p class="aside">This is an aside. Information that may be relevant to you, but only somewhat related to the actual content will be put here.</p>

				<p>As you can see to the right of this paragraph, asides are used to callout certain paragraphs which provide information that may help you, but is mainly for background information or history on the subject at hand. Further to the right, you'll see the sidebar. For more information on a topic, look to the sidebar.</p>

				<p class="alert">Sometimes, information may be crucial to your site working, and things may break if you don't follow certain instructions. In these cases, information will be presented in alert boxes, such as this one. Care should be taken to follow the instructions in these paragraphs.</p>

				<p>But, enough talking. Time to begin learning about Design, and You!</p>
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