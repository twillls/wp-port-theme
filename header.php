<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Taylor Wills' Portfolio"> 
    
    <?php
    wp_head();
    ?>

</head> 

<body class="container-fluid">
    
    <header class="header">	    
	   
	    <nav class="navbar navbar-expand-lg">
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-link" aria-hidden="true"></i>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >		
            <ul class="social-list list-group">
                <li class="list-item list-group-item"><a target="_blank" href="https://www.linkedin.com/in/taylor-dronfield-46b085b2/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                <li class="list-item list-group-item"><a target="_blank" href="https://github.com/twillls"><i class="fab fa-github-alt fa-fw"></i></a></li>
                <li class="list-item list-group-item"><a target="_blank" href="https://codepen.io/taylorwills"><i class="fab fa-codepen fa-fw"></i></a></li>
            </ul>

			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <header class="page-title container-lg">
			<h1 class="heading"><?php the_title(); ?></h1>
            <span class="subtext">Frontend Developer</span>
	        <a role="button" href="#wpforms-16" class="contact-button">Get In Touch</a>
		</header>