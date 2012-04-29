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
$emailSuccessHandler->setSubject('File upload form test');

/**
 * Configure the name element
 * Filters: Trim
 * Validators: Required
 *
 * This example uses the addFilter and addValidator methods which are
 * used to add single filters or validators at a time.
 *
 * See documentation for more help with element configuration
 */
$name = new iPhorm_Element('name');             // Create the name element - name must be the same as the name attribute of your form element in the HTML
$name->addFilter('trim');                       // Add the Trim filter to the element
$name->addValidator('required');                // Add the Required validator to the element (makes the field required)
$form->addElement($name);                       // Add the element to the form

/**
 * Configure the email element.
 * Filters: Trim
 * Validators: Required, Email
 *
 * See documentation for more help with element configuration
 */
$email = new iPhorm_Element('email');               // Create the email element - email must be the same as the name attribute of your form element in the HTML
$email->addFilter('trim');                          // Add the Trim filter to the element
$email->addValidators(array('required', 'email'));  // Add the Required and Email validators to the element
$form->addElement($email);                          // Add the element to the form

/**
 * Configure the message element
 * Filters: Trim
 * Validators: Required
 */
$message = new iPhorm_Element('message');             // Create the message element - message must be the same as the name attribute of your form element in the HTML
$message->addFilter('trim');                          // Add the Trim filter to the element
$message->addValidator('required');                   // Add the Required validator to the element
$form->addElement($message);                          // Add the element to the form

/**
 * Configure the upload element
 * Filters: (None)
 * Validators: FileUpload (Added automatically)
 */
$upload = new iPhorm_Element_File('upload');
$upload->setRequired(true);                             // Optionally set the field required
$upload->setMaximumFileSize(10485760);                  // Optionally set a maximum size (10MB)
$form->addElement($upload);
$emailSuccessHandler->addAttachmentElement($upload);    // Attach to email

/**
 * Configure the grouped upload element
 * Filters: (None)
 * Validators: FileUpload (Added automatically)
 */
$uploads = new iPhorm_Element_File('uploads[]');
$uploads->setRequired(true);                                         // Optionally set the field required
$uploads->setRequiredCount(2);                                       // Optionally require 2 files minumum
$uploads->setAllowedExtensions(array('gif', 'jpeg', 'jpg', 'png'));  // Optionally limit file extensions
$uploads->setMaximumFileSize(1048576);                               // Optionally set a maximum size (1MB)
$form->addElement($uploads);
$emailSuccessHandler->addAttachmentElement($uploads);                // Attach to email

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
