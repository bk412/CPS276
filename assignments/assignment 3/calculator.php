<?
// $result = "";
class Calculator {  
private $a;
private $b;

function calc($operator,$op1= null, $op2=null)
{
    if($op1===null || $op2===null){
        return "invalid operators<br>";
    } 
    $this->a = $op1;
    $this->b = $op2;
    switch($operator)

    {

    case '+':

    return "the sum is " . $this->a + $this->b . "<br>";

    break;

    case '-':

    return "the diff is " . $this->a - $this->b . "<br>";

    break;

    case '*':

    return "the product is " . $this->a * $this->b . "<br>";

    break;

    case '/':
        if($this->b== 0){
            return "cannot divide by 0 <br>";
        }    
    return  "the division is " . $this->a / $this->b . "<br>";

    break;

    default:

    return "Sorry No command found";

    }

}

function getresult($a, $b, $c)

{

$this->a = $a;

$this->b = $b;

return $this->calc($c);

}

}
$cal = new calculator();

if(isset($_POST['submit']))

{

$results = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);

}

