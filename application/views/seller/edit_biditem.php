<?php
	$item_name = "pladook";

	$item_price = 200;
?>
    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Add Bid Item</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <div class="form-group">
                        <label for="item_name" class="col-lg-4 control-label">Item name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" maxlength=40 id="item_name" value=<?php echo $item_name;?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="image_source" class="col-lg-4 control-label">Image link <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="url" class="form-control" id="image_source">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="price" class="col-lg-4 control-label">Price <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="number" min=0 class="form-control" id="price" value=<?php echo $item_price;?>>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="enddate" class="col-lg-4 control-label">End Date <span class="require">*</span></label>
                        <div class="col-lg-5">
                        	<input type="date" class="form-control" id="enddate">
                        </div>
                        <div class="col-lg-3">
                        	<input type="time" class="form-control" id="endtime">
                        </div>
                      </div>

                      <div class="form-group">
                      <label for="brand" class="col-lg-4 control-label">Brand </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="brand" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="model" class="col-lg-4 control-label">Model </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="model" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="capacity" class="col-lg-4 control-label">Capacity </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="capacity" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="spec" class="col-lg-4 control-label">Properties </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="spec" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="size" class="col-lg-4 control-label">Size </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="size" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="payment_method" class="col-lg-4 control-label">Payment method <span class="require">*</span></label>
                      <div class="col-lg-8">
	                      <select class="form-control" id="payment_method" >
	                        <option value="creditcard">Creditcard</option>
	                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="return_policy" class="col-lg-4 control-label">Returning policy </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="return_policy" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="packaging" class="col-lg-4 control-label">Packaging </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="packaging" >
                      </div>
                    </div>
                    </fieldset>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">create a bid item</button>
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