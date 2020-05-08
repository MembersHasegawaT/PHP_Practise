<?php
    $temperature = 36.0;
    if($temperature <= 37.0){
        echo "平熱です\n";
    }else if($temperature > 37.0 && $temperature <37.5){
        echo "微熱です\n";
    }else{
        echo "コロナの可能性あり\n";
    }
?>