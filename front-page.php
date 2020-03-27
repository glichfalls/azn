<?php get_header(); ?>

<?php

    $posts = get_posts([
        'numberposts' => 3,
        'order' => 'ASC'
    ]);

?>

<div class="landing">
    
    <?php foreach($posts as $post): ?>
    
        <?php $fields = get_fields($post->ID); ?>
    
        <div class="post">
            
            <a href="<?= get_permalink($post->ID) ?>">
    
                <img src="<?= $fields['header_image']['url'] ?>" alt="<?= $post->post_title ?>" />
    
                <div class="post-title">
                    <?= $post->post_title ?>
                </div>
                
            </a>
            
        </div>
    
    <?php endforeach; ?>

</div>

<?php get_footer(); ?>
