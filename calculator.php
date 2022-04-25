<?php

class Calc {
    private $num1;
    private $num2;
    private $operator;
 
    function __construct($num1, $num2, $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }
 
    function calculate() {
        
        switch($this->operator) {
            case "+":
                return $this->num1 + $this->num2;
            case "-":
                return $this->num1 - $this->num2;
            case "x":
                return $this->num1 * $this->num2;
            case "/":
                return $this->num1 / $this->num2;
            default:
                return "Invalid Operator";
        }
    }
}


?>