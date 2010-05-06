<?php

class My_Service_Flickr_Photos_Photos extends My_Service_Flickr_Abstract
{	
	public function addTags(array $options = null)
	{
		$method = "flickr.photos.addTags";
		$validParams = array('photo_id', 'tags');
		$requiredParams = array('photo_id', 'tags');
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}

}