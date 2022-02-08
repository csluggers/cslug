<!doctype html>
<html>
<head>
<!----------------
-Name:Trevor Flynn
-Date:02/07/22
-Class:CIS166AE
-Module:3
---Description:
------This is my confirmation page for module 3, echo each of the variables from the submission form.
----------------->
<title>PHP Contents</title>
<meta charset = "utf8">
<meta name = "viewport" content = "width = device-width, initial-scale = 1" />
<meta name = "author" content = "Trevor Flynn"/>
<meta name = "KeyWords" content = "PHP, MySQL" />
<meta name = "Description" content = "This is my PHP index page in my root directory for the class."/>
<link rel = "stylesheet" href = "styles.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>PHP Projects</h1>
		</header>
		<nav>
			<ul>
				<li><a href="week1/index.php">Week 1</a></li>
				<li><a href="week2/index.php">Week 2</a></li>
				<li><a href="week3/index.php">Week 3</a></li>
				<li><a href="week4/index.php">Week 4</a></li>
				<li><a href="week5/index.php">Week 5</a></li>
				<li><a href="week6/index.php">Week 6</a></li>
				<li><a href="week7/index.php">Week 7</a></li>
				<li><a href="week8/index.php">Week 8</a></li>
				<li><a href="week9/index.php">Week 9</a></li>
				<li><a href="week10/index.php">Week 10</a></li>
				<li><a href="week11/index.php">Week 11</a></li>
				<li><a href="week12/index.php">Week 12</a></li>
				<li><a href="week13/index.php">Week 13</a></li>
				<li><a href="week14/index.php">Week 14</a></li>
				<li><a href="week15/index.php">Week 15</a></li>
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
