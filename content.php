<div class='col-md-4' style='padding: 0px;'>
    <?php if(has_post_thumbnail()) : ?>
        <?php
            $attr = array(
                'class' => 'img-fluid',
                'style' => 'width:100% !important; height:100% !important; padding:0px'
            );
        ?>
        <a href=""><?php echo get_the_post_thumbnail($id, 'large', $attr); ?></a>
    <?php endif; ?>
</div>