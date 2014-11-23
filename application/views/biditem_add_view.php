<div id="content">


<div class="biditem_form">
<div class="form_title">Add BidItem</div>
<div class="form_sub_title">Come on!!!</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("item/submitBidItem"); ?>


<p>
<label for=item_name>Item name:</label>
  <input type="text" id="item_name" name="item_name" value="<?php echo set_value('item_name'); ?>" />
</p>
<p>
<label for=agreement>Agreement:</label>
  <input type="text" id="agreement" name="agreement" value="<?php echo set_value('agreement'); ?>" />
</p>
<p>
<label for=spec>Spec:</label>
  <input type="text" id="spec" name="spec" value="<?php echo set_value('spec'); ?>" />
</p>
<p>
<label for=picture>Picture:</label>
  <input type="text" id="picture" name="picture" value="<?php echo set_value('picture'); ?>" />
</p>
<p>
<label for=price>Initial Price:</label>
  <input type="text" id="initprice" name="initprice" value="<?php echo set_value('initprice'); ?>" />
</p>
<p>
<label for=end_date>End date:</label>
  <input type="text" id="end_date" name="end_date" value="<?php echo set_value('end_date'); ?>" />
</p>
<p>
<label for=owner_id>Owner_id:</label>
  <input type="text" id="owner_id" name="owner_id" value="<?php echo set_value('owner_id'); ?>" />
</p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
</div><!--<div class="saleitem_form">-->
<div class="biditem_form">
<div class="form_title">Edit BidItem</div>
<div class="form_sub_title">Come on!!!</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("item/editBidItem"); ?>

<p>
<label for=item_id>Item ID:</label>
  <input type="text" id="item_id" name="item_id" value="<?php echo set_value('item_id'); ?>" />
</p>
<p>
<label for=item_name>Item name:</label>
  <input type="text" id="item_name" name="item_name" value="<?php echo set_value('item_name'); ?>" />
</p>
<p>
<label for=agreement>Agreement:</label>
  <input type="text" id="agreement" name="agreement" value="<?php echo set_value('agreement'); ?>" />
</p>
<p>
<label for=spec>Spec:</label>
  <input type="text" id="spec" name="spec" value="<?php echo set_value('spec'); ?>" />
</p>
<p>
<label for=picture>Picture:</label>
  <input type="text" id="picture" name="picture" value="<?php echo set_value('picture'); ?>" />
</p>
<p>
<label for=price>Initial Price:</label>
  <input type="text" id="initprice" name="initprice" value="<?php echo set_value('initprice'); ?>" />
</p>
<p>
<label for=end_date>End date:</label>
  <input type="text" id="end_date" name="end_date" value="<?php echo set_value('end_date'); ?>" />
</p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>

</div><!--<div id="content">-->



