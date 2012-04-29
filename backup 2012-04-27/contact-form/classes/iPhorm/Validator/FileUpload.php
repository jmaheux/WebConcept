<?php

defined('IPHORM_UPLOAD_ERR_TYPE') || define('IPHORM_UPLOAD_ERR_TYPE', 128);
defined('IPHORM_UPLOAD_ERR_FILE_SIZE') || define('IPHORM_UPLOAD_ERR_FILE_SIZE', 129);
defined('IPHORM_UPLOAD_ERR_NOT_UPLOADED') || define('IPHORM_UPLOAD_ERR_NOT_UPLOADED', 130);

/**
 * FileUpload Validator
 */
class iPhorm_Validator_FileUpload extends iPhorm_Validator_Abstract
{
    /**
     * The name of the element to check in the $_FILES array
     *
     * @var string
     */
    protected $_name;

    /**
     * Allowed file extensions
     *
     * @var array
     */
    protected $_allowedExtensions = array();

    /**
     * Maximum file size in bytes
     *
     * Default is 10MB (10485760 bytes)
     *
     * @var int|float
     */
    protected $_maximumFileSize = 10485760;

    /**
     * Required flag
     *
     * @var boolean
     */
    protected $_required = false;

    /**
     * How many files are required for a multiple upload element, 0 = all
     *
     * @var int
     */
    protected $_requiredCount = 0;

    /**
     * Class constructor
     *
     * A string with the name of the element or an array of
     * options with a name key is required
     *
     * @param string|array $options
     */
    public function __construct($options)
    {
        if (is_string($options)) {
            $this->setName($options);
        } elseif (is_array($options)) {
            if (array_key_exists('name', $options)) {
                $this->setName($options['name']);
            }
            if (array_key_exists('allowedExtensions', $options)) {
                $this->setAllowedExtensions($options['allowedExtensions']);
            }
            if (array_key_exists('maximumFileSize', $options)) {
                $this->setMaximumFileSize($options['maximumFileSize']);
            }
            if (array_key_exists('required', $options)) {
                $this->setRequired($options['required']);
            }
        }

        if (!(is_string($this->getName()) && strlen($this->getName()) > 0)) {
            throw new Exception('Name option is required');
        }
    }

    /**
     * Returns true if and only if the uploaded file is free of errors
     *
     * @param string $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (array_key_exists($this->_name, $_FILES) && is_array($_FILES[$this->_name])) {
            $file = $_FILES[$this->_name];
            if (is_array($file['error'])) {
                // Process multiple upload field
                $validFileCount = 0;
                foreach ($file['error'] as $key => $error) {
                    if ($error === UPLOAD_ERR_OK) {
                        // The file uploaded OK

                        if (!is_uploaded_file($file['tmp_name'][$key])) {
                            // The file is not an uploaded file - possibly an attack
                            $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_NOT_UPLOADED, $file['name'][$key]));
                            return false;
                        }

                        if ($this->_maximumFileSize > 0 && $file['size'][$key] > $this->_maximumFileSize) {
                            // The file is larger than the size allowed by the settings
                            $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_FILE_SIZE, $file['name'][$key]));
                            return false;
                        }

                        $pathInfo = pathinfo($file['name'][$key]);
                        $extension = strtolower($pathInfo['extension']);

                        if (count($this->_allowedExtensions) > 0 && !in_array($extension, $this->_allowedExtensions)) {
                            // The file extension is not allowed
                            $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_TYPE, $file['name'][$key]));
                            return false;
                        }
                        $validFileCount++;
                    } elseif ($error === UPLOAD_ERR_NO_FILE) {
                        if ($this->getRequired()) {
                            if ($this->getRequiredCount() > 0) {
                                $requiredCount = $this->getRequiredCount();
                                if ($requiredCount > $validFileCount) {
                                    if ($requiredCount > 1) {
                                        $this->addMessage("At least {$requiredCount} files are required");
                                    } else {
                                        $this->addMessage("At least 1 file is required");
                                    }
                                    return false;
                                }
                            } else {
                                $this->addMessage('All files are required');
                                return false;
                            }
                        }
                    } else {
                        $this->addMessage($this->_getFileUploadError($error, $file['name'][$key]));
                        return false;
                    }
                }
            } else {
                // Process single upload field
                if ($file['error'] === UPLOAD_ERR_OK) {
                    // The file uploaded OK

                    if (!is_uploaded_file($file['tmp_name'])) {
                        // The file is not an uploaded file - possibly an attack
                        $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_NOT_UPLOADED));
                        return false;
                    }

                    if ($this->_maximumFileSize > 0 && $file['size'] > $this->_maximumFileSize) {
                        // The file is larger than the size allowed by the element settings
                        $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_FILE_SIZE));
                        return false;
                    }

                    $pathInfo = pathinfo($file['name']);
                    $extension = strtolower($pathInfo['extension']);

                    if (count($this->_allowedExtensions) > 0 && !in_array($extension, $this->_allowedExtensions)) {
                        // The file extension is not allowed
                        $this->addMessage($this->_getFileUploadError(IPHORM_UPLOAD_ERR_TYPE));
                        return false;
                    }
                } elseif ($file['error'] === UPLOAD_ERR_NO_FILE) {
                    if ($this->getRequired()) {
                        $this->addMessage('This file is required');
                        return false;
                    }
                } else {
                    $this->addMessage($this->_getFileUploadError($file['error'], $file['name']));
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Set the name of the element to validate in $_FILES
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Get the name of the element
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set the allowed extensions, an array of lowercase
     * extensions e.g. array('jpg', 'jpeg', 'gif'). An empty
     * array means all file extensions are allowed
     *
     * @param array $allowedExtensions
     */
    public function setAllowedExtensions(array $allowedExtensions)
    {
        foreach ($allowedExtensions as &$allowedExtension) {
            $allowedExtension = strtolower($allowedExtension);
        }

        $this->_allowedExtensions = $allowedExtensions;
    }

