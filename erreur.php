<?php
$status = $_SERVER['REDIRECT_STATUS'];
//$codes = array(
//        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
//        404 => array('404 Not Found', 'The document/file requested was not found.'),
//        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
//        408 => array('408 Request Timeout', 'Your browser failed to sent a request in the time allowed by the server.'),
//        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
//        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
//        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
//        );

if (strlen($status) != 3 && isset($_GET['erreur']))
{
    $status = $_GET['erreur'];
}

$codes = array(
    403 => array('403', 'ACCESS FORBIDDEN', 'The server has refused to fulfill your request.'),
    404 => array('404', 'PAGE NOT FOUND', 'The document/file requested was not found.'),
    405 => array('405', 'METHOD NOT ALLOWED', 'The method specified in the Request-Line is not allowed for the specified resource.'),
    408 => array('408', 'REQUEST TIMEOUT', 'Your browser failed to sent a request in the time allowed by the server.'),
    500 => array('500', 'INTERNAL SERVER ERROR', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
    502 => array('502', 'BAD GATEWAY', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
    504 => array('504', 'GATEWAY TIMEOUT', 'The upstream server failed to send a request in the time allowed by the server.')
);

//$title = $codes[$status][0];
//$message = $codes[$status][1];
list($code, $title, $message) = $codes[$status];
if ($title == false || strlen($status) != 3)
{
    $message = 'Please supply a valid status code.';
}

//echo '<p><h1>' . $title . '</h1></p>' .
//     '<p>' . $message . '</p>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Erreur <?php echo $status; ?></title>
        <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <style type="text/css">
            html {
                height: 100%;
            }
            body {
                background: #060606 url('./images/error_background.png') top center no-repeat;
                margin: 0;
                padding: 0;
                height: 100%;
            }
            h1 {
                font-family: 'Oswald', sans-serif;
                color: green;
                font-size: 182px;
                margin: 0 auto;
                display: table;
            }
            h2 {
                font-family: 'Oswald', sans-serif;
                color: rgb(175, 175, 175);
                font-size: 40px;
                margin: 0 auto;
                display: table;
            }
            .upperBorder {
                width: 100%;
                height: 1px;
            }
            .upperLeftBorder {
                float: left;
                width: 25%;
                height: 1px;
                background-image: linear-gradient(left , #000000, #008806);
                background-image: -o-linear-gradient(left , #000000, #008806);
                background-image: -moz-linear-gradient(left , #000000, #008806);
                background-image: -webkit-linear-gradient(left , #000000, #008806);
                background-image: -ms-linear-gradient(left , #000000, #008806);
                background-image: linear, left top, left bottom, from(#000000), to(#008806);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#000000,endColorstr=#008806,GradientType=1);
            }
            .upperCenterLeftBorder {
                float: left;
                width: 25%;
                height: 1px;
                background-image: linear-gradient(left, #008806, #6aa56d);
                background-image: -o-linear-gradient(left, #008806, #6aa56d);
                background-image: -moz-linear-gradient(left, #008806, #6aa56d);
                background-image: -webkit-linear-gradient(left, #008806, #6aa56d);
                background-image: -ms-linear-gradient(left, #008806, #6aa56d);
                background-image: linear, left top, left bottom, from(#008806), to(#6aa56d);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#008806,endColorstr=#6aa56d,GradientType=1);
            }
            .upperCenterRightBorder {
                float: left;
                width: 25%;
                height: 1px;
                background-image: linear-gradient(left, #6aa56d, #008806);
                background-image: -o-linear-gradient(left, #6aa56d, #008806);
                background-image: -moz-linear-gradient(left, #6aa56d, #008806);
                background-image: -webkit-linear-gradient(left, #6aa56d, #008806);
                background-image: -ms-linear-gradient(left, #6aa56d, #008806);
                background-image: linear, left top, left bottom, from(#6aa56d), to(#008806);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#6aa56d,endColorstr=#008806,GradientType=1);
            }
            .upperRightBorder {
                float: left;
                width: 25%;
                height: 1px;
                background-image: linear-gradient(left, #008806, #000000);
                background-image: -o-linear-gradient(left, #008806, #000000);
                background-image: -moz-linear-gradient(left, #008806, #000000);
                background-image: -webkit-linear-gradient(left, #008806, #000000);
                background-image: -ms-linear-gradient(left, #008806, #000000);
                background-image: linear, left top, left bottom, from(#008806), to(#000000);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#008806,endColorstr=#000000,GradientType=1);
            }
            #container {
                display: table;
                margin: -108px auto 0 auto;
                position: relative;
                top: 32%;
            }
            .topBorder {
                margin-top: -34px;
            }
        </style>

    </head>
    <body>

        <div id="container">
            <h1 id="errorCode"><?php echo $code; ?></h1>
            <div id="codeHolder"></div>
            <div class="upperBorder topBorder">
                <div class="upperLeftBorder"></div>
                <div class="upperCenterLeftBorder"></div>
                <div class="upperCenterRightBorder"></div>
                <div class="upperRightBorder"></div>
            </div>
            <h2 id="errorTitle"><?php echo $title; ?></h2>
            <div id="holder"></div>
            <div class="upperBorder">
                <div class="upperLeftBorder"></div>
                <div class="upperCenterLeftBorder"></div>
                <div class="upperCenterRightBorder"></div>
                <div class="upperRightBorder"></div>
            </div>
        </div>
        <script type="text/javascript" src="js/raphael-min.js"></script>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript">
            window.onload = function(){
                var codeContainerWidth = $('#errorCode').width() + 50;
                var codeContainerHeight = $('#errorCode').height();
                $('#errorCode').hide();
                var codeTextPositionX = codeContainerWidth / 2;
                var codeTextPositionY = codeContainerHeight / 2;
                var x = Raphael("codeHolder", codeContainerWidth, codeContainerHeight);
                x.text(codeTextPositionX, codeTextPositionY, "<?php echo $code; ?>").attr({
                    fill: "90-#000:0-#008000:50-#fff:100",
                    'fill-opacity': 0.8,
                    'font-size': 185,
                    'font-family':'Oswald, sans-serif',
                    'font-weight':'bold'
                });

                var containerWidth = $('#errorTitle').width() + 50;
                var containerHeight = $('#errorTitle').height();
                $('#errorTitle').hide();
                var textPositionX = containerWidth / 2;
                var textPositionY = containerHeight / 2;
                var r = Raphael("holder", containerWidth, containerHeight);
                r.text(textPositionX, textPositionY, "<?php echo $title; ?>").attr({
                    fill: "90-#000-#fff",
                    'fill-opacity': 0.8,
                    'font-size': 42,
                    'font-family':'Oswald, sans-serif',
                    'font-weight':'bold'
                });
            };
        </script>
    </body>
</html>