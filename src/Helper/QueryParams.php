<?php 

/** 
 * Set Query param array.
 * @package  MasterCardCoreSDK
 * @subpackage  Helper
 */

 class QueryParams {

	private $queryParams = array();
	
	/**
	 * Put query params into query params array.
	 * 
	 * @param name	the query param name.
	 * @param value	the query param value.
	 * @return		the query param array.
	 */
	public function add($key, $value){
		$this->queryParams[$key] = $value;
		return $this->queryParams;
	}
	
	/**
	 * Gets the query param map.
	 * 
	 * @return	the query param map.
	 */
	public function getQueryParams(){
		return $queryParams;
	}
	
}
?>