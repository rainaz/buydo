<!--?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/login"); ?>-->

    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Login</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" role="form" method="post" id="login_form" action="<?php echo site_url('user/submit_login'); ?>">
                    <div class="form-group">
                      <label for="username" class="col-lg-4 control-label">Username <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="username" class="form-control" id="username" name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" name="password" class="form-control" id="password" name="password">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0">
                        <a href="/buydo/index.php/user/askingRecover">Forget Password?</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary greenButton">Login</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2> <strong>Need an account?</strong> </h2>
                    <p>Register now to be the <strong>buydoers.</strong></p>
                    <br>

                    <a href="<?php echo site_url('user/register'); ?>"><button type="button" class="btn btn-primary">Register</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

   
