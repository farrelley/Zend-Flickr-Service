<?php

class My_Service_Flickr_Stats extends My_Service_Flickr_Abstract
{		
	public function getPopularPhotos(array $options)
	{
		$method = "flickr.stats.getPopularPhotos";
		$validParams = array('date', 'sort', 'per_page', 'page');
		$requiredParams = array();
		
		$response = $this->_makecall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getTotalViews(array $options)
	{
		$method = "flickr.stats.getTotalViews";
		$validParams = array('date');
		$requiredParams = array();
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotoStats(array $options)
	{
		$method = "flickr.stats.getPhotoStats";
		$validParams = array('date', 'photo_id');
		$requiredParams = array('date', 'photo_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotoDomains(array $options)
	{
		$method = "flickr.stats.getPhotoDomains";
		$validParams = array('date', 'photo_id', 'per_page', 'page');
		$requiredParams = array('date');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotoReferrers(array $options)
	{
		$method = "flickr.stats.getPhotoReferrers";
		$validParams = array('date', 'domain', 'photo_id', 'per_page', 'page');
		$requiredParams = array('date', 'domain');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotostreamStats(array $options)
	{
		$method = "flickr.stats.getPhotostreamStats";
		$validParams = array('date');
		$requiredParams = array('date');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotostreamReferrers(array $options)
	{
		$method = "flickr.stats.getPhotostreamReferrers";
		$validParams = array('date', 'domain', 'per_page', 'page');
		$requiredParams = array('date', 'domain');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotostreamDomains(array $options)
	{
		$method = "flickr.stats.getPhotostreamDomains";
		$validParams = array('date', 'per_page', 'page');
		$requiredParams = array('date');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotosetStats(array $options)
	{
		$method = "flickr.stats.getPhotosetStats";
		$validParams = array('date', 'photoset_id');
		$requiredParams = array('date', 'photoset_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotosetReferrers(array $options)
	{
		$method = "flickr.stats.getPhotosetReferrers";
		$validParams = array('date', 'domain', 'photoset_id', 'per_page', 'page');
		$requiredParams = array('date', 'domain');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getPhotosetDomains(array $options)
	{
		$method = "flickr.stats.getPhotosetDomains";
		$validParams = array('date', 'photoset_id', 'per_page', 'page');
		$requiredParams = array('date');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getCollectionStats(array $options)
	{
		$method = "flickr.stats.getCollectionStats";
		$validParams = array('date', 'collection_id');
		$requiredParams = array('date', 'collection_id');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
	
	public function getCollectionReferrers(array $options)
	{
		$method = "flickr.stats.getCollectionStats";
		$validParams = array('date', 'domain', 'collection_id', 'per_page', 'page');
		$requiredParams = array('date', 'domain');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}

	public function getCollectionDomains(array $options)
	{
		$method = "flickr.stats.getCollectionDomains";
		$validParams = array('date', 'collection_id', 'per_page', 'page');
		$requiredParams = array('date');
		
		$response = $this->_makeCall($method, $options, $requiredParams);
        return $response->getBody();
	}
}