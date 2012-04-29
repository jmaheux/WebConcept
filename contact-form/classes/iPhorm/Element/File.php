<?php

class iPhorm_Element_File extends iPhorm_Element
{
    /**
     * Success handlers should skip this element
     *
     * @var boolean
     */
    protected $_skipRender = true;

    /**
     * File upload validator
     *
     * @var iPhorm_Validator_FileUpload
     */
    protected $_fileUploadValidator;

    public function __construct($name, $label = '', array $options = array())
    {
        parent::__construct($name, $label);

        $this->_fileUploadValidator = new iPhorm_Validator_FileUpload(array(
            'name' => $this->getName()
        ));
        $this->addValidator($this->_fileUploadValidator);

        if (array_key_exists('allowedExtensions', $options)) {
            $this->setAllowedExtensions($options['allowedExtensions']);
        }

        if (array_key_exists('maximumFileSize', $options)) {
            $this->setMaxFileSize($options['maximumFileSize']);
        }

        if (array_key_exists('required', $options)) {
            $this->setRequired($options['required']);
        }
    }

    /**
     * Set the allowed extensions
     *
     * @param array $allowedExtensions
     */
    public function setAllowedExtensions(array $allowedExtensions)
    {
        $this->_fileUploadValidator->setAllowedExtensions($allowedExtensions);
    }

    /**
     * Get the allowed extensions
     *
     * @return array The array of allowed extensions
     */
    public function getAllowedExtensions()
    {
        return $this->_fileUploadValidator->getAllowedExtensions();
    }

    /**
     * Set the maximum allowable file size in bytes
     *
     * Default is 10MB (10485760 bytes)
     * Set to 0 for no limit
     *
     * @param int|float $maximumFileSize
     */
    public function setMaximumFileSize($maximumFileSize)
    {
        $this->_fileUploadValidator->setMaximumFileSize($maximumFileSize);
    }

    /**
     * Get the maximum allowable file size in bytes
     *
     * @return int|float The maximum size
     */
    public function getMaximumFileSize()
    {
        return $this->_fileUploadValidator->getMaximumFileSize();
    }

    /**
     * Set if the element is required
     *
     * @param boolean $flag
     */
    public function setRequired($flag = true)
    {
        $this->_fileUploadValidator->setRequired((bool) $flag);
    }

    /**
     * Is this element required?
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->_fileUploadValidator->getRequired();
    }

    /**
     * Set the number of required uploads for a multiple upload element
     *
     * @param int $count
     */
    public function setRequiredCount($count)
    {
        $this->_fileUploadValidator->setRequiredCount($count);
    }

    /**
     * Get the number of required uploads
     *
     * @return int
     */
    public function getRequiredCount()
    {
        return $this->_fileUploadValidator->getRequiredCount($count);
    }

    /**
     * Get this elements file upload validator
     *
     * @return iPhorm_Validator_FileUpload
     */
    public function getFileUploadValidator()
    {
        return $this->_fileUploadValidator;
    }

    /**
     * Is the uploaded file valid?
     *
     * @param string $value The value to check
     * @param array $context The other submitted form values
     * @return boolean True if valid, false otherwise
     */
    public function isValid($value, $context = null)
    {
        $this->_errors = array();
        $valid = true;

        foreach ($this->getValidators() as $validator) {
            if ($validator->isValid($value, $context)) {
                continue;
            } else {
                $errors = $validator->getMessages();
                $valid = false;
            }

            $this->_errors = array_merge($this->_errors, $errors);
        }

        return $valid;
    }
}