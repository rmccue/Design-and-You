<?php
/**
 * Contact Page
 *
 * This file is a massive mess, but I can live with that, since it's a one-time thing.
 */

error_reporting(E_ALL);

$current = array('about', 'contact');

if(!file_exists('header.php')) {
	define('PATH', dirname(dirname(__FILE__)));
}
else {
	define('PATH', dirname(__FILE__));
}
include(PATH . '/header.php');


//ryanmccue.info keys
$publickey = '6LexVQgAAAAAACdW7JHE58XblgeWgYhJXtWMoXx2';
$privatekey = '6LexVQgAAAAAAG-1OGmS4rli-7BvpqFjag53cOtE';

require_once(PATH . '/resources/recaptchalib.php');


$messages = array();
$error = null;

if(!empty($_POST['submit'])) {
	try {
		$messages = process_email($privatekey);
	}
	catch (Exception $e) {
		$error = $e->getMessage();
	}
}

function process_email($privatekey) {
	# the response from reCAPTCHA
	$resp = null;
	# the error code from reCAPTCHA, if any
	$error = null;
	# was there a reCAPTCHA response?
	if ($_POST["recaptcha_response_field"]) {

		$resp = recaptcha_check_answer ($privatekey,
										$_SERVER["REMOTE_ADDR"],
										$_POST["recaptcha_challenge_field"],
										$_POST["recaptcha_response_field"]);

		if (!$resp->is_valid) {
			# set the error code so that we can display it
			throw new Exception($resp->error);
		}
	}

	$required = array('name', 'email', 'subject', 'message');
	$missing = array();
	foreach($required as $key) {
		if(!isset($_POST[$key]))
			$missing[] = $key;
	}

	if(!empty($missing)) {
		return $missing;
	}

	if(($result = preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i', $_POST['email'])) !== 1) {
		var_dump($result);
		return array('email');
	}

	$to = 'ryanmccue@cubegames.net';
	$subject = 'From Contact Form: ' . htmlspecialchars($_POST['subject']);
	$from = htmlspecialchars($_POST['email']);

	$message = $_POST['message'];

	$headers = "From: $from";
	mail($to, $subject, $message, $headers);

	return true;
}


$name = '';
$email = '';
$subject = '';
$message = '';
if(!empty($_POST['name']))
	$name = str_replace(array('"', "'"), '', htmlspecialchars($_POST['name']));
if(!empty($_POST['email']))
	$email = str_replace(array('"', "'"), '', htmlspecialchars($_POST['email']));
if(!empty($_POST['subject']))
	$subject = str_replace(array('"', "'"), '', htmlspecialchars($_POST['subject']));
if(!empty($_POST['message']))
	$message = str_replace(array('"', "'"), '', htmlspecialchars($_POST['message']));
?>
			<div id="main">
				<h1>Contact</h1>
				<p>Need to get in contact for me for some reason? Use this handy form!</p>
				<p><em>All fields are required.</em></p>
				<?php if(is_array($messages) && !empty($messages)) {?><p class="error">The following fields have errors: <?php echo implode($messages, ', ') ?></p><?php } ?>
				<?php if($messages === true) {?><p class="success"><strong>Your email was successfully sent! I'll get in touch ASAP.</strong></p><?php } ?>
				<form action="contact.php" method="POST"<?php if(is_array($messages) && !empty($messages)) echo ' class="error"'; ?>>
					<label>Name: <input type="text" name="name" value="<?php echo $name ?>"<?php if(is_array($messages) && in_array('name', $messages, true)) echo ' class="error"';?> /></label>
					<label>Email: <input type="text" name="email" value="<?php echo $email ?>"<?php if(is_array($messages) && in_array('email', $messages, true)) echo ' class="error"';?> /></label>
					<label>Subject: <input type="text" name="subject" value="<?php echo $subject ?>"<?php if(is_array($messages) && in_array('subject', $messages, true)) echo ' class="error"';?> /></label>
					<label>Message: <textarea name="message"<?php if(is_array($messages) && in_array('message', $messages, true)) echo ' class="error"';?>><?php echo $message ?></textarea></label>
					<div style="clear:both"></div>
					<?php
					echo recaptcha_get_html($publickey, $error);
					?>
					<input type="submit" name="submit" value="Submit" />
					<p>Please note that if you send me an email, your IP address will be included as part of the message.</p>
				</form>
			</div>
			<ul id="sidebar">
				<li>
					<h2>Delays</h2>
					<p>You can expect a delay in returning your email of about a week on average. It probably won't take that long, but I don't like to give false hope. :)</p>
					<h2>Email Directly</h2>
					<p>Need to send me an email with attachment or some such? Note, these emails are much more vigorously checked for spam, so your email has a better chance through the form.</p>
					<p>That said, you can send me an email at <a href="http://mailhide.recaptcha.net/d?k=01EqozodFB21oAYlx0iV34Lg==&amp;c=vMm3CjWBipMu5RxXq9OZ6rgGNSoTua3evUJx_f0C188=" onclick="window.open('http://mailhide.recaptcha.net/d?k=01EqozodFB21oAYlx0iV34Lg==&amp;c=vMm3CjWBipMu5RxXq9OZ6rgGNSoTua3evUJx_f0C188=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;">this email.</a> (Uses Mailhide)</p>
				</li>
			</ul>
<?php
include(PATH . '/footer.php');
?>