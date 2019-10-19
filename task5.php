class named Household
	class Horse{
		//properties
		private $name;
		private $birthYear;
		
		//constrictors
		public function __construct($name = NULL,$birthYear = NULL){
			$this->name = $name;
			$this->birthYear = $birthYear;
		}		
		//set and get name
		public function setName($value){
			$this->name=$value;
		}
		public function getName(){
			return $this->name;
		}
		
		//set and get birth year
		public function setBirthYear($value){
			$this->birthYear=$value;
		}
		public function getBirthYear(){
			return $this->birthYear;
		}
		
		//the showOutput method
		public function showOutput(){
			echo "Name : ". $this->getName() . "<br />";
			echo "BirthYear : ". $this->getBirthYear() . "<br />";
		}
	}
	//extends the Horse Class
	class RaceHorse extends Horse{
		public $races;
		
		//set and get races
		public function setRaces($value){
			$this->races=$value;
		}
		public function getRaces(){
			return $this->races;
		}
		
		//the showOutput metho
		public function showOutput(){
			echo "Races : ". $this->getRaces() . "<br />";
		}
	}
	//Oblject
	$Horse = new Horse();
	$Races = new RaceHorse();
	$Horse->setName('Flywheel');
	$Horse->setBirthYear(1);
	$Races->setRaces(12);														
	echo $Horse->showOutput();
	echo $Races->showOutput();