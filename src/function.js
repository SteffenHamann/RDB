
  $(function() {
  $(".dropdown-header").on("click",function() {
    var id = $(this).attr("data-id");
    $("#"+id).slideToggle()
    console.log(id);
  });
});


$(document).ready(function(){

    $('input').bind('input', function() {
    // Here we set the button to not disabled if the radio was selected
      $('#submit-button').prop('disabled', !$(this).val().length === 0);
      $('#submit-button').prop('disabled', $(this).val().length === 0);
    });

    $('select').bind('input', function() {
    // Here we set the button to not disabled if the radio was selected
      $('#submit-button').prop('disabled', !$(this).val().length === 0);
      $('#submit-button').prop('disabled', $(this).val().length === 0);
    });

    $('input[type="radio"]').on('change', function () {
      // Here we set the button to not disabled if the radio was selected
      $('#submit-button').prop('disabled', !$(this).prop('checked'));
      $('#submit-button').prop('disabled', $(this).prop('checked'));
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
    $('input[name="politic"]').parent().removeClass('active');
    $('#submit-button').prop('disabled', true);

}


