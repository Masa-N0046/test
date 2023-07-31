<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");
// http://localhost:8888/contactform/insert.php
// 第四引数のパスワードは入れないと読み込んでくれなかったため、"root"設定した。

$pdo->exec("insert into contactform(name,mail,age,comments) values('" . $_POST['name'] . "','" . $_POST['mail'] . "','" . $_POST['age'] . "','" . $_POST['comments'] . "');");

?>

<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問合せフォームを作る</title>
  <link rel="stylesheet" type="text/css" href="php_style2.css">
</head>

<body>
  <h1>お問合せフォーム</h1>
  <div class="confirm">
    <p>お問合せありがとうございました。<br>3営業日以内に担当よりご連絡差し上げます。</p>
  </div>
</body>

</html>