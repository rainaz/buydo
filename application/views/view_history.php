<div class="content">
<?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/viewBidHistory"); ?>

<div class="reg_form">
<div class="form_title">BID ITEM VIEW</div>
<div class="form_sub_title">PLEASE ENTER ITEM_ID</div>
<p>
<label for="item_id">item_id</label>
  <input type="text" id="item_id" name="item_id" value="<?php echo set_value('item_id'); ?>" />
</p>

  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->

</div><!--<div id="content">-->