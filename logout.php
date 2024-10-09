<?php

require_once(__DIR__."/utilities/utilities.php");

if(isset($_SESSION["userId"])){
    unset($_SESSION["userId"]);
}

header("Location: index.php");
exit();

?>