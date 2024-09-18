<?php

include_once("scripts/methods.php");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/brands.css">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=9">

</head>
<body>
	<nav id="top-menu" class="">
		<a href="" id="" class="">Home</a>
		<a href="#about-container" id="" class="">About</a>
		<a href="#skills-container" id="" class="">Skills</a>
		<a href="#projects-container" id="" class="">Projects</a>
		<a href="#contact-form" id="" class="">Contact</a>
	</nav>
	<div id="landing-container" class="">
	<div>
		<h1>
			Odessy<span class="hide-desktop"><br/></span>software and solutions
		</h1>

		<br/>
		<br/>
		<br/>
		<p id="header-statement" class="">
			Hello There, we speak <span style="color: cyan;font-weight: 100;">computer</span>, maybe we can help you with yours, <br/>
			scroll down and make yourself at home or
			click to get in touch...
		</p>

		<br/>
		<br/>
		<br/>
		<a href="#contact-form" id="main-button" class="hide-desktop">
			GET IN TOUCH
		</a>

	</div>
	</div>

	<!-- About Container-->
	<div id="about-container" class="container">
		<h2>ABOUT</h2>
		<section id="" class="">
			<p>
				Hello Again<br/>
				I am a fullstack developer and a desktop and network technician,<br/>
				but please forget that last part...<br/>
			</p>
            <br/><br/>
			<p>
				below here is a list <br/>
				of<br/>
				Technologies that i have in my arsenal
			</p>

		</section>
	</div>
    <div id="services-container" class="container">
				<h2>Services</h2>
				<div id="" class="">
                    <div>
                        <i class="fa fa-search"></i>
                        <br/>
                        SEO OPTIMIZATION
                    </div>
                    <div>
                        <i class="fa fa-code"></i>
                        <br/> 
                        SOFTWARE DEVELOPMENT
                    </div>
                    <div>
                        <i class="fa fa-server"></i>
                        <br/> 
                        MANAGED HOSTING
                    </div>
				</div>
				
			</div>
	<div id="skills-container" class="container">
		<h2>SKILL SET</h2>
		<div id="skill-container" class="">
			<div id="image-hoard">
				<img src="images/languages(8)-5.png" id="" class="">
			</div>
			<div id="skill-description" class="">
				Web Development<br/>
				front-end
				HTML/CSS/JAVASCRIPT
			</div>
		</div>
		<div id="skill-container" class="">
			<div id="image-hoard">
				<img src="images/languages(8)-2.png" id="" class="">
			</div>
			<div id="skill-description" class="">
				Back-end<br/>
				php/python
				FLASK/DJANGO/NODEJs
			</div>
		</div>
		<div id="skill-container" class="">
			<div id="image-hoard">
				<img src="images/languages(8)-4.png" id="" class="">
			</div>
			<div id="skill-description" class="">
				Android Development<br/>
				Java/Applications
				AndroidStudio
			</div>
		</div>
		<div id="skill-container" class="">
			<div id="image-hoard">
				<img src="images/languages(8)-7.png" id="" class="">
			</div>
			<div id="skill-description" class="">
				Desktop Development<br/>
				C++/CompScience
				Still-Learning
			</div>
		</div>
		<div id="skill-container" class="below-skills" style="width:98%;">
			<p>
				This site is running partially on the flask python framework
			</p>
		</div>
	</div>

	<!-- projects Container -->
	<div id="projects-container" class="container">
		<h2>PROJECTS</h2>
		<div id="overflow-content">
			<div id="project-single" class="project1">
				<img src="projects/images/proj (1).jpg">
				<section id="description">
					<a href="https://matic-inc.co.za" target="orphan">matic-inc.co.za</a>
				</section>
			</div>
			<div id="project-single" class="project2">
				<img src="projects/images/proj.png">
				<section id="description">
					Image Description
				</section>
			</div>
			<div id="project-single" class="project3">
				<img src="projects/images/proj (3).png">
				<section id="description">
					Image Description
				</section>
			</div>
			<div id="project-single" class="project2">
				<img src="projects/images/proj (2).jpg">
				<section id="description">
					Oasis
				</section>
			</div>
		</div>
	</div>

	<div id="blog-container" class="container" >
		<h2>BLOG</h2>
		<div id="coming-soon">
			COMING SOON

			<menu id="social-menu" class="">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin"></i>
			</menu>
		</div>
	</div>

	<form id="contact-form" action="contact.php" class="" method="post">
		<?php
		if($mail){
			echo("Email sent successfully");
		}else{
            ?>
			<p id="" class="">
				Fill Your Info below to get in touch
			</p>
            <div style="text-align:center;color:red;">
                <?php
                if($mail_error != ""){
                    echo($mail_error."<br/>");
                }
			    ?>
            </div><br/>
			<div id="" class="">
				<div id="" class="">
					<input type="email" name="mail" placeholder="youremail@example.com">
					<input type="text" name="entity" placeholder="Name/Company">
      				<input type="number" name="phone" placeholder="+27 Phone Number">
				</div>
				<div id="" class="">
					<input id="message-box" type="text" name="message" placeholder="Your request to the Developer Message">
					<input type="submit" value="send" style="">
				</div>
			</div>
		<?php
		}
		?>
	</form>

	<footer>
		<div>
			<section>
				iNTERACT
			</section>
			<ul>
				<li><i class="fa fa-phone"></i> +276 5872 9703</li>
				<li><i class="fa fa-envelope"></i> mnisi.obose@moov.life</li>
				<li><i class="fab fa-facebook-square"></i> @matt.obose</li>
				<li><i class="fab fa-instagram"></i> @mattobose</li>
				<li><i class="fab fa-linkedin"></i> @mattObose</li>
			</ul>
		</div>
		<div>
			<section>
				nAVIGATE
			</section>
			<ul>
				<li><a href="#about-container">About</a></li>
				<li><a href="#landing-container">Blog</a></li>
				<li><a href="#landing-container">Gaming</a></li>
				<li><a href="#contact-form">contact</a></li>
				<li><a href="#landing-container">To Top</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
