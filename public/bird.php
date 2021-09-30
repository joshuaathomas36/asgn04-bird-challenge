<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" />
      <h2>WNC Birds</h2>
      <p>Small Sampling of WNC Birds</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>

      <?php 
      include(PRIVATE_PATH . '/classes/bird.class.php');
      include(PRIVATE_PATH . '/classes/parsecsv.class.php');

      $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
      $bird_array = $parser->parse();
      ?>

      <?php foreach($bird_array as $args) { ?>
        <?php $birds = new Bird($args); ?>
      <tr>
        <td><?php echo h($birds->common_name); ?></td>
        <td><?php echo h($birds->habitat); ?></td>
        <td><?php echo h($birds->food); ?></td>
        <td><?php echo h($birds->nest_palcement); ?></td>
        <td><?php echo h($birds->behavior); ?></td>
        <td><?php echo h($birds->conservation_level()); ?></td>
        <td><?php echo h($birds->backyard_tips); ?></td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
