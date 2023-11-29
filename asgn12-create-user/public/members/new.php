<?php

require_once('../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['member'];
  $member = new members($args);
  $result = $member->save();

  if($result === true) {
    $new_id = $member->id;
    $session->message('The member was created successfully.');
    redirect_to(url_for('/members/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $member = new members;
}

?>

<?php $page_title = 'Create member'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

  <div class="member new">
    <h1>Create member</h1>

    <?php echo display_errors($member->errors); ?>

    <form action="<?php echo url_for('/members/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create member" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
