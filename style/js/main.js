$(window).scroll(function () {
  let top_of_element = $("#temoignages").offset().top;
  let bottom_of_element =
    $("#temoignages").offset().top + $("#temoignages").outerHeight();
  let top_of_screen = $(window).scrollTop();
  let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
    $(".temoignage1").addClass("animationTemoignage1");
    $(".temoignage2").addClass("animationTemoignage2");
    $(".temoignage3").addClass("animationTemoignage3");
    $(".temoignage4").addClass("animationTemoignage4");
    $(".temoignage5").addClass("animationTemoignage5");
    $(".temoignage6").addClass("animationTemoignage6");
  }
});
