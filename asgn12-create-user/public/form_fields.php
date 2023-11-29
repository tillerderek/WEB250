<?php

/* 
  Use the bicycles/staff/form_fields.php file as a guide 
  so your file mimics the same functionality.
 
*/
if(!isset($bird)) {
  redirect_to(url_for('/birds/index.php'));
} 
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?php echo h($bird->common_name); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>" /></dd> 
</dl>

<dl>
  <dt>Conservation</dt>
  <dd>
    <select name="bird[conservation_id]">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $conservation_id => $conservation) { ?>
      <option value="<?php echo $conservation_id; ?>" <?php if($bird->conservation_id == $conservation_id) { echo 'selected'; } ?>><?php echo $conservation; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><textarea name="bird[backyard_tips]" cols="60" rows="10"><?php echo h($bird->backyard_tips); ?></textarea></dd>
</dl>




