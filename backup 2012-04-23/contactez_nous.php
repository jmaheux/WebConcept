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
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu ul li:eq(5)').addClass('selected');
            });
        </script>
    </temp:contentPlaceHolder>

    <temp:contentPlaceHolder id="content">
        <div class="container">
            <h1 id="greetings">Bonjour et bienvenu sur le site de Web Concept</h1>
        </div>
    </temp:contentPlaceHolder>
</temp:templateContent>