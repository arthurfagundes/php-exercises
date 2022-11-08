<?php 

$number01 = $_POST["number01"];
$number02 = $_POST["number02"];

if(isset($_POST["add"])){
    $result = $number01 + $number02;
} else if(isset($_POST["subtract"])){
    $result = $number01 - $number02;
} else if(isset($_POST["multiply"])){
    $result = $number01 * $number02;
} else if(isset($_POST["divide"])){
    $result = $number01 / $number02;
}

echo "<h1 class='display-1'>Resultado da operação: $result</h1>";

?>