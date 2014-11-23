<div id="content">
	<?php echo $itemName.' '.' '.$item_id.' '.$initial_price.' '.$current_winner_id.' '.$current_price.' '.$current_max_bid.' '.$end_date; ?>
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
    <input type="hidden" id="item_id" name="item_id" value="<?php echo  $item_id; ?>" />
  <input type="hidden" id="itemName" name="itemName" value="<?php echo  $itemName; ?>" />
    <input type="hidden" id="initial_price" name="initial_price" value="<?php echo  $initial_price; ?>" />
      <input type="hidden" id="current_winner_id" name="current_winner_id" value="<?php echo  $current_winner_id; ?>" />
        <input type="hidden" id="current_price" name="current_price" value="<?php echo  $current_price; ?>" />
         <input type="hidden" id="current_max_bid" name="current_max_bid" value="<?php echo  $current_max_bid; ?>" />
        <input type="hidden" id="end_date" name="end_date" value="<?php echo  $end_date; ?>" />


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

  <input type="hidden" id="item_id" name="item_id" value="<?php echo  $item_id; ?>" />
  <input type="hidden" id="itemName" name="itemName" value="<?php echo  $itemName; ?>" />
    <input type="hidden" id="initial_price" name="initial_price" value="<?php echo  $initial_price; ?>" />
      <input type="hidden" id="current_winner_id" name="current_winner_id" value="<?php echo  $current_winner_id; ?>" />
        <input type="hidden" id="current_price" name="current_price" value="<?php echo  $current_price; ?>" />
         <input type="hidden" id="current_max_bid" name="current_max_bid" value="<?php echo  $current_max_bid; ?>" />
        <input type="hidden" id="end_date" name="end_date" value="<?php echo  $end_date; ?>" />

  <p>
  <input type="submit" class="greenButton" value="nextbid" />
  </p>

 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->

</div><!--<div id="content">-->

