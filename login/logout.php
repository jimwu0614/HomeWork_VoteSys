<?php

session_start();
// unset($_SESSION['acc']);
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['acc']);



header('location:../index.php?note=You_are_logged_out');
?>