<?php
require_once './classes/template.php';
$temp = new template("master.php");
$temp->render();
?>
<temp:templateContent xmlns:temp="http://templates"
                      xmlns="http://www.w3.org/1999/xhtml">
    <temp:contentPlaceHolder id="head">
        <link rel="stylesheet" type="text/css" href="css/about.css" />
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="script">
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu ul li:eq(3)').addClass('selected');
            });
        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="topFloatingBox">
        <div id="topFloatingDiv">
            <h1 id="topFloatingTitle"> propos de Web Concept</h1>
            <div class="separatorLine" style="margin-left:9px;"></div>
            <h1 id="topFloatingTitleText">Lorem ipsum ladea teteal oerloea erfeattera lorep isum ladea</h1>
        </div>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <div id="leftPart">
                <h1>Notre mission</h1>
                <p>
                    Web Concept est une entreprise jeune et passionnée. Notre équipe débordante d'enthousiasme
                    est prête à tout mettre en œuvre afin de réaliser les divers projets qui lui sont confiés.
                    Que ce soit pour créer une simple vitrine sur le web ou encore un portail d'entreprise
                    complet, notre équipe d'experts va vous conseiller et vous guider tout au long du
                    processus de développement.
                </p>
                <p>
                    Nous nous donnons comme mission de rendre le web plus accessible aux individus et aux
                    entreprises québécoises. En produisant des sites web de qualités, supportée par tous les
                    navigateurs, avec les technologies les plus récentes et conforme avec toutes les normes de
                    programmation, Web Concept est fier de participer à initier ou à prolonger le contact des
                    entreprises d’ici à l’air numérique.
                </p>
                <p>
                    Nous avons également à cœur l’intérêt de nos employés. Nous croyons qu’il est important que
                    l’entreprise puisse s’adapter à tous les employés, plutôt que chaque employé ait à s’adapter
                    à l’entreprise. Nous encourageons l’innovation et l’initiative au sein de l’organisation. Si
                    deux têtes valent mieux qu’une, imaginez ce que vaut une équipe au complet.
                </p>
            </div>
            <div id="rightPart">
                <div id="rightPartHeader">
                    <div class="upperBorder grey">
                        <div class="upperLeftBorder"></div>
                        <div class="upperCenterLeftBorder"></div>
                        <div class="upperCenterRightBorder"></div>
                        <div class="upperRightBorder"></div>
                    </div>
                    <div id="rightPartHeaderContent">
                        Notre équipe
                    </div>
                </div>
                <div id="rightPartContent">
                    <div class="upperBorder grey">
                        <div class="upperLeftBorder"></div>
                        <div class="upperCenterLeftBorder"></div>
                        <div class="upperCenterRightBorder"></div>
                        <div class="upperRightBorder"></div>
                    </div>
                    <div class="rightPartLine firstLine">
                        <div class="portraitHolder">
                            <img alt="James Maheux" src="./images/portrait_james.png" />
                        </div>
                        <div class="fullName">James Maheux</div>
                        <div class="fullTitle">Dieu tout puissant</div>
                        <div class="iconsHolder">
                            <span class="skypeIcon icon"></span>
                            <span class="twitterIcon icon"></span>
                            <span class="facebookIcon icon"></span>
                        </div>
                    </div>
                    <div class="rightPartLine">
                        <div class="portraitHolder">
                            <img alt="Daniel Taillefer" src="./images/portrait_dan.png" />
                        </div>
                        <div class="fullName">Daniel Taillefer</div>
                        <div class="fullTitle">Marie-Madeleine</div>
                        <div class="iconsHolder">
                            <span class="skypeIcon icon"></span>
                            <span class="twitterIcon icon"></span>
                            <span class="facebookIcon icon"></span>
                        </div>
                    </div>
                    <div class="rightPartLine">
                        <div class="portraitHolder">
                            <img alt="Philippe de Massia" src="./images/portrait_phil.png" />
                        </div>
                        <div class="fullName">Philippe de Massia</div>
                        <div class="fullTitle">Pécheur</div>
                        <div class="iconsHolder">
                            <span class="skypeIcon icon"></span>
                            <span class="twitterIcon icon"></span>
                            <span class="facebookIcon icon"></span>
                        </div>
                    </div>
                </div>
                <div id="rightPartFooter">
                    <div class="upperBorder grey">
                        <div class="upperLeftBorder"></div>
                        <div class="upperCenterLeftBorder"></div>
                        <div class="upperCenterRightBorder"></div>
                        <div class="upperRightBorder"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>
