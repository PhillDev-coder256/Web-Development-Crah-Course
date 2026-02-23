<?php
// Functions - is a block of code that gets excuted once called

function addTwoNumbers($num1, $num2){
    // Block of code that gets executed once the function is called
    $sum = $num1 + $num2;
    echo "The sum of " . $num1 . " and " . $num2 . " is " . $sum . "<br>";
}

// Call the function
addTwoNumbers(5, 3);
addTwoNumbers(35, 13);
addTwoNumbers(7, 3);
addTwoNumbers(9, 0);

?>