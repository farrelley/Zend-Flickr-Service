<?php

class My_Service_Flickr_Auth extends My_Service_Flickr_Abstract
{	
	public function checkToken(array $options)
	{
		$method = "flickr.auth.checkToken";
		$validParams = array('auth_token');
		$requiredParams = array('auth_token');
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getFrob(array $options = null)
	{
		$method = "flickr.auth.getFrob";
		$validParams = array();
		$requiredParams = array();
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getFullToken(array $options)
	{
		$method = "flickr.auth.getFullToken";
		$validParams = array('mini_token');
		$requiredParams = array('mini_token');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getToken(array $options)
	{
		$method = "flickr.auth.getToken";
		$validParams = array('frob');
		$requiredParams = array('frob');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
}