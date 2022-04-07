<?php
    get_header();
    the_title();
    the_content();
?>
<p>Ainekood: <?php echo(get_post_meta(get_the_ID(), $key = 'code', $single = true)); ?></p>
<p>Õppejõud: <?php echo(get_post_meta(get_the_ID(), $key = 'teacher', $single = true)); ?></p>
<?php
    get_footer();
?>