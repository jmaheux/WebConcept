<?php

abstract class iPhorm_SuccessHandler_Abstract implements iPhorm_SuccessHandler_Interface
{
    /**
     * The form
     *
     * @var iPhorm
     */
    protected $_form;

    /**
     * Charset
     *
     * @var string
     */
    protected $_charset;

    /**
     * Class constructor
     *
     * @param iPhorm $form
     */
    public function __construct(iPhorm $form)
    {
        $this->setForm($form);
        $form->addSuccessHandler($this);
    }

    /**
     * Set the form
     *
     * @param iPhorm $form
     */
    public function setForm(iPhorm $form)
    {
        $this->_form = $form;
    }

    /**
     * Get the form
     *
     * @return iPhorm
     */
    public function getForm()
    {
        return $this->_form;
    }
}