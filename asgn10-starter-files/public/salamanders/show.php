<?php 
require_once('../../private/initialize.php');

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = mysqli_fetch_assoc($result);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div class="page show">

<h1>Page: <?php echo h($salamander['salamanderName']); ?></h1>

<div class="attributes">
  <?php $salamander = find_all_salamanders($salamander['id']); ?>
  <dl>
    <dt>Salamander</dt>
    <dd><?php echo h($salamander['salamanderName']); ?></dd>
  </dl>
  <dl>
    <dt>Habitat</dt>
    <dd><?php echo h($salamander['position']); ?></dd>
  </dl>
  <dl>
    <dt>Visible</dt>
    <dd><?php echo $salamander['visible'] == '1' ? 'true' : 'false'; ?></dd>
  </dl>
  <dl>
    <dt>Content</dt>
    <dd><?php echo h($salamander['content']); ?></dd>
  </dl>
</div>


</div>

</div>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

Page ID: <?= h($id); ?>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
