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
$emailSuccessHandler->setSubject('All elements form test');

/**
 * Configure the text input field
 * Filters: Trim
 * Validators: Required
 *
 * This example uses the addFilter and addValidator methods which are
 * used to add single filters or validators at a time.
 *
 * See documentation for more help with field configuration
 */
$text = new iPhorm_Element('text_input');             // Create the text_input element - text_input must be the same as the name attribute of your form element in the HTML
$text->addFilter('trim');                             // Add the Trim filter to the element
$text->addValidator('required');                      // Add the Required validator to the element (makes the field required)
$form->addElement($text);                             // Add the element to the form

/**
 * Configure the single select field
 * Filters: Trim
 * Validators: Required
 *
 * See documentation for more help with field configuration
 */
$singleSelect = new iPhorm_Element('single_select');       // Create the single_select element - single_select must be the same as the name attribute of your form element in the HTML
$singleSelect->addFilter('trim');                          // Add the Trim filter to the element
$singleSelect->addValidator('required');                   // Add the Required validator to the element
$form->addElement($singleSelect);                          // Add the element to the form

/**
 * Configure the multi select field, note the [] at the end of the
 * name indicating a multiple element
 * Filters: Trim
 * Validators: Required
 */
$multiSelect = new iPhorm_Element('multi_select[]');               // Create the multi_select element - multi_select must be the same as the name attribute of your form element in the HTML
$multiSelect->addFilter('trim');                          // Add the Trim filter to the element
$multiSelect->addValidator('required');                   // Add the Required validator to the element
$form->addElement($multiSelect);                          // Add the element to the form

/**
 * Configure the single checkbox field
 * Filters: Trim
 * Validators: Required
 */
$singleCheckbox = new iPhorm_Element('single_checkbox');     // Create the single_checkbox element - single_checkbox must be the same as the name attribute of your form element in the HTML
$singleCheckbox->addFilter('trim');                          // Add the Trim filter to the element
$singleCheckbox->addValidator('required');                   // Add the Required validator to the element
$form->addElement($singleCheckbox);                          // Add the element to the form

/**
 * Configure the multi checkbox field, note the [] at the end of the
 * name indicating a multiple element
 * Filters: Trim
 * Validators: Required
 */
$multiCheckbox = new iPhorm_Element('multi_checkbox[]');     // Create the multi_checkbox[] element - multi_checkbox[] must be the same as the name attribute of your form element in the HTML
$multiCheckbox->addFilter('trim');                           // Add the Trim filter to the element
$multiCheckbox->addValidator('required');                    // Add the Required validator to the element
$form->addElement($multiCheckbox);                           // Add the element to the form

/**
 * Configure the radio button field
 * Filters: Trim
 * Validators: Required
 */
$radioButton = new iPhorm_Element('radio_button');         // Create the radio_button element - radio_button must be the same as the name attribute of your form element in the HTML
$radioButton->addFilter('trim');                           // Add the Trim filter to the element
$radioButton->addValidator('required');                    // Add the Required validator to the element
$form->addElement($radioButton);                           // Add the element to the form

/**
 * Configure the textarea field
 * Filters: Trim
 * Validators: Required
 */
$textarea = new iPhorm_Element('textarea_input');       // Create the textarea_input element - textarea_input must be the same as the name attribute of your form element in the HTML
$textarea->addFilter('trim');                           // Add the Trim filter to the element
$textarea->addValidator('required');                    // Add the Required validator to the element
$form->addElement($textarea);                           // Add the element to the form

/**
 * Configure the CAPTCHA field
 * Filters: Trim
 * Validators: Required, Identical
 */
$captcha = new iPhorm_Element('type_the_word');                                             // Create the type_the_word (captcha) element - type_the_word must be the same as the name attribute of your form element in the HTML
$captcha->addFilter('trim');                                                                // Add the Trim filter to the element
$captcha->addValidators(array('required', array('identical', array('token' => 'dark'))));  // Add the Required and Identical validators to the element
$captcha->setSkipRender(true);                                                              // Do not show the value in the email
$form->addElement($captcha);                                                                // Add the captcha element to the form
