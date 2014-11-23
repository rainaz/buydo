<?php
	$item_name = "pladook";
	$image_url = "00.jpg";
	$price = 100;
	$date = '2012-03-06';
	$time = '17:33';
	$spec = "hand2";
	$payment_method = "creditcard";
	$return_policy = "";
	$packaging = "";
?>
    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Edit Bid Item</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form" id=form_edit_bit>
                    <fieldset>
                      <div class="form-group">
                        <label for="item_name" class="col-lg-4 control-label">Item name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" maxlength=40 id="item_name" name="item_name" value=<?php echo $item_name;?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="picture" class="col-lg-4 control-label">Image link <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <img src=<?php echo $image_url; ?>>
                          <input type="url" class="form-control" id="picture" name="picture">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="initial_price" class="col-lg-4 control-label">Initial price <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="number" min=0 class="form-control" id="initial_price" name="initial_price"value=<?php echo $price;?>>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="enddate" class="col-lg-4 control-label">End Date <span class="require">*</span></label>
                        <div class="col-lg-5">
                        	<input type="date" class="form-control" id="enddate" name="enddata" value=<?php echo $date;?>>
                        </div>
                        <div class="col-lg-3 padding-left-0">
                        	<input type="time" class="form-control" id="endtime" name="endtime" value=<?php echo $time;?>>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="spec" class="col-lg-4 control-label">Properties </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="spec" name="spec" value=<?php echo $spec;?>>
                      </div>
                    </div>
                      <label for="payment_method" class="col-lg-4 control-label">Payment method <span class="require">*</span></label>
                      <div class="col-lg-8">
	                      <select class="form-control" id="payment_method" name="payment_method">
	                        <option <?php if($payment_method == "creditcard") echo "selected"; ?> value="creditcard">Creditcard</option>
	                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agreement" class="col-lg-4 control-label">Agreement  <span class="require">*</label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="agreement" name="agreement" value=<?php echo $return_policy;?> >
                      </div>
                    </div>
                    </fieldset>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">confirm changes</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div><!-- by Win/Earth -->