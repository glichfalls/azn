<?php get_header(); ?>

<?php

    $team = get_fields(get_the_ID());

?>

<main>
    
    <?php if(have_posts()): the_post(); ?>

        <div class="container">

            <div class="page-title">
                <h1><?= get_the_title() ?></h1>
            </div>

            <div class="content">
                
                <div class="gutenberg">
                    <?= get_the_content() ?>
                </div>

                <h3 class="subtitle">Roster</h3>

                <div class="team-grid">
        
                    <?php foreach($team['players'] as $player): ?>
            
                        <?php $fields = get_fields($player['player']->ID); ?>

                        <div class="team-grid-item">

                            <img src="<?= $fields['avatar']['url'] ?>" alt="" />

                            <h4>
                                <?= $player['player']->post_title ?>
                                <span class="separator"></span>
                                <?= $player['role'] ?>
                            </h4>

                        </div>
        
                    <?php endforeach; ?>

                </div>

                <h3 class="subtitle">Management</h3>

                <div class="team-grid">
        
                    <?php foreach($team['management'] as $player): ?>
        
        
        
                    <?php endforeach; ?>

                </div>
                
            </div>
            
        </div>
    
    <?php endif; ?>

</main>

<?php get_footer(); ?>
