<?php
get_header();
while (have_posts()) {
 the_post();?>
    <h1>this is page</h1>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
    <hr/>
<?php }
;
get_footer();
?>