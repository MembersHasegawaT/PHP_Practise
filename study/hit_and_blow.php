<?php
    function hit_and_blow(){
        $count=0;
        $randomArray = generate_randomArray();
        //print_r($randomArray);        //動作確認用
        
        while(true){
            echo "■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
            echo ++$count."回目のチャレンジ！\n";
            $inputArray = check_input();
            
            $check=array("hit"=>0,"blow"=>0);
            
            for($i=0;$i<count($randomArray);$i++){
                for($j=0;$j<count($inputArray);$j++){
                    if(($randomArray[$i] == $inputArray[$j]) && ($i == $j)){
                        $check["hit"]++;
                    }else if($randomArray[$i] == $inputArray[$j]){
                        $check["blow"]++;
                    }
                }
            }
            
            if($check["hit"]==count($randomArray)){
                echo "正解です！".$count."回目でクリアです！\n";
                break;
            }else{
                echo "Hit:".$check["hit"].", Blow:".$check["blow"]." です\n";
            }
        }
    }
    
    function generate_randomArray(){
        $randomArray = array($rand = rand(1,9),0,0);
        for($i=0;$i<count($randomArray);$i++){
            $rand = rand(1,9);
            for($j=0;$j<$i;$j++){
                if($randomArray[$j]==$rand){
                    $i--;
                }else{
                    $randomArray[$i]=$rand;
                }
            }
        }
        return $randomArray;
    }
    
    function check_input(){
        $checkInput=true;
        while($checkInput){
            echo "3桁の半角数字を重複なしで入力してください:";
            $input = fgets(STDIN);
            $inputArray = str_split($input);
            
            array_pop($inputArray);         //末尾に余計な配列が加わるので、除去
            
            if(count($inputArray)==3){
                $checkCount=0;
                for($i=0;$i<count($inputArray);$i++){
                    for($j=0;$j<count($inputArray);$j++){
                        if($inputArray[$i]==$inputArray[$j]){
                            $checkCount++;
                        }
                    }
                    $checkCount--;
                }

                if($checkCount==0){
                    $checkInput=false;
                    return $inputArray;
                }else{
                    echo "□■□■□■□■ー:3桁の半角英数字を重複なしで入力してください！□■□■□■□■\n";
                }
            }
            else{
                echo "□■□■□■□■エラー:3桁の半角英数字を重複なしで入力してください！□■□■□■□■\n";
            }
        }
    }
    
    
    echo "hit_and_blowゲームをしよう！";
    hit_and_blow();
?>