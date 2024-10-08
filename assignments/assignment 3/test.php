//
<?php
//require_once "Calculator.php"; 
//$Calculator = new Calculator(); 
//$result=""; 
//$result .= $Calculator->calc("*", 10, 2); 
//$result .= $Calculator->calc("*", 4.56, 2); 
//$result .= $Calculator->calc("/", 10, 2); 
//$result .= $Calculator->calc("/", 10, 3); 
//$result .= $Calculator->calc("/", 10, 0); 
//$result .= $Calculator->calc("/", 0, 10);   
//$result .= $Calculator->calc("-", 10, 2); 
//$result .= $Calculator->calc("-", 10, 20); 
//$result .= $Calculator->calc("+", 10.5, 2); 
//$result .= $Calculator->calc("+", 10.5, 0); 
//$result .= $Calculator->calc("*", 10); 
//$result .= $Calculator->calc("+","a",10); 
//$result .= $Calculator->calc("+",10,"a"); 
//$result .= $Calculator->calc(10); 
//
?>

<?php
    require_once("calculator.php");
    $myCalc = new Calculator();
    echo($myCalc->calc("*", 10, 2));
    echo($myCalc->calc("*", 4.56, 2));  
    echo($myCalc->calc("/", 10, 2)); 
    echo($myCalc->calc("/", 10, 3));
    echo($myCalc->calc("/", 10, 0));
    echo($myCalc->calc("/", 0, 10));
    echo($myCalc->calc("-", 10, 2));
    echo($myCalc->calc("-", 10, 20)); 
    echo($myCalc->calc("+", 10.5, 2));  
    echo($myCalc->calc("+", 10.5, 0)); 
    echo($myCalc->calc("*", 10));  
    echo($myCalc->calc("+","a",10));  
    echo($myCalc->calc("+",10,"a")); 
    echo($myCalc->calc(10));         
?>