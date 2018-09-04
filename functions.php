<?php

/**
 * Functions for calculations
 *
 * @author Jack Eastwood
 */

class Calculator {

    private $operand_one;
    private $operand_two;
    private $operand_three;
    private $operator_one;
    private $operator_two;
    private $result;
    private $result2;
    private $final_result;
    private $calculate;
    
    
    //define constructors
    public function __construct($operand_one, $operand_two, $operand_three, $operator_one, $operator_two) {

        $this->operand_one = $operand_one;
        $this->operand_two = $operand_two;
        $this->operand_three = $operand_three;
        $this->operator_one = $operator_one;
        $this->operator_two = $operator_two;
        $this->result;
        $this->result2;
        
    } //___construct
    
    //initial method call from index.php
    public function calcMethod() {
        
        if ($this->operand_three != 0 && $this->operator_two != "") {
            // if no values were entered for third number or second operator field then call fuction to calculate only 2 numbers
            $this->calculate = $this->threeNums();
            
        } else if (($this->operand_three == 0 && $this->operator_two != "") || ($this->operand_three != 0 && $this->operator_two == "")) {
            // if a value has been entered in the operand three or operator two field but only one field has been entered then message error
            echo "Please enter a third number or a second operator";
            
        } else if ($this->operand_three == 0 && $this->operator_two == "") { 
            // if no values have been inserted for third number and seond operator fields then send to cacluaton function for 2 numbers and 1 operator
            $this->calculate = $this->twoNums();
            
        } //else if
    } //calcMethod

    // function to calculate two numbers and one operator submitted
    private function twoNums() {
        //determines calculation depending on the operand one value
        switch ($this->operator_one) {
            case '+';
                $this->result = ($this->operand_one + $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " + " . $this->operand_two . " = " . $this->result;
                break;
            case '-':
                $this->result = ($this->operand_one - $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " - " . $this->operand_two . " = " . $this->result;
                break;
            case '/':
                $this->result = ($this->operand_one / $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " / " . $this->operand_two . " = " . $this->result;
                break;
            case '*':
                $this->result = ($this->operand_one * $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " * " . $this->operand_two . " = " . $this->result;
                break;
            case '>>';
                $this->result = ($this->operand_one >> $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " >> " . $this->operand_two . " = " . $this->result;
                break;
            case '<<':
                $this->result = ($this->operand_one << $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " << " . $this->operand_two . " = " . $this->result;
                break;
            case '&':
                $this->result = ($this->operand_one & $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " & " . $this->operand_two . " = " . $this->result;
                break;
            case '%':
                $this->result = ($this->operand_one % $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " % " . $this->operand_two . " = " . $this->result;
                break;
            case '|':
                $this->result = ($this->operand_one | $this->operand_two);
                echo "Your equation is: " . $this->operand_one . " | " . $this->operand_two . " = " . $this->result;
                break;
            default:
                echo "Invalid operator entered. Please enter a valid operator";
                break;
        } // switch
        
    } //twoNums

     // function to calculate three numbers and two operators submitted
     private function threeNums() {
         
         //if both operators are matched then use the same format for calculations
        if ($this->operator_one == $this->operator_two) {

            switch ($this->operator_one) {
                case '+';
                    $this->result = ($this->operand_one + $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " + " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result + $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " + " . $this->operand_three . " = " . $this->result2;
                    break;
                case '-':
                    $this->result = ($this->operand_one - $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " - " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result - $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " - " . $this->operand_three . " = " . $this->result2;
                    break;
                case '/':
                    $this->result = ($this->operand_one / $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " / " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result / $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " / " . $this->operand_three . " = " . $this->result2;
                    break;
                case '*':
                    $this->result = ($this->operand_one * $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " * " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result * $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " * " . $this->operand_three . " = " . $this->result2;
                    break;
                case '>>';
                    $this->result = ($this->operand_one >> $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " >> " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result >> $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " >> " . $this->operand_three . " = " . $this->result2;
                    break;
                case '<<':
                    $this->result = ($this->operand_one << $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " << " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result << $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " << " . $this->operand_three . " = " . $this->result2;
                    break;
                case '&':
                    $this->result = ($this->operand_one & $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " & " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result & $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " & " . $this->operand_three . " = " . $this->result2;
                    break;
                case '%':
                    $this->result = ($this->operand_one % $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " % " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result % $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " % " . $this->operand_three . " = " . $this->result2;
                    break;
                case '|':
                    $this->result = ($this->operand_one | $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " | " . $this->operand_two . " = " . $this->result;
                    $this->result2 = ($this->result | $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " | " . $this->operand_three . " = " . $this->result2;
                    break;
                default:
                    print "Invalid operator entered. Please enter a valid operator";
                    break;
            } // switch
            
        } else { //if operators don't match then second calculation gets sent to another function after the first calculation
             
            switch ($this->operator_one) {
                case '+';
                    $this->result = ($this->operand_one + $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " + " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '-':
                    $this->result = ($this->operand_one - $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " - " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '/':
                    $this->result = ($this->operand_one / $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " / " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '*':
                    $this->result = ($this->operand_one * $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " * " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '>>';
                    $this->result = ($this->operand_one >> $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " >> " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '<<':
                    $this->result = ($this->operand_one << $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " << " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '&':
                    $this->result = ($this->operand_one & $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " & " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '%':
                    $this->result = ($this->operand_one % $this->operand_two);
                    print"First calculation is: " . $this->operand_one . " % " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                case '|':
                    $this->result = ($this->operand_one | $this->operand_two);
                    print "First calculation is: " . $this->operand_one . " | " . $this->operand_two . " = " . $this->result;
                    $this->calculate = $this->second_operator();
                    break;
                default:
                    print "Invalid operator entered. Please enter a valid operator";
                    break;
            } // switch
            
        } //else
        
    } //threeNums
    
    //Function to calculate second calculation if the two operators aren't equal
    private function second_operator() {
        
        switch ($this->operator_two) {
                case '+';
                    $this->result2 = ($this->result + $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " + " . $this->operand_three . " = " . $this->result2;
                    break;
                case '-':
                    $this->result2 = ($this->result - $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " - " . $this->operand_three . " = " . $this->result2;
                    break;
                case '/':
                    $this->result2 = ($this->result / $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " / " . $this->operand_three . " = " . $this->result2;
                    break;
                case '*':
                    $this->result2 = ($this->result * $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " * " . $this->operand_three . " = " . $this->result2;
                    break;
                case '>>';
                    $this->result2 = ($this->result >> $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " >> " . $this->operand_three . " = " . $this->result2;
                    break;
                case '<<':
                    $this->result2 = ($this->result << $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " << " . $this->operand_three . " = " . $this->result2;
                    break;
                case '&':
                    $this->result2 = ($this->result & $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " & " . $this->operand_three . " = " . $this->result2;
                    break;
                case '%':
                    $this->result2 = ($this->result % $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " % " . $this->operand_three . " = " . $this->result2;
                    break;
                case '|':
                    $this->result2 = ($this->result | $this->operand_three);
                    print "<br/>Second calculation is: " . $this->result . " | " . $this->operand_three . " = " . $this->result2;
                    break;
                default:
                    print "Invalid operator entered. Please enter a valid operator";
                    break;
            } // switch
      
    } //second_operator
    
} //Calculator