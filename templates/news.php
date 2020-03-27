<?php
/**
 * Template Name: News
 */

get_header();

?>

<main>
    
    <?php if(have_posts()): the_post(); ?>
        
        <div class="container">
    
            <div class="page-title">
                <h1><?= get_the_title() ?></h1>
            </div>
            
            <div class="content gutenberg">
                <?= get_the_content() ?>
            </div>
            
            <div class="news">
                <?php foreach(get_posts() as $post): ?>
                    <?php $thumbnail = get_field('thumbnail_image', $post->ID); ?>
                    <article style="background-image: url(<?= $thumbnail['url'] ?>);">
                        <a href="<?= get_permalink($post) ?>" class="wrapper">
                            <span class="article-date">
                                <?= strftime('%B', strtotime($post->post_date)) . ' ' . date('jS', strtotime($post->post_date)) ?>
                            </span>
                            <h4><?= $post->post_title ?></h4>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
            
        </div>
    
    <?php endif; ?>


</main>

<?php get_footer(); ?>
