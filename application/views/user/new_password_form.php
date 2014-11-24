
    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Password Recovery</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <!--form class="form-horizontal form-without-legend" role="form" method="post" id="reset_password_form"-->
				  <?php echo form_open("user/changePassword/".$hash); ?>
                    <div class="row"><p> We are resetting password for you. Please enter your new password. </p></div>
					<?php if($warning) : ?>
                    <div class="row"><p>Password not match. Please try again.</p></div>
					<?php endif ; ?>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="confirm_password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-9 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        
                      </div>
                    </div>
					<?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

   
