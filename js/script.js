function toggleNav() {
  console.log("toggleNav function is working!"); // コンソールにメッセージを出力
  var body = document.body;
  var hamburger = document.getElementById("js-hamburger");
  var blackBg = document.getElementById("js-black-bg");

  hamburger.addEventListener("click", function () {
    body.classList.toggle("nav-open");
  });
  blackBg.addEventListener("click", function () {
    body.classList.remove("nav-open");
  });
}
toggleNav();
