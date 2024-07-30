<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php wp_head()?>
<div class="menu-main-nav-container">
<?php
// 'main-nav'
wp_nav_menu( array('main-nav' => 'main-nav') );
?>
</div>