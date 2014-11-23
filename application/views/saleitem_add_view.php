<div id="content">


<div class="saleitem_form">
<div class="form_title">Add SaleItem</div>
<div class="form_sub_title">Come on!!!</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("item/submitSaleItem"); ?>


<p>
<label for=item_name>Item name:</label>
  <input type="text" id="item_name" name="item_name" value="<?php echo set_value('item_name'); ?>" />
</p>
<p>
<label for=agreement>Agreement:</label>
  <input type="text" id="agreement" name="agreement" value="<?php echo set_value('agreement'); ?>" />
</p>
<p>
<label for=spec>Spec:</label>
  <input type="text" id="spec" name="spec" value="<?php echo set_value('spec'); ?>" />
</p>
<p>
<label for=picture>Picture:</label>
  <input type="text" id="picture" name="picture" value="<?php echo set_value('picture'); ?>" />
</p>
<p>
<label for=price>Price:</label>
  <input type="text" id="price" name="price" value="<?php echo set_value('price'); ?>" />
</p>
<p>
<label for=quantity_in_stock>Quantity in Stock:</label>
  <input type="text" id="quantity_in_stock" name="quantity_in_stock" value="<?php echo set_value('quantity_in_stock'); ?>" />
</p>
<p>
<label for=owner_id>Owner_id:</label>
  <input type="text" id="owner_id" name="owner_id" value="<?php echo set_value('owner_id'); ?>" />
</p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
</div><!--<div class="saleitem_form">-->
</div><!--<div id="content">-->



