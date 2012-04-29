<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iPhorm - Ajax Contact Form</title>

<link rel="stylesheet" type="text/css" href="../css/pagestyles.css" /><!-- Page styles -->
<link rel="stylesheet" type="text/css" href="../css/standard.css" /><!-- Contact form styles -->

<script type="text/javascript" src="../js/jquery-1.5.min.js"></script><!-- If your webpage already has the jQuery library you do not need this -->
<script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="../js/iphorm.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>
</head>
<body>
<div class="outside">
    <!-- To copy the form HTML, start here -->
    <div class="iphorm-outer">
        <form class="iphorm" action="process.php?form=validation" method="post" enctype="multipart/form-data">
            <div class="iphorm-wrapper">
            <h1>iPhorm - Ajax contact form</h1>
            <h2>Easy to install into any PHP / HTML web page</h2>
            <div class="iphorm-inner">
                <div class="form-title">Validation examples</div>
                   <div class="iphorm-message"></div>
                   <div class="iphorm-container clearfix">
                        <p>Fields can have as many validators as you need on them. Empty fields are only validated if they are
                        also required.</p>
                        <!-- Begin Length test element -->
                        <div class="element-wrapper between_three_six-element-wrapper clearfix">
                            <label for="between_three_six">String length <span class="red">*</span></label>
                            <div class="input-wrapper between_three_six-input-wrapper">
                                <input class="between_three_six-element" id="between_three_six" type="text" name="between_three_six" />
                            </div>
                            <p class="description">Between 3 and 6 characters allowed (customisable)</p>
                        </div>
                        <!-- End Length test element -->
                        <!-- Begin Digits element -->
                        <div class="element-wrapper digits-element-wrapper clearfix">
                            <label for="digits">Digits</label>
                            <div class="input-wrapper digits-input-wrapper">
                                <input class="digits-element" id="digits" type="text" name="digits" />
                            </div>
                            <p class="description">Only digits allowed</p>
                        </div>
                        <!-- End Digits element -->
                        <!-- Begin Alphanumeric element -->
                        <div class="element-wrapper alphanumeric-element-wrapper clearfix">
                            <label for="alphanumeric">Alphanumeric <span class="red">*</span></label>
                            <div class="input-wrapper alphanumeric-input-wrapper">
                                <input class="alphanumeric-element" id="alphanumeric" type="text" name="alphanumeric" />
                            </div>
                            <p class="description">Only alphanumeric characters allowed</p>
                        </div>
                        <!-- End Alphanumeric element -->
                        <!-- Begin Alphabet element -->
                        <div class="element-wrapper alphabet-element-wrapper clearfix">
                            <label for="alphabet">Alphabet</label>
                            <div class="input-wrapper alphabet-input-wrapper">
                                <input class="alphabet-element" id="alphabet" type="text" name="alphabet" />
                            </div>
                            <p class="description">Only alphabet characters allowed</p>
                        </div>
                        <!-- End Alphabet element -->
                        <!-- Begin Less than 3 element -->
                        <div class="element-wrapper less_than_3-element-wrapper clearfix">
                            <label for="less_than_3">Less than <span class="red">*</span></label>
                            <div class="input-wrapper less_than_3-input-wrapper">
                                <input class="less_than_3-element" id="less_than_3" type="text" name="less_than_3" />
                            </div>
                            <p class="description">Must be less than 3 numerically (customisable)</p>
                        </div>
                        <!-- End Less than 3 element -->
                        <!-- Begin Greater than 3 element -->
                        <div class="element-wrapper greater_than_3-element-wrapper clearfix">
                            <label for="greater_than_3">Greater than</label>
                            <div class="input-wrapper greater_than_3-input-wrapper">
                                <input class="greater_than_3-element" id="greater_than_3" type="text" name="greater_than_3" />
                            </div>
                            <p class="description">Must be greater than 3 numerically (customisable)</p>
                        </div>
                        <!-- End Greater than 3 element -->
                        <!-- Begin Captcha element -->
                        <div class="element-wrapper captcha-element-wrapper clearfix">
                            <label for="type_the_word">Type the word <span class="red">*</span></label>
                            <div class="input-wrapper captcha-input-wrapper clearfix">
                                <div class="captcha-img"><img src="../images/captcha.png" alt="" /></div>
                                <input id="type_the_word" class="captcha-element" type="text" name="type_the_word" />
                            </div>
                        </div>
                        <!-- End Captcha element -->
                        <!-- Begin Submit button -->
                        <div class="button-wrapper submit-button-wrapper clearfix">
                            <div class="loading-wrapper"><span class="loading">Please wait...</span></div>
                            <div class="button-input-wrapper submit-button-input-wrapper">
                                <input class="submit-element" type="submit" name="contact" value="Send" />
                            </div>
                        </div>
                        <!-- End Submit button -->
                   </div>
               </div>
           </div>
        </form>
    </div>
    <!-- To copy the form HTML, end here -->
</div>
</body>
</html>