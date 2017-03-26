<?php

if($_POST["submit"]) {
    $recipient="gratfu@gmail.com";
    $subject=$_POST['subject'];
    $sender=$_POST['name'];
    $senderEmail=$_POST['email'];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="Thank you for your message! I will get back to you within 2 business days.";
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Gratiana Fu Portfolio</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='icon' href='icons/web_icon.png'>
	<link rel='stylesheet' href='stylesheets/portfolio_style.css'>
</head>


<body>
	<header>
		<a href='home_page.html' class='logo'><img alt='gratiana_fu_logo' id='logo' src='images/logo.png'></a>
		<nav class='top'>
			<ul>
				<li><a href='home_page.html'>Home</a></li>
				<li><a href='about_me.html'>About Me</a></li>
				<li><a href='my_resume.html'>Resume</a></li>
				<li><a href='my_projects.html'>Projects</a></li>
				<li><a id='current_link' href='contact_me.html'>Contact Me</a></li>
			</ul>	
		</nav>
	</header>
	
	<div>
		<h1>Contact Me</h1>
	</div>

	<div class='thanks'>
		<?php echo $thankYou; ?>
	</div>

	<footer>
		<div>
			<nav class='bottom'>
				<ul>
					<li>
						<a href='https://github.com/gracfu'><img class='icon' src='icons/GitHub-Mark-120px-plus.png' alt='git hub icon'>
						</a>
					</li>
					<li>
						<a href='https://www.linkedin.com/in/grace-fu-590309128'><img class='icon' src='icons/In-2C-121px-TM.png' alt='linkedin icon'>
						</a>
					</li>
					<li>
						<a href='http://codepen.io/gratfu/'><img class='icon' src='icons/Button-Fill-Black-Large.png' alt='codepen icon'>
						</a>
					</li>
					<li>
						<a href="mailto:gratfu@gmail.com" target="_top"><img class='icon' src='icons/logo_gmail_128px.png' alt='codepen icon'>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</footer>
</body>
</html>

