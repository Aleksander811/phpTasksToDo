<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$id = intval(basename(Request::uri())); // gaunam iraso id
$task = new Task(Database::connect()); // sukuriam task objekta ir perduodam 
$data = $task->update($id);

if(isset($_POST['update'])){
    $task->storeUpdate($_POST,$id);
}


echo intval(basename(Request::uri()));
require "views/pages/update-task.view.php";
