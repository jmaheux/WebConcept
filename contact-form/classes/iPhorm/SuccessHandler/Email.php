<?php

require_once IPHORM_ROOT . '/classes/Swift/swift_required.php';

class iPhorm_SuccessHandler_Email extends iPhorm_SuccessHandler_Abstract
{
    /**
     * The recipients of the email
     *
     * @var array
     */
    protected $_recipients = array();

    /**
     * The email subject
     *
     * @var string
     */
    protected $_subject = 'Contact enquiry from your website';

    /**
     * Email attachment elements, an array of
     * iPhorm_Element_File's
     *
     * @var array
     */
    protected $_attachmentElements = array();

    /**
     * Email from address, if set will override using the form submitted
     * email
     *
     * @var string
     */
    protected $_fromAddress;

    /**
     * The autoreply information
     *
     * @var array
     */
    protected $_autoReply = array();

    /**
     * Class constructor
     */
    public function __construct(iPhorm $form)
    {
        parent::__construct($form);
        Swift_Preferences::setCharset($form->getCharset());
    }

    /**
     * Set the recipients of the enquiry
     *
     * @param array|string $recipients The array of recipients or a single email address string
     */
    public function setRecipients($recipients)
    {
        $this->clearRecipients();
        $this->addRecipients($recipients);
    }

    /**
     * Add a single recipient
     *
     * @param string $recipient An email address of the recipient
     */
    public function addRecipient($recipient)
    {
        $this->_recipients[] = $recipient;
    }

    /**
     * Add multiple recipients
     *
     * @param array $recipients The array of recipients or a single email address string
     */
    public function addRecipients($recipients)
    {
        if (!is_array($recipients)) {
            $recipients = (array) $recipients;
        }

        foreach ($recipients as $recipient) {
            $this->addRecipient($recipient);
        }
    }

    /**
     * Removes all recipients
     */
    public function clearRecipients()
    {
        $this->_recipients = array();
    }

    /**
     * Get the recipients
     *
     * @return array The array of recipient email addresses
     */
    public function getRecipients()
    {
        return $this->_recipients;
    }

    /**
     * Set the subject
     *
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->_subject = $subject;
    }

    /**
     * Get the subject
     *
     * @return string
     */
    public function getRawSubject()
    {
        return $this->_subject;
    }

    /**
     * Get the subject with placeholder values replaced
     *
     * @return string
     */
    public function getSubject()
    {
        $subject = $this->getRawSubject();

        return $this->_replacePlaceholderValues($subject);
    }

    /**
     * Add an attachment element, the uploaded file will
     * be added as an attachment to the email
     *
     * @param iPhorm_Element_File $element
     */
    public function addAttachmentElement(iPhorm_Element_File $element)
    {
        $this->_attachmentElements[$element->getName()] = $element;
    }

    /**
     * Get all the attachment elements
     *
     * @return array
     */
    public function getAttachmentElements()
    {
        return $this->_attachmentElements;
    }

    /**
     * Set the from address
     *
     * @param $address string The email address
     */
    public function setFromAddress($address)
    {
        $this->_fromAddress = $address;
    }

    /**
     * Get the from address
     *
     * @return string The email address
     */
    public function getFromAddress()
    {
        return $this->_fromAddress;
    }

    /**
     * Sets the autoreply information to send an autoreply to the form user
     *
     * @param string $subject The email subject
     * @param string $htmlFile The name of the html email content file
     * @param string $plainTextFile The name of the plain text email content file
     */
    public function setAutoReply($subject, $htmlFile, $plainTextFile)
    {
        $this->_autoReply = array(
            'subject' => $subject,
            'htmlFile' => $htmlFile,
            'plainTextFile' => $plainTextFile
        );
    }

