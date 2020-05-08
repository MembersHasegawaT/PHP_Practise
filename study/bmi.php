<?php
    function bmi(){
        echo "身長を入力してください: ";
        $height = fgets(STDIN);
        $height/=100.0;
        
        echo "体重を入力してください: ";
        $weight = fgets(STDIN);
        
        $bmi = $weight / ($height*$height);
        
        if($bmi<18.5){
            echo "あなたは低体重です。";
        }else if($bmi >=18.5 && $bmi < 25){
            echo "あなたは普通体重です。";
        }else{
            echo "あなたは、肥満です。";
        }
    }
    
    bmi();
?>