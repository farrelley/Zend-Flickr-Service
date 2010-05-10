<?php

class My_Service_Flickr_People extends My_Service_Flickr_Abstract
{	
	public function findByEmail(array $options)
	{
		$method = "flickr.people.findByEmail";
		$validParams = array('find_email');
		$requiredParams = array('find_email');
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function findByUsername(array $options)
	{
		$method = "flickr.people.findByUsername";
		$validParams = array('username');
		$requiredParams = array('username');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getInfo(array $options)
	{
		$method = "flickr.people.getInfo";
		$validParams = array('user_id');
		$requiredParams = array('user_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	/**
	 * 
	 * @param array $options
	 */
	public function getPhotos(array $options)
	{
		$method = "flickr.people.getPhotos";
		$validParams = array('user_id', 'safe_search', 'min_upload_date', 
			'max_upload_date', 'min_taken_date', 'max_taken_date', 'content_type', 'privacy_filter',
			'extras', 'per_page', 'page');	
		$requiredParams = array('user_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotosOf(array $options)
	{
		$method = "flickr.people.getPhotosOf";
		$validParams = array('user_id', 'extras', 'per_page', 'page');
		$requiredParams = array('user_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPublicGroups(array $options)
	{
		$method = "flickr.people.getPublicGroups";
		$validParams = array('user_id');
		$requiredParams = array('user_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPublicPhotos(array $options)
	{
		$method = "flickr.people.getPublicPhotos";
		$validParams = array('user_id', 'safe_search', 'extras', 'per_page', 'page');
		$requiredParams = array('user_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getUploadStatus(array $options)
	{
		$method = "flickr.people.getUploadStatus";
		$validParams = array();
		$requiredParams = array();
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
}