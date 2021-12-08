<?php 
require_once('../../private/initialize.php');

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamanderHeader.php'); 
?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

Page ID: <?= h($id); ?>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
