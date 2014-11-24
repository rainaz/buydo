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
								<img src="<?php echo $picURL ;?>" class="img-responsive"
								data-BigImgsrc="<?php echo $picURL ;?>">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<h1><?php echo $itemName ?></h1>
							<div class="price-availability-block clearfix">
								<div class="price">
									<!-- strong><span>Start Bid: THB</span>47.00</strong-->
									<strong><span>CURRENT PRICE: THB</span><?php echo number_format($currentPrice,2);?></strong>
								</div>
								<div class="availability text-right">
									For: <strong>Bid</strong><br />
									Time Left: <strong><?php echo $timeLeft ;?>
									</strong><br />
										Seller: <strong><?php echo $owner;?></strong>
								</div>
							</div>
							<!--div class="description">
								<p>
								</p>
						</div-->
						<div class="product-page-cart">
							<p><?php echo $spec; ?></p>
						</div>
						<?php if(!$isClose) :?>
						<div class="product-page-blockt">
							<div class="row">
								<div class="col-md-2 col-sm-2">
								</div>
								<form method="post" id="confirm_Maxbid" action="<?php echo site_url('item/bidMaxBid'); ?>">
									<div class="col-md-4 col-sm-4">
										<div class="input-group input-small">
											
											<input type="hidden" id="itemID" name="itemID" value="<?php echo $itemID;?>" />
											<input type="hidden" id="itemName" name="itemName" value="<?php echo $itemName ?>" />
											<input type="hidden" id="winnerID" name="winnerID" value="<?php echo $winnerID ?>" />
											<input type="hidden" id="maxBid" name="maxBid" value="<?php echo $currentMaxBid ?>" />
											<input type="hidden" id="initialPrice" name="initialPrice" value="<?php echo $initialPrice;?>" />
											<input type="hidden" id="currentPrice" name="currentPrice" value="<?php echo $currentPrice;?>" />
											<input type="hidden" id="endDate" name="endDate" value="<?php echo $endDate;?>" />
											<input type="number" class="form-control" id="val" name="val" value="<?php echo $nextBid;?>" width="50%">
											
										</div>

										<p class="help-block">
											Minimum bid: <strong>THB<?php echo number_format($currentPrice, 2);?></strong>
										</p>
									</div>
									<div class="col-md-5 col-sm-5">
										<button class="btn btn-primary" type="submit">Place bid</button>
										<!-- button class="btn btn-primary" type="submit">Increase bid</button-->
									</div>
								</form>
								<div class="col-md-1 col-sm-1">
								</div>
							</div>
						</div>
						<form method="post" id="confirm_bid" action="<?php echo site_url('item/bidNextBid'); ?>">
							<input type="hidden" id="itemID" name="itemID" value="<?php echo $itemID;?>" />
							<input type="hidden" id="itemName" name="itemName" value="<?php echo $itemName ?>" />
							<input type="hidden" id="winnerID" name="winnerID" value="<?php echo $winnerID ?>" />
							<input type="hidden" id="maxBid" name="maxBid" value="<?php echo $currentMaxBid ?>" />
							<input type="hidden" id="initialPrice" name="initialPrice" value="<?php echo $initialPrice;?>" />
							<input type="hidden" id="currentPrice" name="currentPrice" value="<?php echo $currentPrice;?>" />
							<input type="hidden" id="endDate" name="endDate" value="<?php echo $endDate;?>" />
							<input type="hidden" id="BidVal" name="val" value="<?php echo $nextBid;?>">
							<div class="social-icons text-center product-page-cart">
								<button class="btn btn-primary" type="submit">Place bid: THB<?php echo number_format($nextBid, 2)?></button>
							</div>
						</form>
					<?php else :?>
					<?php endif; ?>

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
