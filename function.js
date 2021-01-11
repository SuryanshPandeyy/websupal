$(".dd_icon").click(function() {
  $("#submenu").stop().slideToggle(200);
  $(".dd_path").toggleClass("down");
});

$(".dw").click(function() {
  $(".section").toggleClass("color");
  $("#submenu").toggleClass("color");
  $(".head").toggleClass("color");
  $(".chat_fit").toggleClass("color");
});



$(".chat_fit").click(function() {
  $("#chat-box").stop().slideToggle(200);
  $("#chat_small_box").stop().slideToggle(200);
  $("#fa-paper-plane").stop().slideToggle(200);
});

$(".icon_img1").click(function () {
  $(".icon_text:nth-child(1)").toggleClass("show");
});
$(".icon_img2").click(function () {
  $(".icon_text:nth-child(2)").toggleClass("show");
});


