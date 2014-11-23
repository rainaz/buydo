<?php
  if(empty($type)) $type="danger"; //success //warning
  if(empty($heading)) $heading="Message";
  if(empty($message)) $message="Unknown error";
?>

<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <div class="note note-<?php echo $type; ?>">
          <h4 class="block"><?php echo $heading; ?></h4>
          <p>
          <?php echo $message; ?>
          </p>
        </div>
      </div>
          <div class="row margin-bottom-40 text-center">        <a class="btn btn-success" href="<?php echo site_url(''); ?>">Back to main page</a>

</div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>