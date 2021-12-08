<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $salamanderName = $_POST['salamanderName'] ?? '';
  
  echo "Form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
