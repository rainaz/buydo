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
                  <!--form class="form-horizontal form-without-legend" role="form" method="post" id="recovery_password_form"-->
				  <?php echo form_open("user/recoverPassword"); ?>
                    <div class="row"><p>Please enter your email below. We will send our confirmation link to your email. </p></div>

                    <div class="form-group">
                      <label for="email" class="col-lg-2 control-label">Email <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input type="email" class="form-control" id="email" name="email">
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
				  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

   
