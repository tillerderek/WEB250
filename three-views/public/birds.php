<?php 
  require_once('../private/initialize.php');
  $page_title = 'Bird List';
  include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<?php if($session->is_logged_in()) { ?>
  <p>
    <a href="new.php">Add a bird</a>
  </p>
<?php } ?>

    <table border="1">
      <tr>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
      </tr>

<?php

// Create a new bird object that uses the find_all() method



  $birds = Bird::find_all(); 

  ?>
      <?php foreach($birds as $bird) { ?>
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <?php if($session->is_logged_in()) { ?>
          <td><a href="<?php echo url_for('detail.php?id=' . h(u($bird->id))); ?>">View</a></td>
         <td><a href="<?php echo url_for('edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
         <td><a href="<?php echo url_for('delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
       <?php } ?>
      </tr>
      <?php } ?>

    </table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
