<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="ankt">
    <div id="an"><h3>アンケート</h3></div>
    <form action="result.php" method="post">
      <div class="name">    
        名前：<input type="text" name="name" id="name">
      </div>
      <div class="sex">
        性別：
        <select name="sex" id="sex">
        <option value="" class="bbb"></option>
        <option value="man" class="bbb">男性</option>
        <option value="woman" class="bbb">女性</option>
        </select>
      </div>
      <div class="age">
        年齢：<select name="age" id="age">
        <option value=""></option>
        <option value="10">10代</option>
        <option value="20">20代</option>
        <option value="30">30代</option>
        <option value="40">40代</option>
        <option value="50">50代</option>
        </select>
      </div>

    <div class="judge">
        <h4>どっちが好き？</h4>
    </div>
      <div class="ha">
        <div class="dog">
            <img src="./img/dog.png" alt="犬">
            <input type="checkbox" name="animals[]" value="dog" id="dog_check">
        </div>

        <div class="cat">
            <img src="./img/cat.png" alt="猫">
            <input type="checkbox" name="animals[]" value="cat" id="cat_check">
        </div>
      </div>
        <button type="submit" id="btn">送信</button>
    </form>

</div>
<script>

  document.querySelector("#btn").onclick = function(){
    let name = document.querySelector("#name").value;
    let sex = document.querySelector("#sex").value;
    let age = document.querySelector("#age").value;
    console.log(name);
    console.log(sex);
    if(name=="" || sex == "" || age ==""){
      alert("必要な値が入力されていません。")
    }
  };
</script>
    
</body>
</html>