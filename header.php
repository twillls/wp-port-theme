<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
    
    <?php
    wp_head();
    ?>

</head> 

<body class="container-xl">
    
    <header class="header">	    
	   
	    <nav class="navbar navbar-expand-lg">
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-share" aria-hidden="true"></i>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >		
            <ul class="social-list list-inline py-3 mx-auto">
                <li class="list-inline-item"><a href="https://www.linkedin.com/in/taylor-dronfield-46b085b2/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://github.com/twillls"><i class="fab fa-github-alt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://codepen.io/taylorwills"><i class="fab fa-codepen fa-fw"></i></a></li>
            </ul>

			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <header class="page-title py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
            <span class="subtext py-5">Frontend Developer</span>
	        <a href="#wpforms-16" class="contact-button">Get In Touch</a>
		</header>