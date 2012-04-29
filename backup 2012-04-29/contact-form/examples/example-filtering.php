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
        <form class="iphorm" action="process.php?form=filtering" method="post" enctype="multipart/form-data">
            <div class="iphorm-wrapper">
            <h1>iPhorm - Ajax contact form</h1>
            <h2>You will need to purchase the form to see the filtered values in your email inbox :). Fields can
                        have as many filters as you need on them.</h2>
            <div class="iphorm-inner">
                <div class="form-title">Filtering examples</div>
                   <div class="iphorm-message"></div>
                   <div class="iphorm-container clearfix">
                        <!-- Begin Trim filter element -->
                        <div class="element-wrapper trim_filter-element-wrapper clearfix">
                            <label for="trim_filter">Trim filter <span class="red">*</span></label>
                            <div class="input-wrapper trim_filter-input-wrapper">
                                <input class="trim_filter-element" id="trim_filter" type="text" name="trim_filter" />
                            </div>
                            <p class="description">White space removed from the start and end</p>
                        </div>
                        <!-- End Trim filter element -->
                        <!-- Begin Strip Tags filter element -->
                        <div class="element-wrapper strip_tags_filter-element-wrapper clearfix">
                            <label for="strip_tags_filter">Strip tags filter <span class="red">*</span></label>
                            <div class="input-wrapper strip_tags_filter-input-wrapper">
                                <input class="strip_tags_filter-element" id="strip_tags_filter" type="text" name="strip_tags_filter" />
                            </div>
                            <p class="description">Strips all HTML tags excluding any you want to allow</p>
                        </div>
                        <!-- End Strip Tags filter element -->
                        <!-- Begin Digits filter element -->
                        <div class="element-wrapper digits_filter-element-wrapper clearfix">
                            <label for="digits_filter">Digits filter <span class="red">*</span></label>
                            <div class="input-wrapper digits_filter-input-wrapper">
                                <input class="digits_filter-element" id="digits_filter" type="text" name="digits_filter" />
                            </div>
                            <p class="description">Removes all characters that are not digits</p>
                        </div>
                        <!-- End Digits filter element -->
                        <!-- Begin Alphanumeric filter element -->
                        <div class="element-wrapper alphanumeric_filter-element-wrapper clearfix">
                            <label for="alphanumeric_filter">Alphanumeric filter <span class="red">*</span></label>
                            <div class="input-wrapper alphanumeric_filter-input-wrapper">
                                <input class="alphanumeric_filter-element" id="alphanumeric_filter" type="text" name="alphanumeric_filter" />
                            </div>
                            <p class="description">Removes all characters that are not alphanumeric</p>
                        </div>
                        <!-- End Alphanumeric filter element -->
                        <!-- Begin Alpha filter element -->
                        <div class="element-wrapper alpha_filter-element-wrapper clearfix">
                            <label for="alpha_filter">Alphabet filter <span class="red">*</span></label>
                            <div class="input-wrapper alpha_filter-input-wrapper">
                                <input class="alpha_filter-element" id="alpha_filter" type="text" name="alpha_filter" />
                            </div>
                            <p class="description">Removes all characters that are not alphabetic</p>
                        </div>
                        <!-- End Alpha filter element -->
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