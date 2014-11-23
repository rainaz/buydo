<div class="reg_form">
<div class="form_title">Confirm buying and Create Transaction</div>
<div class="form_sub_title">Add new transaction</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("transaction/createTransaction"); ?>

<p>
<label for=buyer_id>Buyer ID:</label>
  <input type="text" id="buyer_id" name="buyer_id" value="<?php echo set_value('buyer_id'); ?>" />
</p>
<p>
<label for=seller_id>Seller ID:</label>
  <input type="text" id="seller_id" name="seller_id" value="<?php echo set_value('seller_id'); ?>" />
</p>
<p>
<label for=item_id>Item ID:</label>
  <input type="text" id="item_id" name="item_id" value="<?php echo set_value('item_id'); ?>" />
</p>
<p>
<label for=quantity>Quantity:</label>
  <input type="text" id="quantity" name="quantity" value="<?php echo set_value('quantity'); ?>" />
</p>


  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->



<div class="reg_form">
<div class="form_title">Give Feedback</div>
<div class="form_sub_title">Come on!!!</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("transaction/feedback"); ?>


<p>
<label for=transid>Transaction ID:</label>
  <input type="text" id="transid" name="transid" value="<?php echo set_value('transid'); ?>" />
</p>
<p>
<label for=feedback_from>Feedback from:</label>
  <input type="text" id="feedback_from" name="feedback_from" value="<?php echo set_value('feedback_from'); ?>" />
</p>
<p>
<label for=feedback_to>Feedback to:</label>
  <input type="text" id="feedback_to" name="feedback_to" value="<?php echo set_value('feedback_to'); ?>" />
</p>
<p>
<label for=score>Score:</label>
  <input type="text" id="score" name="score" value="<?php echo set_value('score'); ?>" />
</p>
<p>
<label for=comment>Comment:</label>
  <input type="text" id="comment" name="comment" value="<?php echo set_value('comment'); ?>" />
</p>
<p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
</div><!--<div class="feedback_form">-->
</div><!--<div id="content">-->


<div class="reg_form">
<div class="form_title">Notify Delivery</div>
<div class="form_sub_title">I got the item!!</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("transaction/notify_delivery"); ?>


<p>
<label for=transid>Transaction ID:</label>
  <input type="text" id="transid" name="transid" value="<?php echo set_value('transid'); ?>" />
</p>
<p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
</div><!--<div class="feedback_form">-->
</div><!--<div id="content">-->

