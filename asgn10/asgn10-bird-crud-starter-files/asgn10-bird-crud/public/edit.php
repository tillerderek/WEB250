<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/edit.php file as a guide 
  so your file mimics the same functionality.
  Be sure to include the display_errors() function.
*/

if (!isset($_GET['id'])) {
  redirect_to(url_for('/public/birds.php'));
}
$id = $_GET['id'];
$bird = Bird::find_by_id($id);
if ($bird == false) {
  redirect_to(url_for('/public/birds.php'));
}

if (is_post_request()) {

  // Save record using post parameters
  $args = $_POST['bird'];
  $bird->merge_attributes($args);
  $result = $bird->save();

  if ($result === true) {
    $_SESSION['message'] = 'The bird was updated successfully.';
    redirect_to((url_for('/show.php?id=' . $id)));
  } else {
    // show errors
    $_SESSION['message'] = 'Failed to update bird.';
  }

} else {

}

// display the form

?>
<?php $page_title = 'Edit Bird'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/birds.php'); ?>">&laquo; Back to List</a>

  <div class="bird edit">
    <h1>Edit Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Bird" />
      </div>
    </form>

  </div>



  <?php include(SHARED_PATH . '/public_footer.php'); ?>
