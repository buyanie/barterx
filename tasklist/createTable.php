<?php 

require 'database.php';


$queryCreate = 'CREATE TABLE IF NOT EXISTS TaskList (
  TaskID    INT    (11)   NOT NULL   AUTO_INCREMENT,
  Name      VARCHAR(60)   NOT NULL,
  Category  VARCHAR(25)   NOT NULL,
  Date      DATE		  NOT NULL,
 Completed  VARCHAR(20)    NOT NULL,  
  PRIMARY KEY (TaskID)
);';
$statement = $db->prepare($queryCreate);
$correct =$statement->execute();
$statement->closeCursor();


?>