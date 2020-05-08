<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
$kind = array(0,2,5);
$pc_hand = $kind[rand(0,2)];
$player_hand = $_POST['playerHand'];//$_POSTはURLにデータが表示されない。$_GETは表示される。取得するときは同様。

if(($player_hand-$pc_hand == -2) || ($player_hand-$pc_hand == -3) || ($player_hand-$pc_hand == 5)){
    $result="勝ち";
}else if($player_hand-$pc_hand == 0){
    $result ="あいこ";
}else{
    $result ="負け";
}

$player_hand = jankenHand($player_hand);
$pc_hand = jankenHand($pc_hand);

function jankenHand($hand){
    switch($hand){
        case 0:
            $hand = "グー";
            break;
        case 2:
            $hand ="チョキ";
            break;
        case 5:
            $hand ="パー";
            break;
    }
    return $hand;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <?php echo $result."!" ?>
            <p class="result-word"></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：<?php echo $player_hand ?><br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?php echo $pc_hand ?> <br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>