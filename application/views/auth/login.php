
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url('assets/img/BRI.png');?>">
                  </div>

                  <?=$this->session->flashdata('message');?>
                  <form class="user">
                    <!-- method="post" action=" -->
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="text-right">
                    <a class="small" href="#">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                      </div>
                    </div>
                    <button type="submit"  class="btn btn-primary btn-user btn-block">
                      LOGIN
                   </button><br>
                   <div class="text-center">
                   <a href="<?=base_url('auth/registrasi');?>" class="small">
                      Create An Account!
                    </a>
                   </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  