<?php
    function fizzbuzz($number){
        if($number % 3 ==0 && $number % 5 == 0){
            echo "FizzBuzz";
        }else if($number%3==0){
            echo "Fizz";
        }else if($number%5==0){
            echo "Buzz";
        }else{
            echo $number;
        }
    }
    
    for($i=1;$i<=100;$i++){
        fizzbuzz($i);
        echo " ";
    }
?>