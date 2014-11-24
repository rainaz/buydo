<!--?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/login"); ?>-->

    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>System Complain</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" role="form" method="post" id="login_form" action="<?php echo site_url('user/submit_user_complain'); ?>">
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Transaction ID: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="transaction_id" class="form-control" id="transaction_id" name="transaction_id">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="username" class="col-lg-4 control-label">Topic:<span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="topic" class="form-control" id="topic" name="topic">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Detail: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="detail" class="form-control" id="detail" name="detail">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary greenButton">Complain</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        
                      </div>
                    </div>
                  </form>
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

   