<div id="content">


<div class="feedback_form">
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
  <input type="text" id="initcomment" name="initcomment" value="<?php echo set_value('initcomment'); ?>" />
</p>
<p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
</div><!--<div class="feedback_form">-->
</div><!--<div id="content">-->
