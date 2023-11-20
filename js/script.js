function toggleNav() {
  console.log("toggleNav function is working!"); // コンソールにメッセージを出力
  var body = document.body;
  var hamburger = document.getElementById("js-hamburger");
  var blackBg = document.getElementById("js-black-bg");

  //上記の関数のコンソール
  console.log(body);
  console.log(hamburger);
  console.log(blackBg);

  hamburger.addEventListener("click", function () {
    body.classList.toggle("nav-open");
    console.log("hamburger click function is working!");
  });
  blackBg.addEventListener("click", function () {
    body.classList.remove("nav-open");
    console.log("blackBg click function is working!");
  });
}
toggleNav();
