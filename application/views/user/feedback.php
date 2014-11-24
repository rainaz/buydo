<!--?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/login"); ?>-->

    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Give feedback</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" role="form" method="post" id="login_form" action="<?php echo site_url('transaction/feedback'); ?>">
                    <div class="form-group">
                      <label for="username" class="col-lg-4 control-label">Comment <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input id="comment" class="form-control" name="comment" value="" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Score <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default" id='btn0'>-2</button>
                          <button type="button" class="btn btn-default" id='btn1'>-1</button>
                          <button type="button" class="btn btn-default" id='btn2'>0</button>
                          <button type="button" class="btn btn-default" id='btn3'>1</button>
                          <button type="button" class="btn btn-default" id='btn4'>2</button>

                        </div>
                        <input type="hidden" id="score" name="score" id="score" value="0" />
                        <input type="hidden" id="transid" name="transid" value="<?php echo $transaction_id; ?>" />
                        <input type="hidden" id="feedback_from" name="feedback_from" value="<?php echo $feedback_from; ?>" />
                        <input type="hidden" id="feedback_to" name="feedback_to" value="<?php echo $feedback_to; ?>" />

                        <br />
                         <?php echo validation_errors('<p class="error">'); ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary greenButton">Enter</button>
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

   