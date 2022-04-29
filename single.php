<?php
    get_header();
    the_title();
    the_content();
?>
<p>Ainekood: <?php echo(get_post_meta(get_the_ID(), $key = 'code', $single = true)); ?></p>
<p>Õppejõud: <?php echo(get_post_meta(get_the_ID(), $key = 'teacher', $single = true)); ?></p>

<h2>Uudisteportaalid</h2>
<?php wp_nav_menu(array('theme_location' => 'extra-menu'));?>
<?php
    get_footer();
?>