    /**
     * Get the allowed extensions
     *
     * @return array
     */
    public function getAllowedExtensions()
    {
        return $this->_allowedExtensions;
    }

    /**
     * Set the maximum file size in bytes
     *
     * @param int|float $maximumFileSize
     */
    public function setMaximumFileSize($maximumFileSize)
    {
        $this->_maximumFileSize = $maximumFileSize;
    }

    /**
     * Get the maximum file size in bytes
     *
     * @return int|float
     */
    public function getMaximumFileSize()
    {
        return $this->_maximumFileSize;
    }

    /**
     * Set whether the file is required or not
     *
     * @param boolean $flag
     */
    public function setRequired($flag = true)
    {
        $this->_required = (bool) $flag;
    }

    /**
     * Get whether the file is required or not
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->_required;
    }

    /**
     * Set the count for required files for a multiple upload field
     *
     * @param int $count
     */
    public function setRequiredCount($count)
    {
        $this->_requiredCount = $count;
    }

    /**
     * Get the count for required files for a multiple upload field
     *
     * @return int
     */
    public function getRequiredCount()
    {
        return $this->_requiredCount;
    }

    /**
     * Get the error message corresponding to the error code generated by
     * PHP file uploads and this validator
     *
     * @param int $errorCode The error code
     * @param string $filename (optional) The filename to add to the message
     * @return string The error message
     */
    protected function _getFileUploadError($errorCode, $filename = '')
    {
        switch ($errorCode) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
            case IPHORM_UPLOAD_ERR_FILE_SIZE:
                if (strlen($filename) > 0) {
                    $message = "'$filename' exceeds the maximum allowed file size";
                } else {
                    $message = 'File exceeds the maximum allowed file size';
                }
                return $message;
            case UPLOAD_ERR_PARTIAL:
                if (strlen($filename) > 0) {
                    $message = "'$filename' was only partially uploaded";
                } else {
                    $message = 'File was only partially uploaded';
                }
                return $message;
            case UPLOAD_ERR_NO_FILE:
                return 'No file was uploaded';
            case UPLOAD_ERR_NO_TMP_DIR:
                return 'Missing a temporary folder';
            case UPLOAD_ERR_CANT_WRITE:
                return 'Failed to write file to disk';
            case UPLOAD_ERR_EXTENSION:
                return 'File upload stopped by extension';
            case IPHORM_UPLOAD_ERR_TYPE:
                if (strlen($filename) > 0) {
                    $message = "File type of '$filename' is not allowed";
                } else {
                    $message = 'File type is not allowed';
                }
                return $message;
            case IPHORM_UPLOAD_ERR_NOT_UPLOADED:
                if (strlen($filename) > 0) {
                    $message = "File '$filename' is not an uploaded file";
                } else {
                    $message = 'File is not an uploaded file';
                }
                return $message;
            default:
                return 'Unknown upload error';
        }
    }
}