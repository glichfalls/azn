<?php get_header(); ?>

<?php



?>

<main>

    <div class="container">

        <div class="page-title">
            <h1>Teams</h1>
        </div>
        
        <div class="teams">
    
            <?php while(have_posts()): the_post(); ?>
        
                <?php $fields = get_fields(get_the_ID()); ?>

                <div class="team">
                    <a href="<?= get_permalink(get_the_ID()) ?>" >
                        <img src="<?= $fields['banner']['url'] ?>" alt="<?= get_the_title() ?> banner" />
                        <h3><?= get_the_title() ?></h3>
                    </a>
                </div>
            
            <?php endwhile; ?>
            
        </div>
        

        
    </div>

</main>

<?php get_footer(); ?>
