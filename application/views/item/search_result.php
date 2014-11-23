
    <div class="main">
      <div class="container">
	  <h2>Search result: "<?php echo $search;?>"</h2>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
		  <?php for($i=1; 4*($i-1) <= $data->num_rows() && $i <= 3; $i++) : ?>
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
				<!-- check item type by $data->item_type-->
			  <?php for($j=1; 4*($i-1)+$j <= $data->num_rows() && $j <= 4; $j++) : ?>
              <!-- PRODUCT ITEM START -->
			  <?php $index=$i*4 + $j -5; ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="product-item">
                  <div class="pi-img-wrapper">
				  <img src="/buydo/upload/img/items/<?php echo $data->row($index)->picture ?>" class="img-responsive" alt="<?php echo $data->row($index)->item_name ;?>">
                    <div>
                      <a href="/buydo/assets/frontend/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?php echo $data->row($index)->item_name ;?></a></h3>
				  <div class="pi-price">฿<?php echo $data->row($index)->price ;?></div>
                  <a href="#" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
              <!-- PRODUCT ITEM END -->
			  <?php endfor ;?>
			<!--  ^ -->
            </div>
		  <?php endfor ;?>
            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            <div class="row">
              <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
              <div class="col-md-8 col-sm-8">
                <ul class="pagination pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><span>2</span></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

