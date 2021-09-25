<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <ul id="menu">
    <li><a href="<?php echo url_for('/bicycles.php'); ?>">View Our Inventory</a></li>
    <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
  </ul>
    
</div>

<?php $super_hero_image = 'tufted-titmouse.jpg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
