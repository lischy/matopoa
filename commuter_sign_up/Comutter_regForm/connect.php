<?php

require_once('constants.php');

class Connection 
{
	protected $connect;

	
	function __construct()
	{

		$this->connect=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		
	}

	public function getConnection()
	{
      
       if ($this->connect) {

       	  return $this->connect;
       	
       }

       else
       {
         
         die('Connection Failed:');


       }


	}


}













?>