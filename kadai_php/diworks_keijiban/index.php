<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php

  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");
  $stmt = $pdo->query("select * from diworks_keijiban");

  ?>
  <header>
    <img src="diblog_logo.jpg" />
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>D.I.Blogについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>
  <main>
    <div class="main-container">
      <div class="left">
        <h1>プログラミングに役立つ書籍</h1>
        <form method="post" action="insert.php" name="form" onsubmit="return checkText()">
          <!-- 空文字列を送信させないため name="form" onsubmit="return checkText()"を追加-->
          <h2>入力フォーム</h2>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="50" name="handlename">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="50" name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea class="comments" cols="70" rows="7" name="comments"></textarea>
          </div>
          <div>
            <input type="submit" class="submit" name="submit" value="投稿する">
          </div>
        </form>
        <script>
          // 送信時、空文字列を送信させない
          function checkText() {
            // document.(name=)form.(name=)handlename.value(入力した値)
            var handlename = document.form.handlename.value;
            var title = document.form.title.value;
            var comments = document.form.comments.value;
            if (handlename == "" || title == "" || comments == "") {
              alert('値が入力されていません！')
              return false;
            }
          }
        </script>
        <?php
        while ($row = $stmt->fetch()) {
          echo "<div class='kiji'>";
          echo "<h3>" . $row['title'] . "</h3>";
          echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by " . $row['handlename'] . "</div>";
          echo "</div>";
          echo "</div>";
        }
        ?>
      </div>
      <div class="right">
        <h3>人気の記事</h3>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>いま人気のエディタ</li>
          <li>HTMLの基礎</li>
        </ul>
        <h3>オススメリンク</h3>
        <ul>
          <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipceのダウンロード</li>
          <li>Braketsのダウンロード</li>
        </ul>
        <h3>カテゴリ</h3>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
      </div>
    </div>
  </main>
  <footer>
    Copyright D.I.works| D.I.blog is the one which provides A to Z about
    programming
  </footer>
</body>

</html>