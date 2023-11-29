<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?> 
<?php

// Find all members
$members = members::find_all();

?>
<?php $page_title = 'members'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
  <div class="members listing">
    <h1>members</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/members/new.php'); ?>">Add member</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($members as $member) { ?>
        <tr>
          <td><?php echo h($member->id); ?></td>
          <td><?php echo h($member->first_name); ?></td>
          <td><?php echo h($member->last_name); ?></td>
          <td><?php echo h($member->email); ?></td>
          <td><?php echo h($member->username); ?></td>
          <td><a class="action" href="<?php echo url_for('/members/show.php?id=' . h(u($member->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/members/edit.php?id=' . h(u($member->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/members/delete.php?id=' . h(u($member->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
