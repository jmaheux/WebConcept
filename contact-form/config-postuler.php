<?php

/* -----------------
 * The success message displayed when the form is successfully submitted
 ------------------- */
$successMessage = '<p class="message_green">Merci de nous avoir contacté, votre message sera pris en compte d\'ici peu</p>';
$form->setSuccessMessage($successMessage);





/* -----------------
 * Email Recipients
 ------------------- */
/**
 * You can add multiple email
 * addresses by adding one on each line inside the array enclosed in quotes,
 * separated by commas. E.g.
 * $recipients = array(
 *     'recipient1@example.com',
 *     'recipient2@example.com'
 * );
 */
$recipients = array(
    'xtremis@hotmail.com'
);





/* -----------------
 * Form Handler 
 ------------------- */
/**
 * Create the email success handler, this will email the
 * contents of the form to the set recipients when the form
 * is successfully submitted.
 */
$emailSuccessHandler = new iPhorm_SuccessHandler_Email($form);
$emailSuccessHandler->setRecipients($recipients);
$type="";

$emailSuccessHandler->setSubject('Contact pour une démonstration provenant du site UMANA : %nom%');






/* -----------------
 * Form Fields
  ------------------- */
 
 
 /**
 * When adding new fields first add HTML to your form then simply
 * copy/paste PHP below and modify to match your new field
 */



/* NAME */
$name = new iPhorm_Element('nom');   // Create the name element - name must be the same as the name attribute of your form element in the HTML
$name->addFilter('trim');             // Add the Trim filter to the element
$name->addValidator('required');      // Add the Required validator to the element (makes the field required)
$form->addElement($name);             // Add the element to the form



/* EMAIL */
$email = new iPhorm_Element('email'); 
$email->addFilter('trim');
$email->addValidators(array('required', 'email'));
$form->addElement($email);



/* PHONE */

$phone = new iPhorm_Element('téléphone');
$phone->addFilter('trim');
//$phone->addValidator('required'); 
$form->addElement($phone);

/* TAILLE ENTREPRISE */
$singleSelect = new iPhorm_Element('taille');       // Create the single_select element - single_select must be the same as the name attribute of your form element in the HTML
$singleSelect->addFilter('trim');                          // Add the Trim filter to the element
$singleSelect->addValidator('required');                   // Add the Required validator to the element
$form->addElement($singleSelect);                          // Add the element to the form


//$multiSelect = new iPhorm_Element('multi_select[]');               // Create the multi_select element - multi_select must be the same as the name attribute of your form element in the HTML
//$multiSelect->addFilter('trim');                          // Add the Trim filter to the element
//$multiSelect->addValidator('required');                   // Add the Required validator to the element
//$form->addElement($multiSelect);                          // Add the element to the form

$multiCheckbox = new iPhorm_Element('multi_checkbox[]');     // Create the multi_checkbox[] element - multi_checkbox[] must be the same as the name attribute of your form element in the HTML
$multiCheckbox->addFilter('trim');                           // Add the Trim filter to the element
$multiCheckbox->addValidator('required');                    // Add the Required validator to the element
$form->addElement($multiCheckbox);                           // Add the element to the form

/* adresse */
if (!empty($_POST['adresse'])){
	$adresse = new iPhorm_Element('adresse');
	$adresse->addFilter('trim');
	$form->addElement($adresse);
}

/* prenom */
if (!empty($_POST['prenom'])){
	$prenom = new iPhorm_Element('prenom');
	$prenom->addFilter('trim');
	$form->addElement($prenom);
}


/* cp */
if (!empty($_POST['cp'])){
$cp = new iPhorm_Element('cp');
$cp->addFilter('trim');
$cp->addValidator('required'); 
$form->addElement($cp);
}


/* ville */
if (!empty($_POST['ville'])){
$ville = new iPhorm_Element('ville');
$ville->addFilter('trim');
$ville->addValidator('required'); 
$form->addElement($ville);
}


/* MESSAGE (TEXTAREA) */
$message = new iPhorm_Element('message');
$message->addFilter('trim');
$message->addValidator('required');
$form->addElement($message);







