<?php
//include a navigation link page 'menu.inc'
		include('menu.inc');
		echo "<u><strong>Task 7 A</strong></u><br />";
			$url = "https://www.unisa.ac.za";
			$pattern = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
			if (preg_match($pattern, $url))
			echo "The URL is OK.";
			else
			echo "Wrong URL.";
			echo"<br />";
			$url = "www.unisa.ac.za";
			$pattern = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
			if (preg_match($pattern, $url))
			echo "The URL is OK.";
			else
			echo "Wrong URL.";
			
		echo"<br /><br />";
		echo "<u><strong>Task 7 B</strong></u><br />";
		
			//testing X1347 if its alpha numeric character
			$alphaNumeric ='X1347' ;
			$pattern = '/^[[:alnum:]]{5}$/';
			if(preg_match($pattern, $alphaNumeric)){
				echo $alphaNumeric . " right <br />";			
			}else{
				echo $alphaNumeric . " Wrong <br />";
			}
			//testing $5678 if its alpha numeric character
			$alphaNumeric ='$5678' ;
			$pattern = '/^[[:alnum:]]{5}$/';
			if(preg_match($pattern, $alphaNumeric)){
				echo $alphaNumeric . " right <br />";			
			}else{
				echo $alphaNumeric . " Wrong <br />";
			}
			//testing 126543 if its alpha numeric character
			$alphaNumeric ='126543' ;
			$pattern = '/^[[:alnum:]]{5}$/';
			if(preg_match($pattern, $alphaNumeric)){
				echo $alphaNumeric . " right <br />";			
			}else{
				echo $alphaNumeric . " Wrong <br />";
			}