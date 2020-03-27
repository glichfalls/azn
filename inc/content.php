<?php if(have_posts()): the_post(); ?>

    <div class="container">
    
        <div class="page-title">
            <h1><?= get_the_title() ?></h1>
        </div>
        
        <div class="content gutenberg">
            <?= get_the_content() ?>
        </div>
        
    </div>

<?php endif; ?>
