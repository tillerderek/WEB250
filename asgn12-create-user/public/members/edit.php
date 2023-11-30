<?php

require_once('../../private/initialize.php');

require_login();
include(SHARED_PATH . '/public_header.php');


if (!isset($_GET['id'])) {
  redirect_to(url_for('/members/index.php'));
}
$id = $_GET['id'];
$member = Members::find_by_id($id);
if ($member == false) {
  redirect_to(url_for('/members/index.php'));
}

if (is_post_request()) {

  // Save record using post parameters
  $args = $_POST['member'];
  $member->merge_attributes($args);
  $result = $member->save();

  if ($result === true) {
    $session->message('The member was updated successfully.');
    redirect_to(url_for('/members/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit member'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

  <div class="member edit">
    <h1>Edit member</h1>

    <?php echo display_errors($member->errors); ?>

    <form action="<?php echo url_for('/members/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit member" />
      </div>
    </form>

  </div>

</div>
<?php include(SHARED_PATH . '/public_footer.php'); ?>
