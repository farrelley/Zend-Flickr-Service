<?php

class My_Service_Flickr_Test extends My_Service_Flickr_Abstract
{	
	public function echos(array $options = null)
	{
		$method = "flickr.test.echo";
		$validParams = array();
		$requiredParams = array();
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function login(array $options = null)
	{
		$method = "flickr.test.login";
		$validParams = array();
		$requiredParams = array();
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function null(array $options = null)
	{
		$method = "flickr.test.null";
		$validParams = array();
		$requiredParams = array();
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
}