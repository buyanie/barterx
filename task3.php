<?php
		//include a navigation link page 'menu.inc'
		include('menu.inc');
		if(isset($_POST['submit'])){
			//declare function numberOfParticipants
			if(isset($_POST['participants'])){
				echo "<u><strong>Number of participants</strong></u><br />";
				$numberOfParticipants = $_POST['participants'];
				function calcCost($numberOfParticipants){
					global $numberOfParticipants;
					if($numberOfParticipants >= 1 and $numberOfParticipants <=4){
						$feePerPerson = 100;
						$total = $numberOfParticipants * $feePerPerson;
						return $total;
					}
					elseif($numberOfParticipants >= 5 and $numberOfParticipants <=10){
						$feePerPerson = 80;
						$total = $numberOfParticipants * $feePerPerson;
						return $total;
					}
					elseif($numberOfParticipants >= 11){
						$feePerPerson = 60;
						$total = $numberOfParticipants * $feePerPerson;
						return $total;
					}
					elseif($numberOfParticipants <= 0){
						echo"The Number of participants cannot be less than one(1)!";
					}
				}
				echo "The total cost to the company is ". calcCost(0) . "<br /><br />";
			}
//////////////////////////////////////////////////////////////////////////////Task 3B/////////////////////////////////////////////////////////////////////////////			
			//declare function useCheckBoxes
			if(isset($_POST['Top'])){
				echo "<u><strong>Pizza Toppings</strong></u><br />";
					$Toppings = $_POST['Top'];
					function useCheckBoxes(){
						global $Toppings;
						foreach($Toppings as $value){
							echo $value . "<br />";
						}
					}
				//call the useCheckBoxes Function	
				useCheckBoxes(0);
			}
			//declare function useRadioButtons
			if(isset($_POST['pay'])){
				echo "<br /><u><strong>Payment Method</strong></u><br />";				
					$Payment = $_POST['pay'];
					function useRadioButtons(){
						global $Payment;
						foreach($Payment as $value){
							echo $value . "<br />";
						}
					}
				//call the useRadioButtons Function	
				useRadioButtons(0);
			}
		}
	?>
		<form action='task3.php' method='post'>
			<p><strong>Task 3 A</strong><br />
				<input type='text' name='participants' placeholder='Number of participants' />
			</p>
		
			<p><strong>Task 3 B</strong><br />
				Pizza Toppings:<br />
				<input type='checkbox' name='Top[]' value='Pepperoni' />Pepperoni<br />
				<input type='checkbox' name='Top[]' value='Mushrooms' />Mushrooms<br />
				<input type='checkbox' name='Top[]' value='Olives' />Olives<br />
				<input type='checkbox' name='Top[]' value='Chicken' />Chicken
			</p>
			
				<p>Payment Method:<br />
				<input type='radio' name='pay[]' value='Cash' />Cash<br />
				<input type='radio' name='pay[]' value='Card' />Card</p>
				<input type='submit' name='submit' />
		</form>
	<!--Include Iframe -->
	<center>
			