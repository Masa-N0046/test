<!doctype HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>お問合わせフォームを作る </title>
  <link rel="stylesheet" type="text/css" href="php_style2.css">
</head>

<body>
  <h1> お問合わせ内容確認</h1>
  <div class="confirm">
    <p> お問い合わせ内容はこちらで宜しいでしょうか?
      <br> よろしければ「送信する」ボタンを押して下さい。
    </p>
    <p> 名前
      <br>
      <?php echo $_POST['name']; ?>
    </p>
    <p> メールアドレス
      <br>
      <?php echo $_POST['mail']; ?>
    </p>

    <p> 年齢 <br>
      <?php echo $_POST['age']."歳"; ?>
    </p>
    <p> コメント <br>
      <?php echo $_POST['comments']; ?>
    </p>
    <!-- <form method="post" action="php_index.html"> -->
    <form method="post" action="index.php">
      <input type="submit" class="button1" value="戻って修正する">
      <!-- 戻って値を追加させるためのコード、以下 -->
      <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>
    <form method="post" action="insert.php">
      <!-- セミコロン注意  ""半角  ””全角  検証ツールにて判明 -->
      <input type="submit" class="button2" value="登録する">

      <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>
  </div>
</body>

</html>