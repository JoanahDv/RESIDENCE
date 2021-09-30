<?php 
$title = "passwordEdit";
ob_start();
require 'views/backend/passwordEdit.php'; 
$content = ob_get_clean();
require 'views/backend/template.php'; 
?>