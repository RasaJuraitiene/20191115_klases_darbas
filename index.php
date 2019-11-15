<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Tables.php');
include('Form.php');

use input\Form;
use table\Tables;

$dovanuSarasasLentele = New Tables();
$patiekalaiSelector = New Form();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        table, th, td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
<?php
$dovanuSarasasLentele->getTable();
$patiekalaiSelector->viewOption();
?>

</body>
</html>