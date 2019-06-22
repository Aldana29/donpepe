<?php

session_start();
// TO DO : borrar sólo la seccion de ID
session_destroy();

header("location: index.php");
?>