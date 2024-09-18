<?php
$project_type ="";

$project_description = "This is the project description blah";
$project_name = "oasis";



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio Projects</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/brands.css">
	<link rel="stylesheet" type="text/css" href="../css/projects.css?v=0">
</head>
<body>
	<nav id="top-menu" class="">
		<a href="" id="" class="">Home</a>
		<a href="#about-container" id="" class="">About</a>
		<a href="#skills-container" id="" class="">Skills</a>
		<a href="#projects-container" id="" class="">Projects</a>
		<a href="#contact-form" id="" class="">Contact</a>
	</nav>
	
	<main id="preview" class="">
		<div id="main-preview" style="background-image: url('images/proj (2).jpg');">
			
		</div>
		<section>
		<?php 
		if($project_name == "oasis"){
			?>
			<a href=""><img src="google.png"></a>
			<a href=""><img id="itch" src="itch.png"></a>
			<a id="normal-link" href="">Direct</a>
			<?php
		}else{
			?>
			<a href="">Request Code</a>
			<a href="">blah</a>
			<?php
		}
		?>
		</section>
		<article>
			<p><?php echo($project_description); ?></p>
			<section>
				
			</section>
			
		</article>
	</main>
	<footer>
		<a href="">prev</a>
		<h1><?php echo($project_name); ?></h1>
		<a href="">next</a>
	</footer>
</body>
</html>
