<?php 
get_header();
?>

<section class="intro container-sm">
	<div class="intro-container">
		<p class="intro-paragraph">
            Hello! It’s great to meet you. My name is Taylor. I am a 26 year old Developer that specializes in fully responsive,
            custom frontend development.

            When I'm not designing or coding cool sites, I like to spend time with my cats, curl up with a cup of joe and a good book, or find a new trail to hike.
		</p>
	</div>
</section>

<section class="container-fluid">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/projects', 'projects');
            }
        }
    ?>
</section>

<section class="container-lg">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
    ?>
</section>
	   
<?php
get_footer();
?>