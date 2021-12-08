<?php require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';
$habitat = '';
$description = '';  

if(is_post_request()) {

  // Handle form values sent by new.php

  $name = $_POST['salamanderName'] ?? '';
  $habitat = $_POST['habitat'] ?? '';
  $description = $_POST['description'] ?? '';

  echo "Form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
} else {

  $salamanders = find_all_salamanders($id);

  $salamanders_set = find_all_salamanders();
  $salamanders_count = mysqli_num_rows($salamanders_set);
  mysqli_free_result($salamanders_set);

}

?>


<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

  <a class="back-link" href="<?= url_for('index.php'); ?>">&laquo; Home</a>

    <h1>Edit Salamander</h1>

    <form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="salamanderName" value="" /></dd>
      </dl>
      
        <input type="submit" value="Edit Salamander" />
    </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
