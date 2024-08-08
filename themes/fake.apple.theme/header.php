<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake-Apple</title>
</head>
<body>
    <?php wp_head()?>
        <div class="menu-main-nav-container parent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => 'div', 
                'menu_class' => 'main-nav-class' 
            ));
            ?>
            <div class="mac">
                <h1>Mac menu</h1>
            </div>
            <div class="ipad">
                <h1>ipad menu</h1>
            </div>
            <div class="iphone">
                <h1>iphone menu</h1>
            </div>
            <div class="watch">
                <h1>watch menu</h1>
            </div>
            <div class="airpods">
                <h1>airpods menu</h1>
            </div>
            <div class="tv">
                <h1>TV & Home menu</h1>
            </div>
            <div class="entertain">
                <h1>entertainment menu</h1>
            </div>
            <div class="support">
                <h1>support menu</h1>
            </div>
            <div class="where">
                <h1>where to buy menu</h1>
            </div>
        </div>
        <div class="fix"></div>
        <div class="overlay"></div>

    <div class="overlay"></div>
</div>