<?php get_header(); ?>

<main>
    
    <?php while(have_posts()): the_post(); ?>
    
        <?php $fields = get_fields(get_the_ID()); ?>
    
        <div class="header-image">
            
            <img src="<?= $fields['header_image']['url'] ?>" alt="<?= get_the_title() ?>" />
            
            <div class="page-title">
                <h1><?= get_the_title() ?></h1>
            </div>
            
        </div>
    
        <div class="container">
        
            <div class="content gutenberg">
                <?= get_the_content() ?>
            </div>
    
        </div>
    
    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
