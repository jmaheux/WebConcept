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
$emailSuccessHandler->setSubject('Multi form test 2');

/**
 * Configure the name field
 * Filters: Trim
 * Validators: Required
 *
 * This example uses the addFilter and addValidator methods which are
 * used to add single filters or validators at a time.
 *
 * See documentation for more help with field configuration
 */
$name = new iPhorm_Element('register_name', 'Name');    // Create the name element - name must be the same as the name attribute of your form element in the HTML
$name->addFilter('trim');                               // Add the Trim filter to the element
$name->addValidator('required');                        // Add the Required validator to the element (makes the field required)
$form->addElement($name);                               // Add the element to the form

/**
 * Configure the email field.
 * Filters: Trim
 * Validators: Required, Email
 *
 * See documentation for more help with field configuration
 */
$email = new iPhorm_Element('register_email', 'Email');     // Create the email element - email must be the same as the name attribute of your form element in the HTML
$email->addFilter('trim');                                  // Add the Trim filter to the element
$email->addValidators(array('required', 'email'));          // Add the Required and Email validators to the element
$form->addElement($email);                                  // Add the element to the form

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
