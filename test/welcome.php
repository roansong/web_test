<?php
$name = $_GET['surname'];
echo 'Whaddup, Mr ' .  
    htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!';
?>