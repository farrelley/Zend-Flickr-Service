<?php

abstract class My_Service_Flickr_Abstract
{
	protected $_connection;
	
	public function __construct(My_Service_Flickr_Connection $conn)
	{
	 	$this->_connection = $conn;
	}
	
	protected function _makecall($method, $options = null, $requiredParams)
	{
		$this->_checkParams($requiredParams, $options);
		$responseData = $this->_connection->makeCall($method, $options);
		
		switch (strtolower($this->_connection->getFormat())) {
			case 'json':
				if (strpos($responseData->getBody(), '"stat":"fail"')) {
					$error = Zend_Json::decode($responseData->getBody());
					throw new Zend_Service_Exception($error['message'] . " Status Code: " . $error['code']);
				}
				break;
		}
		return $responseData;		
	}
	
	protected function _checkParams($requiredParams, $userParams)
	{
		if (!is_null($requiredParams)) {
			foreach ($requiredParams as $param) {
				if (!in_array($param, array_keys($userParams))) {
					throw new Zend_Service_Exception('Missing Required Flickr Paramater ' . $param);
				}
			}
			
		}
	}
}