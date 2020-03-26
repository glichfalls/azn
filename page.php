<?php get_header(); ?>

<main>
    
    <?php if(have_posts()): the_post(); ?>
    
        <div class="container">
        
            <h1><?= get_the_title() ?></h1>
        
            <div class="content gutenberg">
                <?= get_the_content() ?>
            </div>
            
        </div>
    
    <?php endif; ?>
    

    
</main>

<?php get_footer(); ?>
