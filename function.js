$(function() {
  $(".dropdown-header").on("click",function() {
    var id = $(this).attr("data-id");
    $("#"+id).slideToggle()
    console.log(id);
  });
});