$(document).ready(function(){ 

    $('input[name="mobileNumber"]').keypress(function(e){
            var keyCode = e.which;
    /*
    8 - (backspace)
    32 - (space)
    48-57 - (0-9)Numbers
    */
    if ( (keyCode != 8 || keyCode ==32 ) && (keyCode < 48 || keyCode > 57)) { 
      return false;
    }
  });

  $('input[name="name"]').keypress(function(e){
    var keyCode = e.which;
 
    /* 
    48-57 - (0-9)Numbers
    65-90 - (A-Z)
    97-122 - (a-z)
    8 - (backspace)
    32 - (space)
    */
    // Not allow special 
    if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 8 && keyCode != 32) {
      e.preventDefault();
    }
    
  });

  $('input[name="email"]').keypress(function(e){
    var keyCode = e.which;
 
    /* 
    48-57 - (0-9)Numbers
    65-90 - (A-Z)
    97-122 - (a-z)
    8 - (backspace)
    32 - (space)
    */
    // Not allow special 
    if ( !( (keyCode >= 48 && keyCode <= 57) 
      ||(keyCode >= 65 && keyCode <= 90) 
      || (keyCode >= 97 && keyCode <= 122) ) 
      && keyCode != 8 && keyCode == 32) {
      e.preventDefault();
    }
    
  });
});