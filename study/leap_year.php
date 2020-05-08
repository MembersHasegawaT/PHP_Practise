<?php
    function leap_year($year){
        if($year%400 == 0 || ($year%4==0 && !($year%100==0))){
            echo "入力された年は、うるう年です。\n";
        }else{
            echo "入力された年は、平年です。\n";
        }
    }
    
    echo "西暦で入力してください\n";
    leap_year(fgets(STDIN));
?>