<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <div class="product-page">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="product-main-image">
                <img src="<?php echo $picURL; ?>" class="img-responsive"
                data-BigImgsrc="<?php echo $picURL; ?>">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <h1><?php echo $itemName; ?></h1>
              <div class="price-availability-block clearfix">
                <div class="price">
                  <strong><span>THB</span><?php echo number_format($price,2);?></strong>
    
                </div>
                <div class="availability text-right">
                  For: <strong>Sales</strong><br />
                  Availability: <strong><?php echo $quantity?> left</strong><br />
				  Seller: <strong><?php echo $owner; ?></strong>
                </div>
              </div>
              <div class="product-page-cart">
                <p><?php echo $spec; ?></p>
              </div>
              <div class="product-page-cart">
                <form method="post" id="confirm_buy" action="<?php echo site_url('item/confirmBuy'); ?>">
                  <div class="product-quantity">
                    <div class="input-group bootstrap-touchspin input-group-sm">
                      <span class="input-group-btn">
                        <button class="btn quantity-down bootstrap-touchspin-down" type="button">
                          <i class="fa fa-angle-down"></i>
                        </button>
                      </span>
                      <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                      <input id="product-quantity" name="quantity" type="text" value="1" readonly="" class="form-control input-sm" style="display: block;">
                      <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                      <span class="input-group-btn"><button class="btn quantity-up bootstrap-touchspin-up" type="button"><i class="fa fa-angle-up"></i></button></span>
                    </div>
                      <input type="hidden" name="itemName" value="<?php echo $itemName; ?>" />
                      <input type="hidden" id="itemID" name="itemID" value="<?php echo  $itemID; ?>" />
                      <input type="hidden" name="price" value="<?php echo $price; ?>" />
                  </div>
                  <button class="btn btn-primary" type="submit">Add to cart</button>
                </form>
              </div>
              <div style="padding-top:20px">
                <ul id="myTab" class="nav nav-tabs">
                  <li class="active"><a href="#Description" data-toggle="tab">Information</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="Information">
                    <table class="datasheet" style="width:80%">
                      <tr>
                        <th colspan="2">Agreement</th>
                      </tr>
                      <tr>
                        <td><?php echo $agreement ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="sticker sticker-new"></div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>
