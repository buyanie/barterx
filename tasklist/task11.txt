<?php

session_start();
 
use PFBC\Form;
use PFBC\Element;
 
include("PFBC/Form.php");
$team = array("Select A Team" ,"Kaizer Chiefs", "Orlando Pirates", "Bloemfontein Celtic", "Mamelodi Sundowns", "Supersport United", "Cape town City", "Baroka FC")

?>
<html>
    <head>
			<title>Task 11</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <table width="900" height="600"  align="center"> 
		 <tr>
		 <td>
			<?php include 'menu.inc'; ?>
			<h1><u><i>Task 11</i></u></h1>
                     <br />
                     <br />
                     <br />
			<h2>11.1</h2>
<?php


$form = new Form("TicketTackers");
$form->addElement(new Element\HTML('<legend>TicketTakers</legend>'));
$form->addElement(new Element\Hidden("select", "select_team"));
$form->addElement(new Element\Select("Select a Team:", "Select", $team, array(
    "required" => 1
)));


if (isset($_POST['select'])) {
		$value=$_POST['Select'];
		$form->addElement(new Element\Textbox("You Selected: ", "SelectedTeam", array ("value"=> $value)));
	}
$form->addElement(new Element\Button("Select Team"));


$form->render();


	?>	</td>
	</tr>
	<tr>
		 <td><h2>11.1</h2> Please click link below to access task 11.2 <br /><br /><a href='TaskList/index.php'><strong>Task List </strong></a></td>
	</tr>
		</table>
		
		
		
<div 	id="iframe" style="text_align:center;">
<iframe src="task11.txt" width="1200" height="400" scrolling="yes">
<p>Your browser does not support iframes.</p></</iframe>
</div>						
    </body>
</html>