    /**
     * Sends the email to the set recipients
     */
    public function run()
    {
        // Create new transport to use PHP's mail() function
        $transport = Swift_MailTransport::newInstance();

        // You could use an SMTP server here instead
        //$transport = Swift_SmtpTransport::newInstance('yoursmtpserver.com', 25)->setUsername('yourusername')->setPassword('yourpassword');

        // Create the mailer instance
        $mailer = Swift_Mailer::newInstance($transport);

        // Create a new mail message
        $message = Swift_Message::newInstance();

        // Set the from address
        if ($this->getFromAddress() !== null) {
            $message->setFrom($this->getFromAddress());
        } elseif ($this->_form->getValue('email') !== null) {
            $message->setFrom($this->_form->getValue('email'));
        } else {
            $message->setFrom('noreply@example.com');
        }

        // Set the subject
        $message->setSubject($this->getSubject());

        // Set the to addresses
        foreach ($this->getRecipients() as $recipient) {
        	$message->addTo($recipient);
        }

        // Set the message content
        $message->setBody($this->_getEmailBodyHtml(), 'text/html');
        $message->addPart($this->_getEmailBodyPlain(), 'text/plain');

        // Add any attachments, validation is done by the FileUpload validator automatically registered with the element
        if (count($this->_attachmentElements) > 0) {
            // Check file uploads for each file element
            foreach ($this->_attachmentElements as $element) {
                if (array_key_exists($element->getName(), $_FILES) && is_array($_FILES[$element->getName()])) {
                    $file = $_FILES[$element->getName()];
                    if (is_array($file['error'])) {
                        // Process multiple upload field
                        foreach ($file['error'] as $key => $error) {
                            if ($error === UPLOAD_ERR_OK) {
                                $pathInfo = pathinfo($file['name'][$key]);
                                $extension = strtolower($pathInfo['extension']);

                                $filenameFilter = new iPhorm_Filter_Filename();
                                $filename = $filenameFilter->filter($pathInfo['filename']) . '.' . $extension;

                                $attachment = Swift_Attachment::fromPath($file['tmp_name'][$key], $file['type'][$key])->setFilename($filename);
                                $message->attach($attachment);
                            }
                        }
                    } else {
                        // Process single upload field
                        if ($file['error'] === UPLOAD_ERR_OK) {
                            $pathInfo = pathinfo($file['name']);
                            $extension = strtolower($pathInfo['extension']);

                            $filenameFilter = new iPhorm_Filter_Filename();
                            $filename = $filenameFilter->filter($pathInfo['filename']) . '.' . $extension;

                            $attachment = Swift_Attachment::fromPath($file['tmp_name'], $file['type'])->setFilename($filename);
                            $message->attach($attachment);
                        }
                    }
                }
            }
        }

        // Send the message
        $mailer->send($message);

        // Send the autoreply
        if (!empty($this->_autoReply) && array_key_exists('subject', $this->_autoReply)) {
            $userMessage = Swift_Message::newInstance();
            $userMessage->setFrom($this->_form->getValue('email'));
            $userMessage->setTo($this->_form->getValue('email'));
            $userMessage->setSubject($this->_replacePlaceholderValues($this->_autoReply['subject']));

            ob_start();
            require_once IPHORM_ROOT . '/emails/' . $this->_autoReply['htmlFile'];
            $html = ob_get_clean();
            $userMessage->setBody($html, 'text/html');

            ob_start();
            require_once IPHORM_ROOT . '/emails/' . $this->_autoReply['plainTextFile'];
            $body = ob_get_clean();
            $userMessage->addPart($body, 'text/plain');

            $mailer->send($userMessage);
        }
    }

    /**
     * Get the email body in HTML.  Retrieves the contents of
     * email-html.php in the iPhorm root folder
     *
     * @return string The email body in HTML
     */
    protected function _getEmailBodyHtml()
    {
        ob_start();
        require_once IPHORM_ROOT . '/emails/email-html.php';
        return ob_get_clean();
    }

    /**
     * Get the email body in plain text.  Retrieves the contents of
     * email-plain.php in the iPhorm root folder
     *
     * @return string The email body in plain text
     */
    protected function _getEmailBodyPlain()
    {
        ob_start();
        require_once IPHORM_ROOT . '/emails/email-plain.php';
        return ob_get_clean();
    }

    /**
     * Replace all placeholder values in a string with their
     * form value equivalents
     *
     * @param string $string
     * @return string
     */
    protected function _replacePlaceholderValues($string)
    {
        return preg_replace_callback('/%.+?%/', array($this, '_getPlaceholderValue'), $string);
    }

    /**
     * Get the form value of a single placeholder
     *
     * @param string $matches
     * @return string The the form value
     */
    protected function _getPlaceholderValue($matches)
    {
        $match = $matches[0];

        $match = preg_replace('/(^%|%$)/', '', $match);

        $value = $this->_form->getValue($match);

        if (is_array($value)) {
            $value = join(', ', $value);
        }

        return $value;
    }
}