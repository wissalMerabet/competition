<?php

include 'conn.php';

session_start();
session_unset();
//deletes all session
session_destroy();

header('location:Login.php');

?>