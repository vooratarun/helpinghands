<?php
session_start();
unset($_SESSION["hrid"]);
unset($_SESSION["name"]);
session_destroy();
header("location:../help");
?>
