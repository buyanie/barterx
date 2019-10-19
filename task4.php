<?php
//class named Household
	class Household{
		//properties
		private $occupants;
		private $annualIncome;
		
		//constrictors
		public function __construct(){
			$this->occupants = 1;
			$this->annualIncome = 0;
		}
		
		//set occupants
		public function setOccupants($occupants){
			$this->occupants=$occupants;
		}
		
		//get oocupants
		public function getOccupants(){
			return $this->occupants;
		}
		
		//set annual income
		public function setAnnualIncome($annualIncome){
			$this->annualIncome=$annualIncome;
		}
		
		//get annual income
		public function getAnnualIncome(){
			return $this->annualIncome;
		}
	
	}
	$Earnings = new Household();
	$Earnings->setOccupants(1);
	$Earnings->setAnnualIncome(0);
	echo "Occupants " . $Earnings->getOccupants() . "<br />";
	echo "Annual Income " . $Earnings->getAnnualIncome();