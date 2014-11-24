
    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>User List</h1>
            <!--div class="well">
              <h5> Display: </h5>
              <div class="btn-group btn-group-solid">
                  <button type="button" class="btn blue-madison">Buyer</button>
                  <button type="button" class="btn green-meadow">Seller</button>
                  <button type="button" class="btn blue-hoki">All</button>
                </div>
            </div-->
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table>
                  <tr>
                    <th class="goods-page-image">ID</th>
                    <th class="goods-page-description">Username</th>
                    <th class="goods-page-description">Type</th>

                  </tr>

                  <?php
                    for ($i=0;$i<count($list);$i++) {
                      $user = $list[$i];
                  ?>
                  <tr>
                    <td class="goods-page-image">
                      <?php echo $user['user_id'] ?>
                    </td>
                    <td class="goods-page-description">
                      <h3><a href="<?php echo site_url('/transaction/showUserFeedback?user_id='.$user['user_id']); ?>"><?php echo $user['username'] ?></a></h3>

                    </td>
                    <td class="goods-page-description">
                      <p><strong><?php echo $user['user_type'] ?></strong><p>

                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </table>
                </div>

              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>