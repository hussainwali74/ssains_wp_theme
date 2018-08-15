$("#signup-updates-btn").click(function(){
    var email = $("#ask-email input").val();
  
    $.post( "/subscribe/" + email, {_token: token})
      .done(function( data ) {
          $("#ask-email").html("<p style='color:#8AFFCE !important;'>Thankyou for signing up! Your email address has been recorded.</p>")
      });
  });
  