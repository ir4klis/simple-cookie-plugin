<?php
/*
*
*Plugin Name: Cookie
*Description: Add Cookie consent popup to my thesis' site
*Version: 0.1
*Author: Heracles Michailidis
*Author URI: ir4klis.github.io
*Text Domain: thesis-cookie
*Domain Path: /languages
*
*/

function hook_cookie_popup() {
    ?>
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/>
        <script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script>
        <script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#222222","text":"#ffffff","border":"#b3d0e4"},"button":{"background":"#7b417a","text":"#ffffff"}},"position":"bottom","content":{"href":" http://exam.devguides.net/privacy-policy/","message":"Αυτός ο ιστότοπος χρησιμοποιεί cookies για να παρέχει τις υπηρεσίες του.","link":"Περισσότερα","button":"Εντάξει"}})});</script>
    <?php
}
add_action('wp_head', 'hook_cookie_popup');