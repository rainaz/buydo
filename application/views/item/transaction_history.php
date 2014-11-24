<?php
$transaction = $theArrayToPass;
?>

<div class="main">
  <div class="container">
    <h2>Transaction History</h2>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <!-- BEGIN PRODUCT LIST -->
        

        <?php foreach( $transaction as $aTransaction ) :?>

          <div class="row product-list">
            <!-- PRODUCT ITEM START -->
            <div class="product-item clearfix">
              <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <img src=<?php echo $aTransaction['image_link']; ?> style="max-height: 200px; max-width: 300px;" alt="Berry Lace Dress">
              </div>
              <!-- PRODUCT ITEM END -->
              <!-- PRODUCT ITEM START -->
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="portlet" style="min">
                  <div class="portlet-title"><h2><?php echo $aTransaction['title']; ?></h2></div>
                  <div class="portlet-body" style="padding-bottom: 15px;">

                    <ul class="list-unstyled">
                      <li>Seller: <?php echo $aTransaction['seller']; ?> </li>
                      <li>Total Price: THB <?php echo $aTransaction['price']; ?> </li>
                      <li>Placement Date: <?php echo $aTransaction['placement_date']; ?></li>
                      <li>
                        Order Status: 
                          <?php 
                            if($aTransaction['status'] == "notpay") echo "Unpaid"; 
                            if($aTransaction['status'] == "wait") echo "Waiting for delivery";
                            if($aTransaction['status'] == "received") echo "Received";
                            if($aTransaction['status'] == "complete") echo "Completed";
                            if($aTransaction['status'] == "failed") echo "Failed";
                          ?>
                      </li>
                    </ul>
                  </div>

                  <!-- code for button here -->
                  <div class="pull-right">
                    <ul class="list-inline">
                      <li>
                        <?php
                        if ( $aTransaction['status'] == "notpay" ) {
                          echo '<form id="pay_form" method="post" action="'. site_url("transaction/pay") .'">';
                          echo '<input type="hidden" name="transaction_id" id="transaction_id" value='.$aTransaction['transaction_id'].' >';
                          echo '<button type="submit" class="btn green"><i class="fa fa-money"></i> Pay </button>';
                          echo '</form>';

                        } 
                        ?>


                        <?php 
                        if ( $aTransaction['status'] == "wait" ) {
                          echo '<form id="notify_delivery_form" method="post" action="'.site_url('transaction/notify_delivery').'">
                          <input type="hidden" name="transaction_id" id="transaction_id" value=' .$aTransaction['transaction_id'] .' >
                          <button type="submit" class="btn yellow"><i class="fa fa-bullhorn"></i> Notify Delivery</button>
                        </form>';
                      }
                      ?>

                      <?php
                      if ( $aTransaction['status'] == "received" ) {
                        echo '<form id="give_feedback_form" method="post" action="'.site_url('user/userComplain').'">
                        <input type="hidden" name="transaction_id" id="transaction_id" value='. $aTransaction['transaction_id'] .'>
                        <button type="submit" class="btn blue"><i class="fa fa-thumbs-up"></i> Give Feedback</button>
                      </form>';
                    }
                    ?>
                  </li>

                  <li>
                    <form id="complain_form" method="post" action="<?php echo site_url('user/userComplain'); ?>">
                      <input type="hidden" name="transaction_id" id="transaction_id" value=<?php echo $aTransaction['transaction_id'] ?> >
                      <button type="submit" class="btn red"><i class="fa fa-bullhorn"></i> Complain Seller</button>
                    </form>
                  </li>
                </ul>
              </div>

              <!--a href="#" class="icon-btn">
                <i class="fa fa-money"></i>
                <div>Pay</div>
              </a>
              <a href="#" class="icon-btn">
                <i class="fa fa-bullhorn"></i>
                <div>Complain Seller</div>
              </a>
              <a href="#" class="icon-btn">
                <i class="fa fa-plane"></i>
                <div>Notify Delivery</div>
              </a>
              <a href="#" class="icon-btn">
                <i class="fa fa-thumbs-up"></i>
                <div>Feedback</div>
              </a-->
            </div>
          </div>
        </div>
        <!-- PRODUCT ITEM END -->
      </div>

    <?php endforeach; ?>


    <!-- END PRODUCT LIST -->
    <!-- BEGIN PAGINATOR 
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
    ! END PAGINATOR -->
  </div>
  <!-- END CONTENT -->
</div>
<!-- END SIDEBAR & CONTENT -->
</div>
</div>