<?php
include 'Request.php';
session_start();

    $request = new Request();
    $class = 'Action_' . $request->getGroup();
    require_once $class . '.php';
    $action = new $class;
    $cmd = $request->getCommand();
    $action->$cmd($request);

?>
