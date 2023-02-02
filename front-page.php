<?php 
get_header();
?>

<section class="intro">
	<div class="intro-container">
		<p class="intro-paragraph">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fugit doloremque et modi molestias reprehenderit porro dolore nisi quaerat, ea distinctio culpa? Est laudantium, aliquam modi vel harum ullam obcaecati.
		</p>
	</div>
</section>

<article class="content px-3 py-5 p-md-5">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
    ?>
</article>
	   
<?php
get_footer();
?>