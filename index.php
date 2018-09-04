<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//contains OOP functions for calculations
include("functions.php");

if ((filter_input(INPUT_POST, 'operand_one') != "") && (filter_input(INPUT_POST, 'operand_two') != "" ) && (filter_input(INPUT_POST, 'operator_one') != "")) {
    //stores post fields varibales
    $operand_one = filter_input(INPUT_POST, 'operand_one');
    $operand_two = filter_input(INPUT_POST, 'operand_two');

    if (filter_input(INPUT_POST, 'operand_three') != "") {
        $operand_three = filter_input(INPUT_POST, 'operand_three');
    } else {
        $operand_three = 0;
    } //else
     
    $operator_one = filter_input(INPUT_POST, 'operator_one');

    if (filter_input(INPUT_POST, 'operator_two') != "") {
        $operator_two = filter_input(INPUT_POST, 'operator_two');
    } else {
        $operator_two = 0;
    } //if
    
    //if value fields have a letter inserted then display error message, if not then convert values to double type for calculations then send for calculations (in functions.php)
    $operand_one = (double) $operand_one;
    $operand_two = (double) $operand_two;
    $operand_three = (double) $operand_three;
   
    //send values to calculator class for calculations
   $calculator = new Calculator($operand_one, $operand_two, $operand_three, $operator_one, $operator_two);
   $result = $calculator->calcMethod();
   
   echo $result;
    
} else {
    include("form.html");
} //else

?>

