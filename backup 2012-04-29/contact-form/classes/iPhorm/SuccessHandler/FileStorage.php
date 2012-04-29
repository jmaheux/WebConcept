<?php

class iPhorm_SuccessHandler_FileStorage extends iPhorm_SuccessHandler_Abstract
{
    /**
     * The mapping of elements to upload locations on the server
     * 
     * @var array
     */    
    protected $_elementMap = array();
    
    /**
     * Run the handler.  Move the elements specified in the element map to their
     * set paths.
     */
    public function run()
    {
        if (count($this->_elementMap) > 0) {
            foreach ($this->_elementMap as $name => $path) {
                if (!is_writable($path)) {
                    throw new Exception('File upload path is not writable');
                }
                
                if (array_key_exists($name, $_FILES) && is_array($_FILES[$name])) {
                    $file = $_FILES[$name];
                    if (is_array($file['error'])) {
                        // Process multiple upload field
                        foreach ($file['error'] as $key => $error) {
                            if ($error === UPLOAD_ERR_OK) {
                                $pathInfo = pathinfo($file['name'][$key]);
                                $extension = strtolower($pathInfo['extension']);

                                $filenameFilter = new iPhorm_Filter_Filename();
                                $filename = $filenameFilter->filter($pathInfo['filename']) . '.' . $extension;
                                
                                if (file_exists($path . $filename)) {
                                    $filename = $this->_generateFilename($path, $filename);
                                }
                                
                                move_uploaded_file($file['tmp_name'][$key], $path . $filename);
                            }
                        }
                    } else {
                        // Process single upload field
                        if ($file['error'] === UPLOAD_ERR_OK) {
                            $pathInfo = pathinfo($file['name']);
                            $extension = strtolower($pathInfo['extension']);

                            $filenameFilter = new iPhorm_Filter_Filename();
                            $filename = $filenameFilter->filter($pathInfo['filename']) . '.' . $extension;
                            
                            if (file_exists($path . $filename)) {
                                $filename = $this->_generateFilename($path, $filename);
                            }
                                
                            move_uploaded_file($file['tmp_name'], $path . $filename);
                        }
                    }
                }
            }
        }
    }
    
    /**
     * Set the element map
     * 
     * A mapping of element names to file upload location paths
     * on the server. See documentation on file uploads for more
     * information.
     * 
     * @param $elementMap
     */
    public function setElementMap(array $elementMap)
    {
        $this->_elementMap = $elementMap;
    }
    
    /**
     * Get the element map
     * 
     * @return array
     */
    public function getElementMap()
    {
        return $this->_elementMap;
    }
    
    /**
     * Generate a filename that does not already exist in the given path
     * 
     * @return string
     */
    protected function _generateFilename($path, $filename)
    {
        $count = 1;
        $newFilenamePath = $path . $filename;
        
        while (file_exists($newFilenamePath)) {
            $newFilename = $count++ . $filename;
            $newFilenamePath = $path . $newFilename;
        }
        
        return $newFilename;
    }
}