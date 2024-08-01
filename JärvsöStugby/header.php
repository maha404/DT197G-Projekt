<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
    <style> @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap'); </style> 
    <script src="https://kit.fontawesome.com/f2e33cb8e2.js" crossorigin="anonymous"></script>
    <title> <?php bloginfo('name'); ?></title>
</head>
<body>
    
<header>
    
    <!-- Images -->
    <div class="overlay">
        <!-- Custom header, enables the ablity for the Admin to upload and crop an image for the header -->
        <img class="header-img-desktop" src="<?php header_image(); ?>"  alt="">
    </div>

    
    
    <!-- Navigation -->
    <nav class="desktop-nav">
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 
                                    'menu_class' => 'nav-list', 
                                    'container' => 'ul')); ?>
</header>