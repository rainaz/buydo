<div id="content">
	<?php echo $itemName.$initial_price; ?>
	hello world

<h1>BIDATA!</h1>

<?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("item/calculateBid"); ?>
<div class="reg_form">
<div class="form_title">SET MAXBID</div>
<div class="form_sub_title">MAXBID</div>
<p>
<label for="value">value</label>
  <input type="text" id="value" name="value" value="<?php echo set_value('value'); ?>" />
  <input type="hidden" id="itemName" name="itemName" value="<?php echo  $itemName; ?>" />

</p>

	

  <p>
  <input type="submit" class="greenButton" value="maxbid" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->

<?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("item/calculateBid"); ?>
<div class="reg_form">
<div class="form_title">SET NEXTBID</div>
<div class="form_sub_title">LUITUA</div>


  <input type="hidden" id="itemName" name="itemName" value="<?php echo  $itemName; ?>" />

  <p>
  <input type="submit" class="greenButton" value="nextbid" />
  </p>

 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->

</div><!--<div id="content">-->

