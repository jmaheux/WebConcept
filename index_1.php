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
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <title>WebConcept</title>

    </head>
    <body class="accueil">
        <div id="header" class="fullWidth">
            <div id="contact" class="fullWidth"></div>
            <div id="menu" class="fullWidth">
                <div id="menuItemsWrapper">
                    <div id="logo">
                        <img src="/WebConcept/images/logo.png" alt=""/>
                    </div>
                    <ul>
                        <li class="selected">
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            ACCUEIL
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            VOTRE PAGE WEB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            FORFAITS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            À PROPOS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            PORN
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="upperBorder">
                                <div class="upperLeftBorder"></div>
                                <div class="upperCenterLeftBorder"></div>
                                <div class="upperCenterRightBorder"></div>
                                <div class="upperRightBorder"></div>
                            </div>
                            <div class="leftBorder">
                                <div class="rightBorder">
                                    <div class="topShadow">
                                        <div class="bottomShadow">
                                            CONTACTEZ-NOUS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="clear" style="float: none;"></li>
                    </ul>
                </div>               
            </div>
        </div>
        <div class="floatingSeparator">
        </div>
        <div class="topBoxWrapper">
            <div class="topLeftCornerImageHolder siteWidth">
                <div class="topRightCornerImageHolder siteWidth">
                    <div class="topGradientBackground innerSiteWidth"></div>
                    <div class="topGradientHolder innerSiteWidth"></div>
                </div>
            </div>
        </div>
        <div id="content" class="">
        </div>
        <div class="bottomBoxWrapper">
            <div class="bottomLeftCornerImageHolder siteWidth">
                <div class="bottomRightCornerImageHolder siteWidth">
                    <div class="bottomGradientBackground innerSiteWidth"></div>
                    <div class="bottomGradientHolder siteWidth"></div>
                </div>
            </div>
        </div>
        <div id="footer" class="siteWidth"></div>
        <script type="text/javascript">
            $(window).load(function(){
                $('#menu ul li').click(function(){
                    $('#menu ul li.selected').removeClass('selected');
                    $(this).addClass('selected');
                })
            });
        </script>
    </body>
</html>

