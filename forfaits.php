<?php
require_once './classes/template.php';
$temp = new template("master.php");
$temp->render();
?>
<temp:templateContent xmlns:temp="http://templates"
                      xmlns="http://www.w3.org/1999/xhtml">
    <temp:contentPlaceHolder id="head">
        <link rel="stylesheet" href="css/jquery.ui.core.css" />
        <link rel="stylesheet" href="css/jquery.ui.accordion.css" />
        <link rel="stylesheet" href="css/forfaits.css" />
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="script">
<!--        <script type="text/javascript" src="js/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.accordion.js"></script>
        <script type="text/javascript" src="js/raphael-min.js"></script>
        <script type="text/javascript" src="js/raphael-it.js"></script>
        <script type="text/javascript" src="js/forfaits.js"></script>
        <script type="text/javascript">

        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="topFloatingBox">
        <div id="topFloatingDiv">
            <h1 id="topFloatingTitle">Nos forfaits</h1>
            <div class="separatorLine"></div>
            <h1 id="topFloatingTitleText">Voici nos trois forfaits pré-conçus. Tous nos forfaits sont également personnalisables.</h1>
        </div>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <div class="accordions-holder">
                <div class="accordions-wrapper">
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>Forfait de base</h1>
                        </div>
                    </div>
                    <div class="accordions">
                        <h3>5 pages</h3>
                        <div>Pages standards. Les éléments de programmation sont en supplément.</div>
                        <h3>Slider avec 5 images gratuites</h3>
                        <div>Le slider est ajusté a vos besoins. Les images gratuites sont des images pouvant représenter votre entreprise. La grandeur des images sera la même que celle du slider.</div>
                        <h3>Animations</h3>
                        <div>Animations des menus et des éléments de contenu.</div>
                        <h3>Formulaire de contact</h3>
                        <div>Un formulaire permettant aux clients de vous contacter. Un formulaire de contact comprend entre 5 et 10 champs de texte.</div>
                        <h3>Hébergement</h3>
                        <div>Hébergement gratuit pour une durée d'un an.</div>
                        <h3>10 adresses courriel</h3>
                        <div>Si vous avez besoin de plus de 10 adresses courriel, il est possible d'en ajouter à votre forfait.</div>
                        <h3>1 Gb d'Espace disque</h3>
                        <div>Votre pouvez emmagasiner du contenu et de l'information jusqu'à un total de 1 Gb, tout à fait gratuitement.</div>
                        <h3>Galerie photo et vidéo</h3>
                        <div>Une gallerie présentant des images ou des vidéos de votre choix. Au besoin, nous pouvons aussi vous aider à créer vos propres vidéos.</div>
                        <h3>Référencement de base</h3>
                        <div>Ajout de mots-clés stratégiques et indexation sur les moteurs de recherche.</div>
                    </div>
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>1 775,00 $</h1>
                        </div>
                    </div>
                </div>
                <div class="accordions-wrapper">
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>Forfait profil web</h1>
                        </div>
                    </div>
                    <div class="accordions">
                        <h3>5 pages</h3>
                        <div>Pages standards. Les éléments de programmation sont en supplément.</div>
                        <h3>Slider avec 5 images gratuites</h3>
                        <div>Le slider est ajusté a vos besoins. Les images gratuites sont des images pouvant représenter votre entreprise. La grandeur des images sera la même que celle du slider.</div>
                        <h3>Animations</h3>
                        <div>Animations des menus et des éléments de contenu.</div>
                        <h3>Formulaire de contact</h3>
                        <div>Un formulaire permettant aux clients de vous contacter. Un formulaire de contact comprend entre 5 et 10 champs de texte.</div>
                        <h3>Blog, forum ou articles</h3>
                        <div>Gardez contact avec vos clients à l'aide d'un blog, d'un forum ou d'articles informatifs. Un système de gestion de contenu vous permettra d'en faire la gestion.</div>
                        <h3>Design personnalisé</h3>
                        <div>Nous construisons sur mesure chacune des parties de chacune de vos pages.</div>
                        <h3>Hébergement</h3>
                        <div>Hébergement gratuit pour une durée d'un an.</div>
                        <h3>20 adresses courriel</h3>
                        <div>Si vous avez besoin de plus de 10 adresses courriel, il est possible d'en ajouter à votre forfait.</div>
                        <h3>2 Gb d'Espace disque</h3>
                        <div>Votre pouvez emmagasiner du contenu et de l'information jusqu'à un total de 2 Gb, tout à fait gratuitement.</div>
                        <h3>Galerie photo et vidéo</h3>
                        <div>Une gallerie présentant des images ou des vidéos de votre choix. Au besoin, nous pouvons aussi vous aider à créer vos propres vidéos.</div>
                        <h3>Référencement ciblé</h3>
                        <div>Ajout de mots-clés stratégiques et indexation sur les moteurs de recherche. Définition d'un plan de référencement stratégique.</div>
                        <h3>Réseaux sociaux</h3>
                        <div>Inscription sur les réseaux sociaux de votre choix et mise en lien avec votre site.</div>
                    </div>
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>2 800,00 $</h1>
                        </div>
                    </div>
                </div>
                <div class="accordions-wrapper">
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>Forfait de base</h1>
                        </div>
                    </div>
                    <div class="accordions">
                        <h3>5 pages</h3>
                        <div>Pages standards. Les éléments de programmation sont en supplément.</div>
                        <h3>Slider avec 5 images gratuites</h3>
                        <div>Le slider est ajusté a vos besoins. Les images gratuites sont des images pouvant représenter votre entreprise. La grandeur des images sera la même que celle du slider.</div>
                        <h3>Animations</h3>
                        <div>Animations des menus et des éléments de contenu.</div>
                        <h3>Formulaire de contact</h3>
                        <div>Un formulaire permettant aux clients de vous contacter. Un formulaire de contact comprend entre 5 et 10 champs de texte.</div>
                        <h3>Hébergement</h3>
                        <div>Hébergement gratuit pour une durée d'un an.</div>
                        <h3>10 adresses courriel</h3>
                        <div>Si vous avez besoin de plus de 10 adresses courriel, il est possible d'en ajouter à votre forfait.</div>
                        <h3>1 Gb d'Espace disque</h3>
                        <div>Votre pouvez emmagasiner du contenu et de l'information jusqu'à un total de 1 Gb, tout à fait gratuitement.</div>
                        <h3>Galerie photo et vidéo</h3>
                        <div>Une gallerie présentant des images ou des vidéos de votre choix. Au besoin, nous pouvons aussi vous aider à créer vos propres vidéos.</div>
                        <h3>Référencement de base</h3>
                        <div>Ajout de mots-clés stratégiques et indexation sur les moteurs de recherche.</div>
                    </div>
                    <div class="rightPartHeader">
                        <div class="upperBorder grey">
                            <div class="upperLeftBorder"></div>
                            <div class="upperCenterLeftBorder"></div>
                            <div class="upperCenterRightBorder"></div>
                            <div class="upperRightBorder"></div>
                        </div>
                        <div id="rightPartHeaderContent">
                            <h1>1 775,00 $</h1>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>
