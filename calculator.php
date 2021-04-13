<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-type: application/json");

// Store the received data
$inputOne = intval($_REQUEST["numberOne"]);
$inputTwo = intval($_REQUEST["numberTwo"]);
$operator = $_REQUEST["operator"];
// Result variable
$result = 0;
switch ($operator) {
    case "add":
        $result = $inputOne + $inputTwo;
        break;
    case "sub":
        $result = $inputOne - $inputTwo;
        break;
    case "multi":
        $result = $inputOne * $inputTwo;
        break;
    case "divid":
        $result = $inputOne / $inputTwo;
        break;
}
$resultJson = [
    "result" => $result
];
$json = json_encode($resultJson);
echo $json;
