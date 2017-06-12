
  $(function() {
  $(".dropdown-header").on("click",function() {
    var id = $(this).attr("data-id");
    $("#"+id).slideToggle()
    console.log(id);
  });
});

function test(){

    document.getElementById("population").value =  "";
    document.getElementById("percWhite").value = "";
    document.getElementById("percBlack").value = "";
    document.getElementById("percLatin").value = "";
    document.getElementById("percAsian").value = "";
    document.getElementById("economy").value = "";
    document.getElementById("perHeadIncome").value = "";
    document.getElementById("joblessRate").value = "";
    $('input[name="politic"]').prop('checked', false);

}


