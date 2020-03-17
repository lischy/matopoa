<?php

require_once('connect.php');

class Commutter extends Connection
{

	private $commuterName;
	private $commuterUserName;
	private $commutterPassword;
	private $kinName;
	private $kincellPhone;
	private $phoneNumber;


	public function setCommuterName(string $CommuterName)
	{

		$this->commuterName=$CommuterName;
		return $this;
		
	}

	public function getCommuterName()
	{

		return $this->commuterName;

	}

	public function setCommuterUserName(string $CommuterUserName)
	{

		$this->commuterUserName=$CommuterUserName;
		return $this;
		

	}


	public function getCommuterUserName()
	{

       return $this->commuterUserName;


	}

	public function setCommuterPassord(string $CommuterPassword)
	{
      
      $this->commutterPassword=$CommuterPassword;
      return $this;


	}


	public function getCommuterPassword()
	{
     
     return $this->commutterPassword;


	}

	public function setPhoneNumber(int $PhoneNumber)
	{
      
      $this->phoneNumber=$PhoneNumber;
      return $this;


	}


	public function getPhoneNumber()
	{
     
     return $this->phoneNumber;


	}


	public function setKinName(string $KinName)
	{

		$this->kinName=$KinName;
		return $this;



	}
     

    public function getKinName()
    {

    	return $this->kinName;


    }

    public function setKinCellPhone(int $KinCellPhone)
	{

		$this->kincellPhone=$KinCellPhone;
		return $this;

	}
     

    public function getKinCellPhoneNumber()
    {

    	return $this->kincellPhone;


    	
    }


    public function insertUser( int $PhoneNumber, string $CommuterName, string $CommuterUserName, string $CommuterPassword, string $KinName, int $KinCellPhone)
    {

    	$phoneNumber=$this->setPhoneNumber($PhoneNumber)->getPhoneNumber();
    	$commuterName=$this->setCommuterName($CommuterName)->getCommuterName();
    	$commuterusername=$this->setCommuterUserName($CommuterUserName)->getCommuterUserName();
    	$commuterpassword=$this->setCommuterPassord($CommuterPassword)->getCommuterPassword();
    	$kinName=$this->setKinName($KinName)->getKinName();
    	$kinCellPhone=$this->setKinCellPhone($KinCellPhone)->getKinCellPhoneNumber();
        $connection=$this->getConnection();
    	$stmt=$connection->prepare(
          "INSERT INTO commuter VALUES(?,?,?,?,?,?)"
    	);

    	$stmt->bind_param('issssi',$phoneNumber,$commuterName,$commuterusername,$commuterpassword,$kinName,$kinCellPhone);


    }


}


?>