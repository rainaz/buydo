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
                <img src="/buydo/upload/img/items/<?php echo $picURL; ?>" class="img-responsive"
				data-BigImgsrc="/buydo/upload/img/items/<?php echo $picURL; ?>">
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
				  Availability: <strong><?php echo $quantity?> left</strong>
                </div>
              </div>
              <!--div class="description">
                <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                Nostrud duis molestie at dolore.</p>
              </div-->
              <div class="product-page-options text-center">
                <button class="btn btn-primary" type="submit">Buy</button>
              </div>
            </div>
            <div class="product-page-content">
              <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#Description" data-toggle="tab">Information</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="Information">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <table class="datasheet" style="width:80%">
                        <tr>
                          <th colspan="2">Description</th>
                        </tr>
                        <tr>
						<td><?php echo $spec; ?></td>
                        </tr>
                      </table>
                      <br />
                    </div>
                    <div class="col-md-6 col-sm-6">
                      
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
