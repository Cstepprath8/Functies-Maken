<?php
// Colin Stepprath
echo "Functies \n";

$antwoord = "doorgaan";

while ($antwoord == "doorgaan") {
$num1 = getNumber1();
$operation = getOperation();
$num2 = getNumber2();
$result = calculate($num1, $num2, $operation);

echo "Results: $result \n";

$antwoord = strtolower(readline("Typ 'doorgaan' om verder te gaan of iets anders om te stoppen."));

if ($antwoord == "doorgaan"){
        echo "Nieuwe berekening: \n";
    }else{
        echo "Programma gestop \n";
    } 
}

function getNumber1()
{
    return (float)readline("Enter first number: ");
}

function getOperation()
{
    return readline("Enter operation (+, -, *, /): ");
}

function getNumber2()
{
    return (float)readline("Enter second number: ");
}



function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
        default:
            return "Foute operator!";
    }
}



?>
