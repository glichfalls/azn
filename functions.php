<?php

add_action('after_setup_theme', function() {
    register_nav_menu('header-menu', 'Header Menu');
});

add_action('wp_enqueue_scripts', function() {
    wp_register_style('main_css', get_theme_file_uri() . '/style.css');
    wp_enqueue_style('main_css');
});

add_action('init', function() {
    register_post_type('result', [
        'labels' => [
            'name' => 'Results',
            'singular_name' => 'Result',
            'add_new' => 'Add result',
            'add_new_item' => 'Add new result'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-analytics'
    ]);
    register_post_type('team', [
        'labels' => [
            'name' => 'Teams',
            'singular_name' => 'Team',
            'add_new' => 'Add team',
            'add_new_item' => 'Add new team'
        ],
        'taxonomies' => ['team_type'],
        'public' => true,
        'menu_icon' => 'dashicons-groups'
    ]);
    register_post_type('player', [
        'labels' => [
            'name' => 'Players',
            'singular_name' => 'Player',
            'add_new' => 'Add player',
            'add_new_item' => 'Add new player'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-admin-users'
    ]);
    register_taxonomy('team_type', [
    
    ]);
});
