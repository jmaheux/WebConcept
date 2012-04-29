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
$emailSuccessHandler->setSubject('Validation form test');

/**
 * Configure the between 3 and 6 validated field
 * Filters: Trim
 * Validators: StringLength min 3 max 6, Required
 *
 * See documentation for more help with field configuration
 */
$between3and6 = new iPhorm_Element('between_three_six');
$between3and6->addValidator('required');
$between3and6->addValidator('stringLength', array('min' => 3, 'max' => 6));
$between3and6->addFilters(array('trim'));
$form->addElement($between3and6);

/**
 * Configure the digits validated field
 * Filters: Trim
 * Validators: Digits
 */
$digits = new iPhorm_Element('digits');
$digits->addValidator('digits');
$digits->addFilters(array('trim'));
$form->addElement($digits);

/**
 * Configure the alphanumeric validated field
 * Filters: Trim
 * Validators: AlphaNumeric, Required
 */
$alphanumeric = new iPhorm_Element('alphanumeric');
$alphanumeric->addValidators(array('alphaNumeric', 'required'));
$alphanumeric->addFilters(array('trim'));
$form->addElement($alphanumeric);

/**
 * Configure the alphabet validated field
 * Filters: Trim
 * Validators: Alpha, Required
 */
$alphabet = new iPhorm_Element('alphabet');
$alphabet->addValidator('alpha');
$alphabet->addFilters(array('trim'));
$form->addElement($alphabet);

/**
 * Configure the less than 3 field
 * Filters: Trim
 * Validators: Less than 3, Required
 */
$lessThan3 = new iPhorm_Element('less_than_3');
$lessThan3->addValidators(array(array('lessThan', array('max' => 3)), 'required'));
$lessThan3->addFilters(array('trim'));
$form->addElement($lessThan3);

/**
 * Configure the greater than 3 field
 * Filters: Trim
 * Validators: Greater than 3
 */
$greaterThan3 = new iPhorm_Element('greater_than_3');
$greaterThan3->addValidator('greaterThan', array('min' => 3));
$greaterThan3->addFilters(array('trim'));
$form->addElement($greaterThan3);

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
