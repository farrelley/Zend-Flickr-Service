<?php

class My_Service_Flickr_Interestingness extends My_Service_Flickr_Abstract
{	
	public function getList(array $options = null)
	{
		$method = "flickr.interestingness.getList";
		$validParams = array('date', 'extras', 'per_page', 'page');
		$requiredParams = array();
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}
}