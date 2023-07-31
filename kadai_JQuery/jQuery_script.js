$(document).ready(function () {

  // $(".main-slider img").heightLine();  //高さの指定ができるプラグインだけど、そもそもどういう高さにしたいのか不明なため迷子

  $(".slider").bxSlider({
    auto: true,  //自動再生するか否か
    mode: "horizontal",  //スライド遷移の種類、fade:うっすら変わる、horizontal:横方向へ流れる、vertical:縦方向へ流れる
    speed: 2000,  //画像を切り替えるスピード、2000ms:2000ミリ秒 = 2s:2秒
    controls: false,  //次か前かのコントロールを司る  指示書にないものを書くのはいいことでも悪いことでも報告が必要だよね。仕事だと特に。
    slideWidth: 1000,  //スライドの横幅
  });

  // $(".main-slider").css({"width": "100px", "height": "100px"})  //幅と高さの調節ができると思っていたが結果スタイルが崩れた

});