<?php

$fn = $_POST['nameOfTheAccount'];
$hisab = $_POST['hisab'];
$typeOfAc = $_POST['typeOfAc'];
$othertypeOfAc = $_POST['othertypeOfAc'];
$Currency = $_POST['Currency'];
$otherCurrency = $_POST['otherCurrency'];
$operationOfAccount = $_POST['operationOfAccount'];
$otherOperationOfAccount = $_POST['otherOperationOfAccount'];

echo "Name of the Account (In English Block Letter): = ".$fn; echo "<br>";
echo "হিসাবের শিরোনাম (বাংলায়): = ".$hisab; echo "<br>";
echo "Type of Account (Mark Tick) = ".$typeOfAc .$othertypeOfAc; echo "<br>";
echo "Type of Account (Mark Tick) = ".$Currency .$otherCurrency; echo "<br>";
echo "Type of Account (Mark Tick) = ".$operationOfAccount .$otherOperationOfAccount; echo "<br>";



?>