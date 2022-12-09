<?php
include_once 'index.php';
session_start();
session_destroy();
header("location:$me");
?>