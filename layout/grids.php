<?php
$current = array('layout', 'grids');

if(!file_exists('header.php')) {
	define('PATH', dirname(dirname(__FILE__)));
}
else {
	define('PATH', dirname(__FILE__));
}
include(PATH . '/header.php');
?>
			<div id="main">
				<h1>Grids</h1>
				<p>	A grid is a method of laying out items systematically, and
					allows a designer to easily position and organise content.
					Grids are commonly used on news websites, as the content
					changes frequently, and grid systems allow the design to
					cope with these changes in content, as the authors of the
					content can give higher importance to an area by changing
					the width of the column. They provide an invisible
					framework to position sections, headings, body text, or,
					well, anything. The applications of grid systems are
					almost limitless.</p>
				<p class="aside">	Despite their use being most popular on
					news sites, grids can also be applied to almost all other
					sites on the internet. Grids provide a simple and easy way
					to quickly layout sites, either when converting a site
					from table-based sites or when prototyping a site.</p>
				
				<h2 id="prebuilt">Pre-Built Grid Systems</h2>
				<p>	There are several grid systems available to use. The most
					popular grid systems are the
					<a href="http://960.gs">960 Grid System</a>, Yahoo!'s
					<a href="http://developer.yahoo.com/yui/grids/">YUI Grids</a>
					or the <a href="http://www.blueprintcss.org/">Blueprint
					CSS framework</a>. Each system has it's own advantages
					and disadvantages, so make sure to research each before
					choosing one. For example, Blueprint also comes with other
					styling included, so be aware of this.</p>
				<p>	So, you may ask, which system do <em>I</em> use? Well, I
					personally, don't use any of them myself, instead I&hellip;</p>
				
				<h2 id="byo">Build Your Own Grid System!</h2>
				<p>	My personal choice is to build my own grid system. It's
					both easy to do and I can tailor each measurement myself.
					This allows me to do things I can't do with other systems.</p>
				<p>	The first decision you need to make before beginning to
					write your own grid system is to work out whether to use
					absolute measurements, such as pixels, or relative
					measurements, such as percentages. I personally prefer to
					use percentages, as you can then have a miniature grid
					within each column. I'll be assuming you've chosen a
					percentage-based system for this math; there are numerous
					other websites where you can generate code for fixed-width
					columns.</p>
				<p>	The second decision to make is to decide how many columns
					you will need. I usually choose 8, however I've had up to
					20 columns for some projects. Even numbers are best as you
					can achieve a symmetrical design.</p>
				<p>	Now, onto the math. I'll be using an 8-column system as
					the example here, but the math applies to other widths as
					well. For each set of grid columns, the width of the set
					should be 100%, assuming we have all columns. Therefore,
					for 1-unit wide columns, we must have enough room to fit
					all 8 columns. Therefore, each column must be
					100% divided by 8, which gives us 12.5%. For a 2-unit wide
					column, it will be double this width, and so on.</p>
				<p>	Each column in this case will have a right-hand margin of
					1%, so that the columns have a slight separation from each
					other. So that we don't end up with more than 100%
					altogether, we must therefore subtract the margin from the
					width. This leaves us with 11.5% for a 1-unit column, and
					so on.</p>
				<p>	Let's begin coding this. I like to name my columns as
					col-1 and so on, so I'll use this system in my code. Feel
					free to make them whatever you want, as long as you can
					remember them. Now, for a 1-unit wide column, we
					calculated the width as 11.5%, with a 1% right margin.
					We'll ignore the margin for now, as we need to apply this
					to all the columns.</p>
				<p class="alert">	We'll be using a feature of CSS called
					"classes". Classes allow you to apply the same styling to
					multiple elements within a page. For example, this
					paragraph uses the "alert" class. When writing our styles,
					we can refer to a class by putting a full-stop (that's a
					<code>.</code> character), then the name of the class. For
					example, we could refer to this class with <code>.alert</code>.</p>
				<p>	So, to apply a <strong>width</strong> of <strong>11.5%</strong>,
					we simply put:</p>
				<pre>.col-1 { width: 11.5%; }</pre>
				<p class="aside">	In both CSS and HTML, whitespace is not
					significant. I've put my code on a single line here, but
					you can put as many spaces, tabs and new lines as you want.</p>
				<p>	This code says to the browser, "for all elements with the
					class <code>col-1</code>, make the width equal to 11.5%".
					We now repeat this for each new column, using the widths
					we worked out above. Do the same code for each, replacing
					the column number and width for each, all the way to
					<code>col-8</code>, which should have a width of 99%.</p>
				<p>	Now, we need to make each column have a right margin of 1%.
					Margins are added in CSS either by using the
					<code>margin</code> shorthand, or by referring to each
					side. Since <em>we only want a right margin</em>, we use
					<code>margin-right</code>. To add a margin to all the
					columns, we could have added <code>margin-right</code> to
					each column we made before. Thankfully, CSS makes this
					easy for us. We can refer to <em>multiple classes</em> by
					putting a comma (that's a <code>,</code> character)
					inbetween each. For example, to refer to
					<code>.col-1</code> and <code>.col-2</code>, we can simply
					type <code>.col-1, .col-2</code>. Therefore, to refer to
					apply this style to all the columns&hellip;</p>
				<pre>.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8 { margin-right: 1%; }</pre>
				<p>	You might think that we're now done, however, we need to
					tell the browser that we're trying to make these columns
					go next to each other. By default, browsers will
					<strong>clear</strong> each element from others, so that
					your content doesn't fall on top of each other. For this
					purpose, CSS provides use with the <code>float</code>
					property. We can either <code>float</code> an element left
					or right. We'll <code>float</code> it left in this case,
					in order to preserve the order of the content. If you
					<code>float</code> the columns right, you'll notice the
					order is the reverse of how they appear in the HTML.</p>
				<p>	In order to <code>float</code> the elements left, we
					simply use <code>float: left;</code><br />However,
					since we once again want to apply it to <em>all</em>
					columns, we put it with our margin. The code should now be:</p>
				<pre>.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8 { margin-right: 1%; float: left; }</pre>
				<p>	Now, since we've <code>float</code>ed each column left,
					the browser will get confused if we don't have a total of
					8 columns (for example, if we had one column 3 units wide,
					and one column 4 units wide, we're missing 1 unit). In
					order to tell the browser, "hey, we want to clear this
					area", we simply do just that. The CSS code for this is
					<code>clear: both;</code> so we add a new class called
					"clearer", and give it this property.</p>
				<pre>.clearer { clear: both; }</pre>
				<p>	Your CSS is now ready to use. Here's what your CSS should
				look like:</p>
<pre>.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8 { float: left; margin-right: 1%; }
.col-1 { width: 11.5%; }
.col-2 { width: 24%; }
.col-3 { width: 36.5%; }
.col-4 { width: 49%; }
.col-5 { width: 61.5%; }
.col-6 { width: 74%; }
.col-6 { width: 86.5%; }
.col-8 { width: 99%; }
.clearer { clear: both; }
</pre>
				<p>	Save these stylings into a file called <code>grid.css</code>.
					You can call this whatever you like, however, make sure it
					has <code>.css</code> after the name.</p>
				
				<h2 id="applying">Applying the Classes</h2>
				<p>	Now that we've made our styling for the columns, lets make
					a new HTML document. I'll assume you know how to do this,
					so I'll skip the basic structure in my code, but you still
					need it.</p>
				<p>	There are several ways of applying CSS stylesheets to your
					site. I'll use the simplest one here. Firstly, make a new
					<code>style</code> tag in your <code>&lt;head&gt;</code>.</p>
				<pre>&lt;style&gt;&lt;/style&gt;</pre>
				<p>	To apply our CSS, we need to bring it in. CSS provides
					<code>@import</code> for this purpose. Since we're
					<code>import</code>ing from a URL, we need to tell it that
					too.</p>
				<pre>@import url("grid.css");</pre>
				<p>	Put this code inside your <code>style</code> tags.</p>
				<pre>&lt;style&gt;@import url("grid.css");&lt;/style&gt;</pre>
				<p>	Now, we get to the fun part: actually making the columns.
					You can use any tag to make up a column, but the most
					common is the <code>div</code> tag. The <code>div</code>
					tag can be used for any content and is merely a container
					for other tags. Add 2 of these into your <code>body</code>.</p>
				<pre>&lt;body&gt;
	&lt;div&gt;
	
	&lt;/div&gt;
	&lt;div&gt;
	
	&lt;/div&gt;
&lt;/body&gt;</pre>
				<p>	To apply a class to an element, we use the <code>class</code>
					attribute. We're going to have 2 equally sized columns in
					this case, so let's give each <code>div</code> the
					<code>col-4</code> class.</p>
				<pre>&lt;div class="col-4"&gt;</pre>
				<p>	Give each column some content and now try viewing the page
					in your browser. You should see a page like
					<a href="grid-example.html">this example page</a>.</p>
				<div class="alert">
					<p class="first">	If you want to have, for example, one column 3 units
						wide and one column 4 units wide, you have to make
						sure you use the <code>clearer</code> after it. To put
						a <code>clearer</code>, simply put a blank
						<code>div</code> with the <code>clearer</code> class
						after your column <code>div</code>s.</p>
					<pre>&lt;div class="clearer"&gt;&lt;/div&gt;</pre>
				</div>
				
				<h2 id="congratulations">Congratulations!</h2>
				<p>	You've just constructed your own grid system. Go have some
					fun modifying this, and try making your own 12 column grid
					by yourself.</p>
			</div>
			<ul id="sidebar">
				<li>
					<h2>Examples</h2>
					<ul>
						<li><a href="http://www.nytimes.com/">The New York Times</a> - popular news site</li>
						<li><a href="http://www.whitehouse.gov/">The White House</a> - official US government website</li>
						<li><a href="http://www.theonion.com/">The Onion</a> - satirical news site</li>
					</ul>
				</li>
				<li>
					<h2>Grid Systems</h2>
					<ul>
						<li><a href="http://960.gs/">960 Grid System</a></li>
						<li><a href="http://developer.yahoo.com/yui/grids/">YUI Grids</a></li>
						<li><a href="http://www.blueprintcss.org/">Blueprint CSS</a></li>
					</ul>
				</li>
				<li>
					<h2>Further Reading</h2>
					<ul>
						<li><a href="http://www.smashingmagazine.com/2007/04/14/designing-with-grid-based-approach/">Designing With Grid-Based Approach</a> - Smashing Magazine</li>
						<li><a href="http://www.subtraction.com/2005/09/01/the-funniest">The Funniest Grid You Ever Saw</a> - Khoi Vinh</li>
						<li><a href="http://www.subtraction.com/2004/12/31/grid-computi">Grid Computing&hellip; and Design</a> - Khoi Vinh</li>
						<li><a href="http://net.tutsplus.com/html-css-techniques/which-css-grid-framework-should-you-use-for-web-design/">Which CSS Grid Framework Should You Use for Web Design?</a> - Nettuts+</li>
					</ul>
				</li>
			</ul>
<?php
include(PATH . '/footer.php');
?>