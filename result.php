<?php
    $name = $_POST['name'];
    $selectsex = $_POST['sex'];
    $selectage = $_POST['age'];
    $ten = ',';
   //  print_r($_POST); // デバッグ用
    $selectedAnimals = $_POST['animals'];
   
    $lile = implode(", ", $selectedAnimals);
   //  echo $name.$ten. $selectsex.$ten. $selectage.$ten;
   //  echo implode(", ", $selectedAnimals);
   //  var_dump($selectedAnimals);
   //  echo '</pre>';

   if($selectsex =="man"){
      $selectsex ="男性";
   }else{
      $selectage = "女性";
   }

   if($lile == "dog"){
      $lile = "犬";
   }else if($lile == "dog, cat"){
      $lile = "犬、猫";
   }

   $info = $name.$ten. $selectsex.$ten. $selectage.$ten;

   $file = fopen("data.csv", "a");
   fwrite($file, $info);
   fwrite($file, $lile."\n");
   fclose($file);
 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="./css/style2.css">
 </head>
 <body>
   <div class="end">
      <div class="text">
         <p class="a">送信完了</p>
         <p class="b">協力ありがとう！！</p>
      </div>
      <div class="contents">
         <ul>
            <div class="content">入力内容</div>
            <li>名前：<?= $name?></li>
            <li>性別：<?= $selectsex?></li>
            <li>年齢：<?= $selectage?>代</li>
            <li>好きな動物：<?= $lile?></li>
         </ul>
      </div>
   </div>
    
 </body>
 </html>