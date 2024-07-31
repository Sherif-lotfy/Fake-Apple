<?php wp_footer();?>
<div class="footer">
    <br>
    <div class="text">
    1. EGP 119.99/month after free trial. One subscription per Family Sharing group. Offer good for 3 months after eligible device activation. Plan automatically renews until cancelled. Restrictions and other terms apply.
    </div>
    <br><hr><br>
    <div id="pageName">
        <?php
            $HomeuUrl = 'http';
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                $HomeuUrl .= "s";
            }                $HomeuUrl .= "://";
           if ($_SERVER["SERVER_PORT"] != "80") {
            $HomeuUrl .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . "/fake-apple";
            } else {
            $HomeuUrl .= $_SERVER["SERVER_NAME"] . "/fake-apple";
            }

            $url = explode('/',$_SERVER["REQUEST_URI"]);
            $target = $url[count($url)-2];
            if ($target != "fake-apple"){
                echo("<pre><a href=\"$HomeuUrl\"><i class='fa-brands fa-apple'></i></a>  >  $target</pre>");
                echo "<br>";
                echo "<br>";
            }
        ?>
    </div>
    <div class="menus">
        <div class="explore">
            Explore
            <br>
            <br>
            <?php wp_nav_menu( array('theme_location' => 'Explore','menu_class' => 'footer-explore') );?> 
        </div>
        <div class="Account">
            Account
            <br>
            <br>
            <?php wp_nav_menu( array('theme_location' => 'account','menu_class' => 'footer-account') );?> 
        </div>
        <div class="entertainment">
            Entertainment
            <br>
            <br>
            <?php wp_nav_menu( array('theme_location' => 'Entertainment','menu_class' => 'footer-entertainment') );?> 
        </div>
        <div class=" About-Apple">
            About Apple
            <br>
            <br>
            <?php wp_nav_menu( array('theme_location' => 'About Apple','menu_class' => 'footer-About-Apple') );?> 
        </div>
    </div>
    <!-- menus end -->
     <br>
     <br>
     <br>
     <div class="anotherLink">
        <a href="#">Find a retailer</a> near you.
    </div>
     <br>
     <br>
     <hr>
     <br>
     <div class="lastdiv">
         <pre class="copyrights">Copyright © 2024 Apple Inc. All rights reserved.    Privacy Policy | Terms of Use | Site Map</pre>
         <div class="lang">Egypt|عربي</div>
    </div>
 </div>  
</body>
</html>