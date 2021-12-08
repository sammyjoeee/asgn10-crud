<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $salamander = [];
  $salamander['name'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_subject($name, $habitat, $description;
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/salamanders/show.php?id=' . $new_id));

  $salamanderName = $_POST['salamanderName'] ?? '';
  
  echo "Form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
