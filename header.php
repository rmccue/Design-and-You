<?php
$prefix = '/it';

if(!isset($current)) {
	$current = array('', '');
}

$links = array(
	'layout' => array(
		'index' => 'Layout',
		'grids' => 'Grids',
		'whitespace' => 'Whitespace',
		'glyphs' => 'Glyphs',
		'relationships' => 'Relationships'
	),
	'typography' => array(
		'index' => 'Typography',
		'serifs' => 'Serifs vs. Sans-serifs',
		'anatomy' => 'Anatomy of Letters',
		'scale' => 'Scale of Type',
		'style' => 'Style',
		'colour' => 'Typographic Colour'
	),
	'colours' => array(
		'index' => 'Colours',
		'relationships' => 'Colour Wheel and Relationships',
		'wireframing' => 'Wireframing without Colour'
	),
	'about' => array(
		'index' => 'About',
		'contact' => 'Contact',
		
	)
);

if(isset($links[$current[0]]) && isset($links[$current[0]][$current[1]])) {
	$title = $links[$current[0]][$current[1]];
}
else {
	$title = 'Home';
}
?>
<!doctype html>
<html>
<head>
	<title><?php echo $title; ?> &mdash; Design, and You!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix ?>/resources/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix ?>/resources/style.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<h1>Design, and You!</h1>
			<ul><?php

		foreach($links as $url => $subs) {
			$class = 'major';
			if($current[0] == $url) {
				$class .= ' current';
			}
			echo "\n\t\t\t\t<li class='$class'><a href='$prefix/$url/'>{$subs['index']}</a>";
			unset($subs['index']);
			if(!empty($subs)) {
				echo "\n\t\t\t\t\t<ul>";
				foreach($subs as $sub_url => $sub_title) {
					$class = 'sub';
					if($current[1] == $sub_url) {
						$class .= ' current';
					}
					echo "\n\t\t\t\t\t\t<li class='$class'><a href='$prefix/$url/$sub_url'>$sub_title</a></li>";
				}
				echo "\n\t\t\t\t\t</ul>";
			}
		}
		?>
			</ul>
			
			<div style="clear:both"></div>
		</div>
	</div>
	<div style="clear:both;"></div>
	<div id="content">
		<div class="container">
