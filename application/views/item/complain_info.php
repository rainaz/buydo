
    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="product-page">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h1><?php echo "View Complains" ?></h1>
                  <div class="description">                    
                  </div>
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#Reviews" data-toggle="tab">Complain</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="Reviews">
                      <!--<p>There are no reviews for this product.</p>-->
                      <?php for($i = 0 ; $i < $size ; $i++) :?>
                      <div class="review-item clearfix">
                        <div style="float:right;"><b>Complain type: <?php echo $sendarray[$i]['type']; ?></b></div>

                        <div class="review-item-submitted">
                          <strong><?php echo $sendarray[$i]['topic']; ?></strong>
                          <em><?php echo $sendarray[$i]['date']; ?></em>
                          <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p><?php echo $sendarray[$i]['detail']."<br/><br/>"."<b>from </b>".$sendarray[$i]['complainer']." <b>to</b> ".$sendarray[$i]['accused']; ?></p>
                        </div>
                      </div>                      
                      <?php endfor ; ?>

<!--
                      <form action="#" class="reviews-form" role="form">
                        <h2>Add feedback</h2>
                          <input type="hidden" id="name">

                        <div class="form-group">
                          <label for="review">Feedback <span class="require">*</span></label>
                          <textarea class="form-control" rows="8" id="review"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input type="range" value="4" step="0.25" id="backing5">
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
                        </div>
                        <div class="padding-top-20">                  
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </form>
--> 
                    </div>
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
