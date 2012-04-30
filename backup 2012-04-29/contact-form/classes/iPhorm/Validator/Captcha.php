<?php

/**
 * Captcha Validator
 */
class iPhorm_Validator_Captcha extends iPhorm_Validator_Abstract
{
    /**
     * Compares the given value with the captcha value
     * saved in session. Also sets the error message.
     * 
     * @param $value The value to check
     * @param $context The other submitted form values
     * @return boolean True if valid false otherwise
     */
    public function isValid($value, $context = null)
    {
        if ($value == $_SESSION['captcha']) {
            return true;
        }
        
        $this->addMessage('The value does not match');
        return false;
    }
}