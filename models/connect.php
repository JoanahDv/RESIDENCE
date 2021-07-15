<?php

try
{
    $db = new PDO('mysql:host='. DB_HOSTNAME . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
