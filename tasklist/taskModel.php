<?php

require 'database.php';

function addTask($name, $category, $date, $completed){
global $db;
$queryAdd = 'INSERT INTO TaskList
            (Name, Category, Date, Completed)
            VALUES 
            (:name, :category, :date, :completed)';
$statement = $db->prepare($queryAdd);
$statement->bindValue(':name', $name);
$statement->bindValue(':category', $category);
$statement->bindValue(':date', $date);
$statement->bindValue(':completed', $completed);
$correct =$statement->execute();
$statement->closeCursor();
 
}

function getTasks(){
 global $db;
    $query = 'SELECT * FROM tasklist
              ORDER BY TaskID';
    $tasks = $db->query($query);
    return $tasks;
}

function updateTask($task_id){
	global $db;
$completed_task = 'complete';
$queryUpdate = 'UPDATE tasklist
            SET Completed = :completed_task
			WHERE TaskID = :task_id';
$statement = $db->prepare($queryUpdate);
$statement->bindValue(':completed_task', $completed_task);
$statement->bindValue(':task_id', $task_id);
$correct =$statement->execute();
$statement->closeCursor();
 
}


function deleteTask($delete){

global $db;
$queryDelete = 'DELETE FROM tasklist WHERE TaskID = :task_id';
$statement = $db->prepare($queryDelete);
$statement->bindValue(':task_id', $delete);
$correct =$statement->execute();
$statement->closeCursor();

}
 