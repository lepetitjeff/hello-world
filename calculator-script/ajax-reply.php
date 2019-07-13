<?php
error_reporting(0);
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calcu = $_POST['operator'];
//echo $calcu;

function calculate($n1,$n2)
        {
            $compute='';
            $calcu = $_POST['operator'];
            if($calcu=='+')
            {
                $compute = $n1 + $n2; 
            }
            if($calcu=='-')
            {
               $compute = $n1 - $n2; 
            }
            if($calcu=='*')
            {
               $compute = $n1 * $n2; 
            }
            if($calcu=='/')
            {
               $compute = $n1 / $n2; 
            }
            if($calcu=='%')
            {
               $compute = $n1 % $n2; 
            }          
                return $compute ;           
        }
         echo calculate($num1,$num2);
?>