<?php 
$title = "profileEdit";
ob_start();
require 'views/backend/profileEdit.php'; 
$content = ob_get_clean();
require 'views/backend/template.php';
