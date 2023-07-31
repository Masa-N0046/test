//問１
function area(halfCircle) {
  return halfCircle ** 2 * 3.14; //返す値の式を書く
}

function howLong(cm, halfCircle) {
  return "半径" + cm + "cmの円の面積は"+ area(halfCircle) + "㎠です。" + "<br>";
}

document.write("半径5cmの面積は、" + area(5) + "㎠です。" + "<br>");
document.write("半径7cmの面積は、" + area(7) + "㎠です。" + "<br>");
document.write("半径10cmの面積は、" + area(10) + "㎠です。" + "<br>");

document.write(howLong("8", 8));
document.write(howLong("6", 6) + "<br>");


// 問２
function themePrice(adult, child) {
  return adult * 500 + child * 200;
}

function themeDisplay(gr, adult, child) {
  return gr + "-groupの合計金額は、" + themePrice(adult, child) + "円です。" + "<br>";
}

document.write(
  "Aグループの合計金額は、" + themePrice(2, 4) + "円です。" + "<br>"
);
document.write(
  "Bグループの合計金額は、" + themePrice(1, 5) + "円です。" + "<br>"
);
// document.write("Cグループの合計金額は、" + themePrice(3, 7) + "円です。");

document.write(themeDisplay("C", 3, 7));
document.write(themeDisplay("D", 100, 1000));
