<?php
$menu =  wp_nav_menu([
    'echo' => false
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <title><?= get_the_title() ?> – Arizen</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="/wp-content/themes/arizen/assets/images/logo/favicon.png" sizes="192x192" />
</head>

<body>
    
    <header class="main">
        
        <a href="/" class="logo">
            <img src="/wp-content/themes/arizen/assets/images/logo/azn-gold.jpg" />
            ARIZEN
        </a>
    
        <?= $menu ?>
        
        <div class="language">
            <a href="/">DE</a>
            <span class="separator"></span>
            <a class="active" href="/">EN</a>
        </div>
        
    </header>
