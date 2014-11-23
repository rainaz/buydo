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
							<img src="<?php echo "/buydo/upload/img/items/".$picURL ;?>" class="img-responsive"
								data-BigImgsrc="/buydo/assets/images/pladook.png">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<h1>Cool PLADOOK</h1>
							<div class="price-availability-block clearfix">
								<div class="price">
									<!-- strong><span>Start Bid: THB</span>47.00</strong-->
									<strong><span>CURRENT BID: THB</span><?php echo number_format($currentPrice,2);?></strong>
								</div>
								<div class="availability text-right">
									For: <strong>Bid</strong><br />
									Time Left: <strong>
<?php 
	if($isClose)
		echo "Bid closed";
	else
			echo $timeLeft; 

?>
								</strong>
								</div>
							</div>
							<div class="description">
								<p>
								<?php echo $spec;?>
								</p>
							</div>
<?php if(!$isClose) :?>
							<div class="product-page-options">
								<div class="row">
									<div class="col-md-2 col-sm-2">
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="input-group input-small">
											<span class="input-group-btn">
											<button class="btn red" type="button">-</button>
											</span>
											<input type="text" class="form-control" placeholder="<?php echo number_format($nextBid, 2);?>" width="50%">
											<span class="input-group-btn">
											<button class="btn green" type="button">+</button>
											</span>
										</div>
										<p class="help-block">
										Minimum bid: <strong>THB<?php echo number_format($currentPrice, 2);?></strong>
										</p>
									</div>
									<div class="col-md-5 col-sm-5">
										<button class="btn btn-primary" type="submit">Place bid</button>
										<!-- button class="btn btn-primary" type="submit">Increase bid</button-->
									</div>
									<div class="col-md-1 col-sm-1">
									</div>
								</div>
							</div>
							<div class="social-icons text-center">
								<button class="btn btn-primary" type="submit">Place bid: THB<?php echo number_format($nextBid, 2)?></button>
							</div>
						</div>
<?php else :?>

<?php endif; ?>

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
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                      </table>
                      <br />
                      <br />
                      <table class="datasheet" style="width:80%">
                        <tr>
                          <th colspan="2">Shipping</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      
                      <table class="datasheet" style="width:80%">
                        <tr>
                          <th colspan="2">Aggrement</th>
                        </tr>
                        <tr>
						<td><?php echo $agreement;?></td>
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
