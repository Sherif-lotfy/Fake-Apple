<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake-Apple</title>
</head>
<body>
    
<?php wp_head()?>
<div class="menu-main-nav-container">
<?php
wp_nav_menu(array(
    'theme_location' => 'main-nav',
    'container' => 'div', // Optional, to wrap the menu in a <nav> tag
    'menu_class' => 'main-nav-class' // Optional, to add a class to the menu
));
?>
</div>