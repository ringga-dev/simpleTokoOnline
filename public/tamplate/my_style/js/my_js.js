

function klik(){
  $(document).ready(function() {
    // #login-box password field

    if ($('#pass').attr('type') == 'password') {
      $('#pass').attr('type', 'text');
    
    document.getElementById("viewPass").className = "fas fa-lock-open";
    // $('#pass').val('Password');
    } else {
      $('#pass').attr('type', 'password');
    
    document.getElementById("viewPass").className = "fas fa-lock";
    }
    
});
 }