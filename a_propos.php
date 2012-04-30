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
            <div id="rightPart">
                <div id="rightPartHeader">
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
