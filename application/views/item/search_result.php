<div class="main">
  <div class="container">
    <h2>Search result: "<?php echo $search_string;?>"</h2>
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
          <?php 
            $index=$i*4 + $j -5;
            $picture=$data->row($index)->picture;
            $item_name=$data->row($index)->item_name;
            $price=$data->row($index)->price;
            $type=$data->row($index)->item_type;
            $id=$data->row($index)->item_id;
          ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/buydo/upload/img/items/<?php echo $picture; ?>" class="img-responsive" />
                <div>
                  <a href="/buydo/upload/img/items/<?php echo $picture ?>" class="btn btn-default fancybox-button">Zoom</a>
                </div>
              </div>
              <h3><a href="<?php echo site_url('item/showItem/'.$id); ?>"><?php echo $item_name ;?></a></h3>

              <?php if($type=="sale"){ ?>
                <div class="pi-price">฿<?php echo $price ;?></div>
                <a href="<?php echo site_url('item/showItem/'.$id); ?>" class="btn btn-default add2cart">Buy</a>
              <?php }else if($type=="bid"){ ?>
                <div class="pi-price">Start at ฿<?php echo $price ;?></div>
                <a href="<?php echo site_url('item/showItem/'.$id); ?>" class="btn btn-default add2cart">Bid</a>
              <?php } ?>
            </div>
          </div>
          
          <!-- PRODUCT ITEM END -->
          <?php endfor ;?>
          <!--  ^ -->
        </div>
        <?php endfor ;?>
        <!-- END PRODUCT LIST -->
        <!-- BEGIN PAGINATOR -->
        <div class="row" style="height: 200px;">
          <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of <?php echo $total; ?> total</div>
          <div class="col-md-8 col-sm-8">
            <ul class="pagination pull-right">
              <?php
                if($page>1){
                  echo '<li><a href="'.site_url('item/searchItem?search_string='.$search_string.'&page='.($page-1)).">&laquo;</a></li>";
                }
                for ($i = 1; $i <=$total_page; $i++) {
                  if($i==$page) echo '<li><span>'.$i.'</span></li>';
                  else echo 
                    '<li><a href="'.
                    site_url('item/searchItem?search_string='.$search_string.'&page='.$i).
                    '">'.$i.'</a></li>';
                }

                if($page<$total_page){
                  echo '<li><a href="'.site_url('item/searchItem?search_string='.$search_string.'&page='.($page+1)).">&laquo;</a></li>";
                }
              ?>
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