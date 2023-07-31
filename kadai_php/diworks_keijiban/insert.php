<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");
// http://localhost:8888/contactform/insert.php
// 第四引数のパスワードは入れないと読み込んでくれなかったため、"root"設定した。

$pdo->exec("insert into contactform(name,mail,age,comments) values('" . $_POST['name'] . "','" . $_POST['mail'] . "','" . $_POST['age'] . "','" . $_POST['comments'] . "');");

?>

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
    <form action="php_index.html">
      <input type="submit" class="button1" value="戻って修正する">
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