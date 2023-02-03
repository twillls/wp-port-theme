<?php 
get_header();
?>

<section class="intro container-sm">
	<div class="intro-container">
		<p class="intro-paragraph">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fugit doloremque et modi molestias reprehenderit porro dolore nisi quaerat, ea distinctio culpa? Est laudantium, aliquam modi vel harum ullam obcaecati.
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