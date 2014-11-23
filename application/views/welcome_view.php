<div class="content">
  <h2>Edit profile <?php echo $this->session->userdata('user_name'); ?>!</h2>
  <p>This section represents the area that only logged in members can access.</p>
  <h4><?php echo anchor('user/logout', 'Logout'); ?></h4>
</div><!--<div class="content">-->

<div class="reg_form">
<div class="form_title">Manage your profile</div>
<div class="form_sub_title">It's free and anyone can be a buydoer</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/manageprofle"); ?>

 <p>
  <label for="name">Firstname:</label>
  <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" />
  </p>
   <p>
  <label for="surname">Surname:</label>
  <input type="text" id="surname" name="surname" value="<?php echo set_value('surname'); ?>" />
  </p>
   <p>
  <label for="email_address">Email Address:</label>
  <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
  </p>
   <p>
  <label for="creditcard">Creditcard:</label>
  <input type="text" id="creditcard" name="creditcard" value="<?php echo set_value('creditcard'); ?>" />
  </p>
  <p>
  <label for="birthday">Birthday:</label>
  <input type="text" id="birthday" name="birthday" value="<?php echo set_value('birthday'); ?>" />
  </p>
  <p>
  <label for="country">Country:</label>
  <input type="text" id="country" name="country" value="<?php echo set_value('country'); ?>" />
  </p>
   <p>
  <label for="sent_address">Sent address:</label>
  <input type="text" id="sent_address" name="sent_address" value="<?php echo set_value('sent_address'); ?>" />
  </p>
     <p>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" value="<?php echo set_value('address'); ?>" />
  </p>
       <p>
  <label for="phone_no">Phone number:</label>
  <input type="text" id="phone_no" name="phone_no" value="<?php echo set_value('phone_no'); ?>" />
  </p>


  <p>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
  <p>
  <label for="con_password">Confirm Password:</label>
  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  </p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->