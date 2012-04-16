<?php
require_once './classes/template.php';
$temp = new template("master.php");
$temp->render();
?>
<temp:templateContent xmlns:temp="http://templates"
                      xmlns="http://www.w3.org/1999/xhtml">
    <temp:contentPlaceHolder id="head">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One|Righteous' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/index.css" />
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="script">
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery-eclipse-1.0.js.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu ul li:eq(0)').addClass('selected');
                $(document).ready(function(){
                    $('.slices').startSlide(5000);
                    //$($('.slices')[0]).show();
                });
            });
        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="topBox">
        <div class="content1">
            <h2></h2>
        </div>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <div id="slice1" class="slices">
                <h1>Conception de sites web sur mesure</h1>
                <h2 class="firstTitle">Nous concevons votre site web,</h2>
                <img src="images/website-construction.png" />
                <div class="clear"></div>
                <h2 class="secondTitle">selon vos critères, vos besoins et vos attentes.</h2>
                <div class="clear"></div>
            </div>
            <div id="slice2" class="slices">
                <h1>Création de sites web HTML5 et CSS3</h1>
                <h2 class="firstTitle">Des sites web à la fine pointe de la technologie.</h2>
                <img src="images/html5-css3.png" />
                <div class="clear"></div>
                <h2 class="secondTitle">Du contenu interactif afin de mieux promouvoir votre entreprise.</h2>
                <div class="clear"></div>
            </div>
            <div id="slice3" class="slices">
                <h1>Sites internet compatibles à 99%</h1>
                <h2 class="firstTitle">Des sites web compatibles sur toutes les plateformes.</h2>
                <img src="images/compatible.png" />
                <div class="clear"></div>
                <h2 class="secondTitle">Conformes à tous les standards.</h2>
                <div class="clear"></div>
            </div>
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>