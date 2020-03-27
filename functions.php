<?php

add_action('after_setup_theme', function() {
    register_nav_menu('header-menu', 'Header Menu');
});

add_action('wp_enqueue_scripts', function() {
    wp_register_style('font_awesome', get_theme_file_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css');
    wp_enqueue_style('font_awesome');
    wp_register_style('main_css', get_theme_file_uri() . '/style.css');
    wp_enqueue_style('main_css');
    wp_register_script('main_js', get_theme_file_uri() . '/assets/js/azn.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('main_js');
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
        'rewrite' => [
            'slug' => 'teams'
        ],
        'has_archive' => true,
        'taxonomies' => ['team_type'],
        'public' => true,
        'menu_icon' => 'dashicons-shield'
    ]);
    register_post_type('player', [
        'labels' => [
            'name' => 'Players',
            'singular_name' => 'Player',
            'add_new' => 'Add player',
            'add_new_item' => 'Add new player'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-groups'
    ]);
    register_taxonomy('team_type', 'team', [
        'labels' => [
            'name' => 'Types',
            'singular_name' => 'Type',
        ],
        'public' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_in_menu' => false,
        'show_admin_column' => false,
        'hierarchical' => false,
        'meta_box_cb' => false
    ]);
    register_taxonomy('games', 'team', [
        'labels' => [
            'name' => 'Games',
            'singular_name' => 'Game',
            'add_new_item' => 'Add New Game'
        ],
        'public' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_in_menu' => true,
        'show_admin_column' => true,
        'hierarchical' => false,
        'meta_box_cb' => false
    ]);
});
