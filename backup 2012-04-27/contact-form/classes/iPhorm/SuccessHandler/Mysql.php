<?php

class iPhorm_SuccessHandler_Mysql extends iPhorm_SuccessHandler_Abstract
{
    /**
     * Mysql host
     *
     * @var string
     */
    protected $_host = 'localhost';

    /**
     * Mysql username
     *
     * @var string
     */
    protected $_username;

    /**
     * Mysql password
     *
     * @var string
     */
    protected $_password;

    /**
     * Mysql database name
     *
     * @var string
     */
    protected $_dbname;

    /**
     * Mysql table name
     *
     * @var string
     */
    protected $_table;

    /**
     * A mapping of element names to table field names
     *
     * @param array
     */
    protected $_fieldMap = array();

    /**
     * The form
     *
     * @var iPhorm
     */
    protected $_form;

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
     * Insert the submitted form into the specified Mysql database.
     */
    public function run()
    {
        if (count($this->_fieldMap) == 0) {
            throw new Exception('Mysql success handler: field map is empty');
        }

        $link = @mysql_connect($this->_host, $this->_username, $this->_password);

        if (!$link) {
            throw new Exception('Mysql error: ' . mysql_error());
        }

        $db = @mysql_select_db($this->_dbname);

        if (!$db) {
            throw new Exception('Mysql error: ' . mysql_error());
        }

        $queryParts = array();
        $elements = $this->_form->getElements();

        foreach ($this->_fieldMap as $elementName => $fieldName) {
            if (array_key_exists($elementName, $elements)) {
                $element = $elements[$elementName];
                $value = $element->getValue();
                if (is_array($value)) {
                    $value = join(', ', $value);
                }
                $queryParts[] = "`$fieldName` = '" . mysql_real_escape_string($value) . "'";
            }
        }

        if (count($queryParts) == 0) {
            throw new Exception('Mysql success handler: query is empty');
        }

        if (strtolower($this->_form->getCharset()) == 'utf-8') {
            $utf8Query = "SET NAMES utf8";
            $utf8Result = @mysql_query($utf8Query);

            if (!$utf8Result) {
                throw new Exception('Mysql error: ' . mysql_error());
            }
        }

        $query = "INSERT INTO `$this->_table` SET " . join(', ', $queryParts);
        $result = @mysql_query($query);

        if (!$result) {
            throw new Exception('Mysql error: ' . mysql_error());
        }

        @mysql_close($link);
    }

    /**
     * Sets the database configuration settings
     *
     * @param array $config
     */
    public function setConfig(array $config)
    {
        if (array_key_exists('host', $config)) {
            $this->_host = $config['host'];
        }
        if (array_key_exists('username', $config)) {
            $this->_username = $config['username'];
        }
        if (array_key_exists('password', $config)) {
            $this->_password = $config['password'];
        }
        if (array_key_exists('dbname', $config)) {
            $this->_dbname = $config['dbname'];
        }
        if (array_key_exists('table', $config)) {
            $this->_table = $config['table'];
        }
    }

    /**
     * Set the field map, which maps a form element name to a database
     * table field name.
     *
     * @param array $fieldMap
     */
    public function setFieldMap(array $fieldMap)
    {
        $this->_fieldMap = $fieldMap;
    }
}