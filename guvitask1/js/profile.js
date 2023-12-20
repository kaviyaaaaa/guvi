$(document).ready(function() {
    // Populate name field
    $("#name").html("<?php echo $user['name']; ?>");
    
    // Populate email field
    $("#email").html("<?php echo $user['email']; ?>");
    
    // Populate phone field
    $("#dob").html("<?php echo $user['dob']; ?>");

    $("#gender").html("<?php echo $user['gender']; ?>");
    
    // Add more fields as needed
  });
  