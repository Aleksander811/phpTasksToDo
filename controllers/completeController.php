<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$id = intval(basename(Request::uri()));
$task = new Task(Database::connect());
$task->completeTask($id);