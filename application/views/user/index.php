  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Profile</h1>
          <div class="card mb-3" style="max-width: 600px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                <img src="<?=base_url('assets/img/profile/').$user['image'];?>">
                </div>
                <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title"><?=$user['name'];?></h5>
                    <p class="card-text">ID 032972863</p>
                    <p class="card-text"><?=$user['email'];?></p>
                    <p class="card-text"><small class="text-muted">Active Since <?= date('d F Y', $user['date_created']);?></small></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      