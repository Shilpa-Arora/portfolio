// JavaScript Document

(function() {
$(document).ready(function () {
    $("nav").find("li").on("click", "a", function () {
        $('.navbar-collapse.in').collapse('hide');
    });
});

$("ul li").on("click", function() {
    $("li").removeClass("active");
    $(this).addClass("active");
  });


})();

