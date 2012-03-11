<?php
########## MENU CONFIG ##########
/* Si $lang == fr, le lien affiché sera English, sinon Français. */
$lang = 'fr';
/* La valeur de current est l'index (base 1) du lien sélectionné au départ. */
$current = 1;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if lte IE 7]>
            <link rel="stylesheet" type="text/css" href="css/ie7.css" />
        <![endif]-->
        <!-- jQuery -->

        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <title>WebConcept</title>
        <?php
        ?>
    </head>
    <body class="accueil">
        <div id="header" class="site-width">
            <div id="contact" class="site-width"></div>
            <div id="menu" class="site-width">
                <div id="logo">
                    <img src="/WebConcept/images/logo.png" alt=""/>
                </div>
            </div>
            <div id="slider" class="site-width"></div>
        </div>
        <div id="content" class="site-width">
        </div>
        <div id="footer" class="site-width"></div>
    </body>
</html>

