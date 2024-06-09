<!DOCTYPE html>
<html lang="en">
<head>
	<script async src="https://tally.so/widgets/embed.js"></script>
	<script>
	window.TallyConfig = {
	  "formId": "mVlQyy",
	  "popup": {
		"emoji": {
		  "text": "👋",
		  "animation": "wave"
		},
		"autoClose": 1000,
		"doNotShowAfterSubmit": true
	  }
	};
	</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Optimized Header</title>
    <link rel="stylesheet" href="main11.css">
</head>
<body>

	<p>
        <?php include 'counter.php'; ?>
        This page has been visited <?php echo getVisitCount(); ?> times.
    </p>

    <header>
        <div class="logo">
            <a href="index.html">Secret Scribble</a>
        </div>
        <nav>
			<ul class="nav-links">
				<li class="link"><a href="index.html">Home</a></li>
				<li class="link"><a href = "CreatorSupport.html">Fund the creator</a></li>
				<li class="link"><a href = "me.html">About the creator</a></li>
				<li class="link"><a href = "releasenotes.html">News</a></li>
				<li class="link"><a href = "support.html">User support</a></li>
			</ul>
            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
        </nav>
    </header>

	<br><br><br><br><br><br><br><br><br><br><br>

	<div class="container">
		<div class="container2">
			<div class="blur"></div>
			<h1>Secret Scribble</h1>
			<h2>By Drimiteros</h2>
			<br><br><br>
			<a>&nbsp;&nbsp;Your text files saved localy and encrypted. Keep your passwords, text documents and<br>
				sencitive information secure and out of harms way from potential, anouthorized intrudors!</a>
			<div class = "image">
				<img src = "image3.png">
				<div class="gradient-content">
					<div class="content3">
						<a>Secret Scribble is an essential tool that mainly allows you to create ecrypted files in text format and access them only by loggin in, offline to the app. On top of that and other basic functionalities like 
							password generation and what not, the app provides some other useful features that make it act as a file manager. Like disk info, file browsing / searching / execution to maximize efficiency.</a>
						<br>
						<a>Please note that the app is in early development. It will keep improving update by update, taking heavy inspiration from user feedback.</a>
						<br><hr><br>
						<a>"Download" available at late 2024 - early 2025!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See "News" in the page's header^</a>
					</div>
					<br>
					<div class="content3">
						<a>Windows 10/11</a><br>
					</div>
					<div class="button_content">
						<a href="#"><button class="btn">Free Download</button></a>
					</div>
					<br><br><br><br>
				</div>
			</div>
		</div>
	</div>


    <script>
	document.addEventListener('DOMContentLoaded', () => {
		const navToggle = document.querySelector('.nav-toggle');
		const navLinks = document.querySelector('.nav-links');
	
		navToggle.addEventListener('click', () => {
			navLinks.classList.toggle('active');
		});
	});
	</script>
</body>
</html>
