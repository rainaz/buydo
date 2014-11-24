<!-- by WinEarth -->
<div class="main">
	<div class="container">
		<!-- BEGIN CONTENT -->
		<div class="row margin-bottom-40">

			<!-- BEGIN CONTENT -->
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10">
				<h1>Confirm Payment</h1>
				<div class="content-form-page">
					<div class="row">
						<div class="col-md-7 col-sm-7">
							<form class="form-horizontal" role="form" id="form_confirm_credit" method="post" action="<?php echo site_url('item/confirmCheckout'); ?>">
								<fieldset>
									<div class="form-group">
										<label for="creditcard" class="col-lg-4 control-label">Creditcard <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="number" class="form-control" maxlength=16 id="creditcard" name="creditcard" value=<?php echo $creditcard; ?>>
										</div>
									</div>
								</fieldset>
								<input type="hidden" name="itemID" value="<?php echo $itemID; ?>" />
								<input type="hidden" name="itemName" value="<?php echo $itemName; ?>" />
                      			<input type="hidden" name="price" value="<?php echo $price; ?>" />
                      			<input type="hidden" name="quantity" value="<?php echo $quantity; ?>" />
								<div class="row">
									<div class="col-lg-8 col-md-offset-7 padding-left-0 padding-top-20">                        
										<button type="submit" class="btn btn-primary">Confirm</button>
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