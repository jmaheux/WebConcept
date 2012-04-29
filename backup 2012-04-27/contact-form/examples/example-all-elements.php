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
        <form class="iphorm" action="process.php?form=all-elements" method="post" enctype="multipart/form-data">
            <div class="iphorm-wrapper">
            <h1>iPhorm - Ajax contact form</h1>
            <h2>Easy to install into any PHP / HTML web page</h2>
            <div class="iphorm-inner">
                <div class="form-title">All form elements example</div>
                   <div class="iphorm-message"></div>
                   <div class="iphorm-container clearfix">
                        <!-- Begin Text input element -->
                        <div class="element-wrapper text_input-element-wrapper clearfix">
                            <label for="text_input">Text input <span class="red">*</span></label>
                            <div class="input-wrapper text_input-input-wrapper">
                                <input class="text_input-element iphorm-tooltip" id="text_input" type="text" name="text_input" title="Example text input field tooltip" />
                            </div>
                        </div>
                        <!-- End Text input element -->
                        <!-- Begin Single select element -->
                        <div class="element-wrapper single_select-element-wrapper clearfix">
                            <label for="single_select">Single select <span class="red">*</span></label>
                            <div class="input-wrapper single_select-input-wrapper clearfix">
                                <select class="iphorm-tooltip" id="single_select" name="single_select" title="An example tootip on select element">
                                    <option value="">Please select</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Single select element -->
                        <!-- Multi Select element -->
                        <div class="element-wrapper multi_select-element-wrapper clearfix">
                            <label for="multi_select">Multi select <span class="red">*</span></label>
                            <div class="input-wrapper multi_select-input-wrapper clearfix">
                                <select id="multi_select" name="multi_select[]" multiple="multiple">
                                    <option value="Multi option 1">Multi option 1</option>
                                    <option value="Multi option 2">Multi option 2</option>
                                    <option value="Multi option 3">Multi option 3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Multi Select element -->
                        <!-- Single Checkbox element -->
                        <div class="element-wrapper single_checkbox-element-wrapper clearfix">
                            <div class="input-wrapper single_checkbox-input-wrapper clearfix">
                                <input id="single_checkbox" name="single_checkbox" value="1" type="checkbox" /> <label for="single_checkbox">Single checkbox element <span class="red">*</span></label>
                            </div>
                        </div>
                        <!-- End Single Checkbox element -->
                        <!-- Multi Checkbox element -->
                        <div class="element-wrapper multi_checkbox-element-wrapper clearfix">
                            <label>Multi checkbox <span class="red">*</span></label>
                            <div class="input-wrapper multi_checkbox-input-wrapper clearfix">
                                <input id="multi_checkbox-One" name="multi_checkbox[]" value="One" type="checkbox" /> <label for="multi_checkbox-One">One</label><br />
                                <input id="multi_checkbox-Two" name="multi_checkbox[]" value="Two" type="checkbox" /> <label for="multi_checkbox-Two">Two</label><br />
                                <input id="multi_checkbox-Three" name="multi_checkbox[]" value="Three" type="checkbox" /> <label for="multi_checkbox-Three">Three</label><br />
                                <input id="multi_checkbox-Four" name="multi_checkbox[]" value="Four" type="checkbox" /> <label for="multi_checkbox-Four">Four</label><br />
                                <input id="multi_checkbox-Five" name="multi_checkbox[]" value="Five" type="checkbox" /> <label for="multi_checkbox-Five">Five</label><br />
                            </div>
                        </div>
                        <!-- End Multi Checkbox element -->
                        <!-- Begin Radio element -->
                        <div class="element-wrapper radio_button-element-wrapper clearfix">
                            <label>Radio button <span class="red">*</span></label>
                            <div class="input-wrapper radio_button-input-wrapper clearfix">
                                <input id="radio_button-Yes" name="radio_button" value="Yes" type="radio" /> <label for="radio_button-Yes">Yes</label>
                                <input id="radio_button-No" name="radio_button" value="No" type="radio" /> <label for="radio_button-No">No</label>
                            </div>
                        </div>
                        <!-- End Radio element -->
                        <!-- Begin Textarea element -->
                        <div class="element-wrapper textarea_input-element-wrapper clearfix">
                            <label for="textarea_input">Textarea <span class="red">*</span></label>
                            <div class="input-wrapper textarea_input-input-wrapper clearfix">
                                <textarea class="textarea_input-element" id="textarea_input" name="textarea_input" rows="7" cols="45"></textarea>
                            </div>
                        </div>
                        <!-- End Textarea element -->
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