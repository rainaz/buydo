<?php 
	$item_name = "pladook";
	$image_url = "00.jpg";
	$price = 100;
	$quantity = 10;
	$brand = "HandMaDe";
	$model = "Pladook";
	$capacity = "NULL";
	$spec = "";
	$size = "";
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
            <h1>Edit Sale Item</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <div class="form-group">
                        <label for="item_name" class="col-lg-4 control-label">Item name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" maxlength=40 id="item_name" name="item_name" value=<?php echo $item_name; ?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="picture" class="col-lg-4 control-label">Image link <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <img src=<?php echo $image_url; ?> >
                          <input type="url" class="form-control" id="picture" name="picture">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="price" class="col-lg-4 control-label">Price <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="number" min=0 class="form-control" id="price" name="price" value=<?php echo $price; ?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="quantity_in_stock" class="col-lg-4 control-label">Quantity in stock <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="number" min=0 class="form-control" id="quantity_in_stock" name="quantity_in_stock" value=<?php echo $quantity ?>>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="brand" class="col-lg-4 control-label">Brand </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="brand" name="brand" value=<?php echo $brand?> >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="model" class="col-lg-4 control-label">Model </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="model" name="model" value=<?php echo $model; ?> >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="capacity" class="col-lg-4 control-label">Capacity </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="capacity" name="capacity" value=<?php echo $capacity; ?>>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="spec" class="col-lg-4 control-label">Properties </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="spec" name="spec" value=<?php echo $spec; ?>>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="size" class="col-lg-4 control-label">Size </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="size" name="size" value=<?php echo $size; ?> >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="payment_method" class="col-lg-4 control-label">Payment method <span class="require">*</span></label>
                      <div class="col-lg-8">
	                      <select class="form-control" id="payment_method" name="payment_method">
	                        <option <?php if($payment_method == "creditcard") echo "selected"; ?> value="creditcard">Creditcard</option>
	                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agreement" class="col-lg-4 control-label">Agreement </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="agreement" name="agreement" value=<?php echo $return_policy; ?>>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="packaging" class="col-lg-4 control-label">Packaging </label>
                      <div class="col-lg-8">
	                      <input type="text" class="form-control" id="packaging" name="packaging" value=<?php echo $packaging; ?> >
                      </div>
                    </div>
                    </fieldset>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Confirm changes</button>
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
    </div>