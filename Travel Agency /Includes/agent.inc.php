<!-- Class created for agents. Contains __construct, getters, setters 
	 for each property, and __toString methods. -->

<?php

class Agent {
	
	private $AgtFirstName;
	private $AgtMiddleName;
	private $AgtLastName;
	private $AgtBusPhone;
	private $AgtEmail;
	private $AgtPosition;
	private $AgencyId;
	
	public function __construct($AgtFirstName, $AgtMiddleName, $AgtLastName, $AgtBusPhone, $AgtEmail, $AgtPosition, $AgencyId) {
		$this->AgtFirstName = $AgtFirstName;
		$this->AgtMiddleName = $AgtMiddleName;
		$this->AgtLastName = $AgtLastName;
		$this->AgtBusPhone = $AgtBusPhone;
		$this->AgtEmail = $AgtEmail;
		$this->AgtPosition = $AgtPosition;
		$this->AgencyId = $AgencyId;
	}
	//Getters
	public function  getAgtFirstName() {
		return $this->AgtFirstName;
	}
	
	public function  getAgtMiddleName() {
		return $this->AgtMiddleName;
	}
	
	public function  getAgtLastName() {
		return $this->AgtLastName;
	}
	
	public function  getAgtBusPhone() {
		return $this->AgtBusPhone;
	}
	
	public function  getAgtEmail() {
		return $this->AgtEmail;
	}
	
	public function  getAgtPosition() {
		return $this->AgtPosition;
	}
	
	public function  getAgencyId() {
		return $this->AgencyId;
	}
	//Setters
	public function  setAgtFirstName($AgtFirstName) {
		$this->AgtFirstName = $AgtFirstName;
	}
	
	public function  setAgtMiddleName($AgtMiddleName) {
		$this->AgtMiddleNamee = $AgtMiddleName;
	}
	
	public function  setAgtLastName($AgtLastName) {
		$this->AgtLastName = $AgtLastName;
	}
	
	public function  setAgtBusPhone($AgtBusPhone) {
		$this->AgtBusPhone = $AgtBusPhone;
	}
	
	public function  setAgtEmail($AgtEmail) {
		$this->AgtEmail = $AgtEmail;
	}
	
	public function  setAgtPosition($AgtPosition) {
		$this->AgtPosition = $AgtPosition;
	}
	
	public function  setAgencyId($AgencyId) {
		$this->AgencyId = $AgencyId;
	}
	
	public function __toString() {
		return "'" . $this->getAgtFirstName() . "', '" . $this->getAgtMiddleName() . "', '" . $this->getAgtLastName() . "', '" . $this->getAgtBusPhone() . "', '" . $this->getAgtEmail() . "', '" . $this->getAgtPosition() . "', '" . $this->getAgencyId() . "'";
	}
		
}

