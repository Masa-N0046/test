var star = ["★", "☆"];
var br = "<br>";

// 比較演算子 「i = 0; i <= 5; i++」は５を含む、なので0,1,2,3,4,5の６つと数える、読みは「５以下なら」
// 比較演算子 「i = 0; i < 5; i++」は５は含まない、なので0,1,2,3,4の５つと数える、読みは「５未満なら」
//<= 5とか「以上とか未満とか」醜いし、説明しずらいよね？比較の記号は統一したほうが良くね？
// あくまで自分も他人も読みやすいように心がけね

// 問１
for (var i = 0; i < 5; i++) {
  document.write(star[0]);
}

document.write(br, br); //改行

// 問２
for (var i = 0; i < 6; i++) {
  if (i == 3) {
    document.write(br);
  }
  document.write(star[0]);
}

document.write(br, br); //改行

// 問３
for (var i = 0; i < 10; i++) {
  if (i == 5) {
    document.write(br);
  }
  document.write(star[1]);
}

document.write(br, br); //改行

// columnは列、lineも列、列は縦、列(column)は柱
// rowは行、行は横、行(row)は矢
// lineとrowは一緒じゃん！

// 問４
for (var line = 0; line < 4; line++) {  //外側のfor文は列の繰り返し、縦に0,1,2,3と4回繰り返す
  for (var row = 0; row < 5; row++) {  //内側のfor文は行の繰り返し、横に0,1,2,3,4と5回繰り返す
    document.write(star[0]);  //内側のfor文を5回繰り返すと、下のbrに移り改行する
  }
  document.write(br); //改行した後、外側のfor文に戻り、2回目の繰り返しが始まる
}

document.write(br, br); //改行

// 問５
for (var line = 0; line < 4; line++) {
  for (var row = 0; row < 3; row++) {
    document.write(star[0]);
  }
  document.write(br);
}

document.write(br, br); //改行

// 問６
for (var line = 0; line < 3; line++) {  //縦に0,1,2と3回繰り返す
  for (var row = 0; row < 3; row++) {   //横にに0,1,2と3回繰り返す
    if (row % 2 != 0) {  // r÷2のあまりが０でない時、star[1]="☆"を出力
      document.write(star[1]);
    } else {  // 0であるときはstar[0]="★"を出力
      document.write(star[0]);
    }
  }
  document.write(br);
}

document.write(br, br); //改行

// 問７
for (var line = 0; line < 5; line++) {
  for (var row = 0; row < 5; row++) {
    var i = row % 2;
    document.write(star[i]);  //計算結果としての添字が入る
    //star変数には[0, 1]が既に入っているため、i = row % 2のiが直接入ったり、star[添字]に直接row % 2を入れて計算させることもできる
    // star[row % 2]は配列の中で常に繰り返し処理の計算をしているイメージ

    // if (row % 2 != 0) {
    //   document.write(star[1]);
    // } else {
    //   document.write(star[0]);
    // }
  }
  document.write(br);
}

document.write(br, br); //改行

// 問８
for (var line = 0; line < 5; line++) {  //  lineは縦に0,1,2,3,4と5回繰り返す
  for (var row = 0; row <= line ; row++) {  // rowは横にlineのループ数、 (n + 1)回繰り返す
    // row < line + 1 は処理が余計に増えるし、大きい処理の時に痛い目みる
    // row = 0で初期化
    // 条件式row < line + 1は、line = 0の場合、row < 0 + 1 でrow < 1となる
    // lineが1増えると条件式はrow < 1+1=2、2+1=3と1ずつ増えていく、これを5回繰り返す
    // なので内側のループ数は外側のループ数に依存する
    document.write(star[0]);
  }
  document.write(br);
}
