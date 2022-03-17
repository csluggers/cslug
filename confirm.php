<!doctype html>
<html>
<head>
<title>Z-Red Art</title>
<meta charset = "utf8">
<meta name = "viewport" content = "width = device-width, initial-scale = 1" />
<meta name = "Description" content = "This is a project for e-commerce."/>
<link rel = "stylesheet" href = "styles.css">
</head>
<body>
	<div id="wrapper">
		<header>
		<img id="logo" src="../images/zredlogo.svg" height="150px" width="150px"/>
		<div id="scroll">
		</div>
		
		</header>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		
		<main>
			<article>
				Thank you for your submission.<br>
				Your name is: <?php echo $_POST["name"]; ?>.<br>
				Your email is: <?php echo $_POST["email"]; ?>.<br>
				Your comments are: <?php echo $_POST["comments"]; ?>.<br>
				Have a nice day!
			</article>
		</main>
		<footer>
		</footer>
	</div>
</body>
</html>