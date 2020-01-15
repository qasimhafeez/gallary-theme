<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
<?php else: ?>
    <?php echo wpautop('No post available!'); ?>
<?php endif; ?>

  </div>
</div>
<?php get_footer(); ?>