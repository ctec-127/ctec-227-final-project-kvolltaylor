$(document).ready(function(){
    console.log('login.js is fired off')

	$("#login_popup").on("submit", function(e){
        console.log('login_popup submit is fired off');
        e.preventDefault();
		submitForm();
	});
});

function submitForm(){
    console.log('submitForm function is fired off')
    $.ajax({
      type: 'POST',
      url: 'inc/content/session-backend.inc.php',
      data: $('#login_popup').serialize(),
      success: function(response){
        console.log('From Login' + response);
      },
      error: function(){
        console.log("Error with submitForm function");
      }
    });
    $('#submit').css({"display":"none"});
  }