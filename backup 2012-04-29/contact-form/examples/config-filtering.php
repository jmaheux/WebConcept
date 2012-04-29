<?php

/**
 * The success message displayed when the form is successfully submitted
 */
$successMessage = '<div class="success-message">Your message has been sent, thank you.</div>';
$form->setSuccessMessage($successMessage);

/**
 * Configure the recipients of the message.  You can add multiple email
 * addresses by adding one on each line inside the array enclosed in quotes,
 * separated by commas. E.g.
 * $recipients = array(
 *     'recipient1@example.com',
 *     'recipient2@example.com'
 * );
 */
$recipients = array(
    'spam@freerangewebdesign.com'
);

/**
 * Create the email success handler, this will email the
 * contents of the form to the set recipients when the form
 * is successfully submitted.
 */
$emailSuccessHandler = new iPhorm_SuccessHandler_Email($form);
$emailSuccessHandler->setRecipients($recipients);
$emailSuccessHandler->setSubject('Filtering form test');

/**
 * Configure the trim filtered field
 * Filters: Trim
 * Validators: Required
 *
 * See documentation for more help with field configuration
 */
$trimElement = new iPhorm_Element('trim_filter');
$trimElement->addValidator('required');
$trimElement->addFilter('trim');
$form->addElement($trimElement);

/**
 * Configure the strip tags filtered field
 * Filters: StripTags
 * Validators: Required
 *
 * See documentation for more help with field configuration
 */
$stripTagsElement = new iPhorm_Element('strip_tags_filter');
$stripTagsElement->addValidator('required');
$stripTagsElement->addFilter('stripTags');
$form->addElement($stripTagsElement);

/**
 * Configure the digits filtered field
 * Filters: Digits
 * Validators: Required
 */
$digitsElement = new iPhorm_Element('digits_filter');
$digitsElement->addValidator('required');
$digitsElement->addFilter('digits');
$form->addElement($digitsElement);

/**
 * Configure the alphanumeric filtered field
 * Filters: Alphanumeric
 * Validators: Required
 */
$alphanumericElement = new iPhorm_Element('alphanumeric_filter');
$alphanumericElement->addValidator('required');
$alphanumericElement->addFilter('alphaNumeric');
$form->addElement($alphanumericElement);

/**
 * Configure the alphabet filtered field
 * Filters: Alpha
 * Validators: Required
 */
$alphaElement = new iPhorm_Element('alpha_filter');
$alphaElement->addValidator('required');
$alphaElement->addFilter('alpha');
$form->addElement($alphaElement);

/**
 * Configure the CAPTCHA field
 * Filters: Trim
 * Validators: Required, Identical
 */
$captcha = new iPhorm_Element('type_the_word');                                             // Create the type_the_word (captcha) element - type_the_word must be the same as the name attribute of your form element in the HTML
$captcha->addFilter('trim');                                                                // Add the Trim filter to the element
$captcha->addValidators(array('required', array('identical', array('token' => 'light'))));  // Add the Required and Identical validators to the element
$captcha->setSkipRender(true);                                                              // Do not show the value in the email
$form->addElement($captcha);                                                                // Add the captcha element to the form
