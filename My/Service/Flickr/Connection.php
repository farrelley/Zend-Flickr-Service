<?php

class My_Service_Flickr_Connection
{
	const URI_BASE = 'http://www.flickr.com';
	
	protected $_apiKey;
    protected $_sharedSecret;
    protected $_authToken;
    protected $_restClient;
	protected $_format = 'json';
	protected $_nojsoncallback = 1;
	
	
	public function __construct($options) 
	{
		if (is_array($options)) {
        	$this->setOptions($options);
        }
        
   		if (null === $this->_restClient) {
			$this->_restClient = new Zend_Rest_Client(self::URI_BASE);
        }
	}
	
	public function setOptions(array $options)
    {
		$methods = get_class_methods($this);
		foreach ($options as $key => $value) {
			$method = 'set' . ucfirst($key);
			if (in_array($method, $methods)) {
				$this->$method($value);
			}
		}
		return $this;
    }
	
	protected function setApiKey($key)
	{
		$this->_apiKey = (string) $key;
		return $this;		
	}
	
	protected function setSharedSecret($secret)
	{
		$this->_sharedSecret = (string) $secret;
		return $this;
	}
	
	protected function setAuthToken($token)
	{
		$this->_authToken = (string) $token;
		return $this;	
	}
	
	protected function setFormat($format)
	{
		$this->_format = (string) $format;
		return $this;
	}
	public function getFormat()
	{
		return $this->_format;
	}
	
	protected function setJsonCallback($option)
	{
		$this->_nojsoncallback = (bool) $option;
		return $this;
	}
	
	public function makeCall($method, array $options = null)
	{
		$options = $this->_prepareOptions($method, $options);
		$restClient = $this->_restClient;
        $restClient->getHttpClient()->resetParameters();
        $response = $restClient->restGet('/services/rest/', $options);
        return $response;
	}
	
	protected function _prepareOptions($method, array $options = null)
    {
        $options['method']  = (string) $method;
        $options['api_key'] = $this->_apiKey;
        $options['format'] = $this->_format;
        $options['nojsoncallback'] = $this->_nojsoncallback;
	
        if (isset($this->_authToken)) {
        	$options['auth_token'] = $this->_authToken;
        	$options['api_sig'] = $this->_generateFlickrSignature($options); 
        }
        
        return $options;
    }
    
    protected function _generateFlickrSignature(array $params)
    {
    	ksort($params);
    	foreach ($params AS $key => $value) {
    		$str .= $key . $value;
    	}
    	return md5($this->_sharedSecret . $str);
    }
}