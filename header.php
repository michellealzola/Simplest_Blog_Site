<!DOCTYPE html>      
<html <?php language_attributes(); ?>>      
    <head> 
        <meta charset="<?php bloginfo('charset'); ?>">        
        <title><?php bloginfo('name'); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meow+Script&family=Xanh+Mono:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="top-div">
            <header>
                <div class ="container"> 
                    <h1><?php bloginfo('name'); ?></h1> 
                    <span><small><?php bloginfo('description'); ?></small></span> 
                </div>  
            </header>
            <nav class="main-nav">            
                <div class="container">               
                    <?php                   
                    $args = array(                    
                        'theme_location' => 'primary'                  
                        );                
                        ?>         
                    <?php wp_nav_menu($args); ?>         
                </div>         
            </nav>
        </div>
        <div class="clr"></div>