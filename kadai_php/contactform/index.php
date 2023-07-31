<?php
  $name = filter_input(INPUT_POST,'name');
  $mail = filter_input(INPUT_POST,'mail');
  $age = filter_input(INPUT_POST,'age');
  $comments = filter_input(INPUT_POST,'comments');
?>

<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>お問合わせフォームを作る</title>
  <link rel="stylesheet" type="text/css" href="php_style.css">
</head>

<body>
  <h1>お問合わせフォーム</h1>
  <form method="post" action="mail_confirm.php">
    <div>
      <label>名前</label>
      <br>
      <input type="text" class="text" size="35" value="<?php echo $_POST['name']; ?>" name="name">
    </div>
    <div>
      <label>メールアドレス</label>
      <br>
      <input type="text" class="text" size="35" value="<?php echo $_POST['mail']; ?>" name="mail">
    </div>
    <div>
      <label>年齢</label>
      <br>
      <select class="dropdown" name="age">
        <option>選択してください</option>
        <?php
        for ($i = 18; $i <= 65; $i++) {
          if ($i == $_POST['age']) {
            //$iと$_POST['age']が同じ時は$_POST['age']を出力、それ以外は$iを出力
            echo ('<option value="' . $_POST['age'] . '"selected>' . $_POST['age'] . '歳</option>');
          } else {
            echo ('<option value="' . $i . '">' . $i . '歳</option>');
          }
        }
        ?>
      </select>
    </div>
    <div>
      <label>コメント</label>
      <br>
      <textarea cols="35" rows="7" name="comments"><?php echo $_POST['comments']; ?></textarea>
    </div>
    <div>
      <input type="submit" class="submit" value="送信する">
    </div>
  </form>
</body>

</html>