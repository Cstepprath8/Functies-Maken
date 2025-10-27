<?php
// Colin Stepprath
echo "Functies \n";

$num1 = getNumber1();
$operation = getOperation();
$num2 = getNumber2();
$result = calculate($num1, $num2, $operation);


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

echo "Result: $result\n";

?>
