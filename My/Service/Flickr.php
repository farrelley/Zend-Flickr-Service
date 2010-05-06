<?php
class My_Service_Flickr
{
	protected $_flickrConnection;
	protected $_photos;
	protected $_stats;
	protected $_people;
	protected $_auth;
	protected $_interestingness;
	protected $_test;

	/**
	 * 
	 * @param array $options
	 */
	public function __construct(array $options = null)
	{
        $this->_flickrConnection = new My_Service_Flickr_Connection($options);
	}
	
	/**
	 * @return My_Service_Flickr_Stats
	 */
	public function stats()
	{
		if (null === $this->_stats) {
			$this->_stats = new My_Service_Flickr_Stats($this->_flickrConnection);
		}
		return $this->_stats;
	}

	/**
	 * @return My_Service_Flickr_Test
	 */
	public function test()
	{
		if (null === $this->_test) {
			$this->_stats = new My_Service_Flickr_Test($this->_flickrConnection);
		}
		return $this->_test;
	}
	
	/**
	 * @return My_Service_Flickr_People
	 */
	public function people()
	{
		if (null === $this->_people) {
			$this->_people = new My_Service_Flickr_People($this->_flickrConnection);
		}
		return $this->_people;
	}

	/**
	 * @return My_Service_Flickr_Interestingness
	 */
	public function interestingness()
	{
		if (null === $this->_interestingness) {
			$this->_interestingness = new My_Service_Flickr_Interestingness($this->_flickrConnection);
		}
		return $this->_interestingness;
	}
	
	/**
	 * @return My_Service_Flickr_Auth
	 */
	public function auth()
	{
		if (null === $this->_auth) {
			$this->_auth = new My_Service_Flickr_Auth($this->_flickrConnection);
		}
		return $this->_auth;
	}
	
	/**
	 * @return My_Service_Flickr_Photos_Photos
	 */
	public function photos()
	{
		if (null === $this->_photos) {
			$this->_photos = new My_Service_Flickr_Photos_Photos($this->_flickrConnection);
		}
		return $this->_photos;
	}
	
}