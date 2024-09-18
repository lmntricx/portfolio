<?php
include_once("scripts/methods.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio | Contact</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/brands.css">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=9">

</head>
<body>
<nav id="top-menu" class="">
	<a href="/" id="" class="">Home</a>
	<a href="/#about-container" id="" class="">About</a>
	<a href="/#projects-container" id="" class="">Projects</a>
	<a href="/#contact-form" id="" class="">Contact</a>
</nav>
<br/>
<br/>
<form id="contact-form" class="" method="post">
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
            </div>
			<input type="email" name="mail" placeholder="youremail@example.com">
			<input type="text" name="entity" placeholder="Name/Company">
      		<input type="number" name="phone" placeholder="+27 Phone Number">
			<input type="text" name="message" placeholder="Your request to the Developer">
			<input type="submit" value="send" style="">

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
				<li><a href="/#about-container">About</a></li>
				<li><a href="/#landing-container">Blog</a></li>
				<li><a href="/#landing-container">Gaming</a></li>
				<li><a href="/#contact-form">contact</a></li>
				<li><a href="/#landing-container">To Top</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>