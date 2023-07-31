var star = ["★", "☆"];
var br = "<br>"

// 問８
// 動かない
for (var col = 0; col < 5; col++) {
  //  col（カラム）を０から４まで繰り返す
  //  r（ロー）はcol（カラム）が１増えるごとにr（ロー）も１ずつ増える
  for (var r = 0; r < col++ ; r++) {
  //  r < col++とr <= colは一緒の意味になる
    document.write(star[0]);
  }
  document.write(br);
}

// 動く
for (var col = 0; col <= 4; col++) {
  //  col（カラム）を０から４まで繰り返す
  //  r（ロー）はcol（カラム）が１増えるごとにr（ロー）も１ずつ増える
  for (var r = 0; r < col + 1 ; r++) {
  //  r < col++とr <= colは一緒の意味になる
    document.write(star[0]);
  }
  document.write(br);
}