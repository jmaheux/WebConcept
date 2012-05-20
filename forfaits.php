<?php
require_once './classes/template.php';
$temp = new template("master.php");
$temp->render();
?>
<temp:templateContent xmlns:temp="http://templates"
                      xmlns="http://www.w3.org/1999/xhtml">
    <temp:contentPlaceHolder id="head">

    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="script">
        <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min_accordion.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu ul li:eq(2)').addClass('selected');
            });
        </script>
        <script type="text/javascript" src="js/raphael-min.js"></script>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript">

        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <h1 id="greetings">Bonjour et bienvenu sur le site de Web Concept</h1>
            
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>
