<?php


session_start();
 
use PFBC\Form;
use PFBC\Element;
 include("../PFBC/Form.php");
 include("createTable.php");
require_once("getItems.php");


$tasks = getTasks(); 

// Add the task to the task list
if (isset($_POST['addTask'])) {
$name 		= $_POST['name'];
$category	= $_POST['category'];
$date		= $_POST['date'];
$completed  = 'No';

require('addItem.php');

 addTask($name, $category, $date, $completed);
        // Display the task list for all tasks including the currently added
        header("Location: index.php");
    }
 
?>
<html>
    <head>
		<title>Task 11</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
		<table width="900" height="auto"  align="center"> 
			 <tr>
				<td>
					<?php include 'menu.inc'; ?>
				</td>
			</tr>	
		<table width="1000" height="auto"  align="center">
		<h1 style="padding-left:150px;">My ToDO List</h1>
			<tr>
				<th>name</th>
				<th>Category</th>
				<th>Date</th>
				<th>Complete</th>
				<th>Mark Complete?</th>
				<th>Delete?</th>
			</tr>
			<?php foreach ($tasks as $task) : ?>
			<tr align="center">
				<td><?php echo $task['Name']; ?></td>
				<td><?php echo $task['Category']; ?></td>
				<td><?php echo $task['Date']; ?></td>
				<td><?php echo $task['Completed']; ?></td>
				<td><a href="markItemComplete.php?taskid=<?php echo $task['TaskID'];?>" >Mark complete</a></td>
				<td><a href="deleteItem.php?delete=<?php echo $task['TaskID'];?>" >Delete</a></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<hr />
		<?php 


			
			
			$form = new Form("TaskList");
			
			$form->addElement(new Element\Hidden("addTask", "TaskList"));
			$form->addElement(new Element\Textbox("Item Name: ", "name", array ("required" => 1)));
			$form->addElement(new Element\Textbox("Item Category: ", "category", array ("required" => 1)));
			$form->addElement(new Element\Date("Item Date: ", "date", array ("required" => 1)));
			$form->addElement(new Element\Button("Add item"));

			$form->render();

		?>	
        <div 	id="iframe" style="text_align:center;">
			<iframe src="task11.txt" width="1200" height="400" scrolling="yes">
			<p>Your browser does not support iframes.</p></</iframe>
		</div>						
    </body>
</html>