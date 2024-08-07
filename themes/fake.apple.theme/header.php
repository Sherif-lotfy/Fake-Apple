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
            <div class="action">
                <h1>someText...</h1>
            </div>
        </div>
        <div class="fix"></div>
        <div class="overlay"></div>

    <div class="overlay"></div>
</div>