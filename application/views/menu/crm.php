  <!-- Begin Page Content -->
  <div class="container-fluid">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$title;?></h1>
<p class="mb-4">Cash Recycle Mechine </p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-warning">DataTables CRM Error</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php if(validation_errors()) : ?>
      <div class="alert alert-danger" role="alert">  
        <?= validation_errors();?>
      </div>
    <?php endif ;?>

    <?= $this->session->flashdata('message');?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <a href="" class="btn btn-warning" data-toggle="modal" data-target="#newDataAtm"><i class="fas fa-fw fa-plus-square"></i> Tambah Data</a><br>
          <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">TID</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal</th><br>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>No.</th>
            <th>TID</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php $i=1; ?>
        <?php foreach ($crm as $a):?>
          <tr class="text-center">
            <td scope="row"><?= $i;?></td>
            <td><?= $a['TID']?></td>
            <td><?= $a['description']?></td>
            <td><?= $a['tanggal']?></td>
            <td><?= $a['time']?></td>
            <td><button type="button" class="btn btn-outline-warning"><i class="fas fa-fw fa-pencil-alt"></i>Edit</button>&nbsp<button type="button" class="btn btn-outline-danger"><i class="fas fa-fw fa-trash-alt"></i>hapus</button></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach ;?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="newDataAtm" tabindex="-1" role="dialog" aria-labelledby="newDataAtmLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newDataAtmLabel">Form Input Data CRM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/crm');?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <input type="number" class="form-control" id="tid" name="tid" placeholder="Input TID Number">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Keterangan Error">
            </div>
            <div class="form-group">
              <input id="tanggal" name="tanggal" class="form-control" placeholder="Masukkan Tanggal">
                  <script>
                      $('#tanggal').datepicker({
                          uiLibrary: 'bootstrap4'
                      });
                  </script>
            </div>
            <div class="form-group">
             <input id="time" class="form-vontrol" name="time" placeholder="Masukkan Waktu"/>
                <script>
                    $('#time').timepicker({
                      uiLibrary: 'bootstrap4'
                    });
                </script>
            </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-warning">Tambah</button>
      </div>
      </form>
 
    </div>
  </div>
</div>