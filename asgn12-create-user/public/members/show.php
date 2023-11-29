<?php require_once('../../private/initialize.php'); ?>


<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$member = members::find_by_id($id);

?>

<?php $page_title = 'Show member: ' . h($member->full_name()); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

  <div class="member show">

    <h1>member: <?php echo h($member->full_name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?php echo h($member->first_name); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?php echo h($member->last_name); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($member->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($member->username); ?></dd>
      </dl>
    </div>

  </div>

</div>
