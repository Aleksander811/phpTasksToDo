<?php

$router->define([
    '/'=>'controllers/homeController.php',
    '/add-task'=>'controllers/addTaskController.php',
    '/update-task'=>'controllers/updateController.php',
    '/delete-task'=>'controllers/deleteController.php',
    '/complete-task'=>'controllers/completeController.php',
    '404'=>'controllers/404Controller.php'
]);



