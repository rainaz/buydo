<div id="content">
<div class="signup_wrap">
<div class="signin_form">
 <?php echo form_open("user/login"); ?>

  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="" />
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="" />
  <input type="submit" class="" value="Sign in" />

<?php echo form_close(); ?>
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
<div class="reg_form">
<div class="form_title">Sign Up</div>
<div class="form_sub_title">It's free and anyone can be a buydoer</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/registration"); ?>



<!--    'name'=>$this->input->post('name'),   
   'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),   
    'creditcard'=>$this->input->post('creditcard'),   
    'birthday'=>$this->input->post('birthday'),   
    'country'=>$this->input->post('country'),
    'sent_address'=>$this->input->post('sent_address'),
    'address'=>$this->input->post('address'),
    'username'=>$this->input->post('username'),
    'password'=>md5($this->input->post('password')),
     'phone_no'=>$this->input->post('phone_no'),
     'start_banned'=>$this->input->post('start_banned'),
     'banned_duration'=>$this->input->post('banned_duration'),
     'banned_reason'=>$this->input->post('banned_reason'),
     'penalty_count'=>$this->input->post('penalty_count'), -->

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
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
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



