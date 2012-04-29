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
$emailSuccessHandler->setSubject('Arrays form test');

/**
 * Configure the single level deep array element 1 field
 * Filters: Trim
 * Validators: Required
 *
 * See documentation for more help with field configuration
 */
$singleLevelArrayField1 = new iPhorm_Element('single_level[field1]');
$singleLevelArrayField1->addValidator('required');
$singleLevelArrayField1->addFilters(array('trim'));
$singleLevelArrayField1->setIsArray(true); // This is required for fields with array notation!
$form->addElement($singleLevelArrayField1);

/**
 * Configure the single level deep array element 2 field
 * Filters: Trim
 * Validators: Required, Email
 */
$singleLevelArrayField2 = new iPhorm_Element('single_level[field2]');
$singleLevelArrayField2->addValidators(array('required', 'email'));
$singleLevelArrayField2->addFilters(array('trim'));
$singleLevelArrayField2->setIsArray(true); // This is required for fields with array notation!
$form->addElement($singleLevelArrayField2);

/**
 * Configure the second level deep array element 1 field
 * Filters: Trim
 * Validators: Required, Digits
 */
$secondLevelArrayField1 = new iPhorm_Element('first_level[second_level][field1]');
$secondLevelArrayField1->addValidators(array('required', 'digits'));
$secondLevelArrayField1->addFilters(array('trim'));
$secondLevelArrayField1->setIsArray(true); // This is required for fields with array notation!
$form->addElement($secondLevelArrayField1);

/**
 * Configure the second level deep array element 2 field
 * Filters: Digits, Trim
 * Validators: Required, Digits
 */
$secondLevelArrayField2 = new iPhorm_Element('first_level[second_level][field2]');
$secondLevelArrayField2->addValidators(array('required', 'digits'));
$secondLevelArrayField2->addFilters(array('digits', 'trim'));
$secondLevelArrayField2->setIsArray(true); // This is required for fields with array notation!
$form->addElement($secondLevelArrayField2);

/**
 * Configure the second level deep array element multiple
 * Filters: Alpha, Trim
 * Validators: Required
 */
$secondLevelArrayMultiple = new iPhorm_Element('level_one[level_two][]');
$secondLevelArrayMultiple->addValidators(array('required'));
$secondLevelArrayMultiple->addFilters(array('alpha', 'trim'));
$secondLevelArrayMultiple->setIsArray(true); // This is required for fields with array notation!
$form->addElement($secondLevelArrayMultiple);

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
