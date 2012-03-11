<!DOCTYPE html >
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7" lang="fr" xmlns:temp="http://template"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7" lang="fr" xmlns:temp="http://template"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8" lang="fr" xmlns:temp="http://template"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9" lang="fr" xmlns:temp="http://template"> <![endif]-->
<!--[if gt IE 9]>  <html lang="fr" xmlns:temp="http://template"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr" xmlns:temp="http://template">
    <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" xml:lang="fr" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <title>WebConcept</title>
    <temp:contentPlaceHolder id="head">
    </temp:contentPlaceHolder>
</head>
<body>
    <div id="header" class="fullWidth">
        <div id="contact" class="fullWidth"></div>
        <div id="menu" class="fullWidth">
            <div id="menuItemsWrapper">
                <div id="logo">
                    <img src="/WebConcept/images/logo.png" alt=""/>
                </div>
                <ul>
                    <li>
                        <a href="index.php">
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
                        </a>
                    </li>
                    <li>
                        <a href="votre_page.php">
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
                        </a>
                    </li>
                    <li>
                        <a href="forfaits.php">
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
                        </a>
                    </li>
                    <li>
                        <a href="a_propos.php">
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
                        </a>
                    </li>
                    <li>
                        <a href="http://www.youporn.com" target="blank">
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
                        </a>
                    </li>
                    <li>
                        <a href="contactez_nous.php">
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
                        </a>
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
        <temp:contentPlaceHolder id="content">
        </temp:contentPlaceHolder>
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
<temp:contentPlaceHolder id="script">
</temp:contentPlaceHolder>


















</body>
</html>