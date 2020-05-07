  <!-- Begin Page Content -->
  <div class="container-fluid">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!-- Page Heading -->
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$title;?></h1>
<p class="mb-4">Electronic Data Capture</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables EDC Error</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-blue">
          <button type="button" class="btn btn-success"><i class="fas fa-fw fa-plus-square"></i> Tambah Data</button><br>
          <tr class="text-center">
            <th>No.</th>
            <th>TID</th>
            <th>Deskripsi</th>
            <th>Tanggal</th><br>
            <th>Waktu</th>
            <th>Aksi</th>
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
          <tr>
            <td>1</td>
            <td>997160</td>
            <td>ATM Error muncul kode C02</td>
            <td>22/03/2020</td>
            <td>13.50 WIB</td>
            <td><button type="button" class="btn btn-outline-success"><i class="fas fa-fw fa-pencil-alt"></i>Edit</button>&nbsp<button type="button" class="btn btn-outline-danger"><i class="fas fa-fw fa-trash-alt"></i>hapus</button></td>
            
          </tr>
          <tr>
            <td>2</td>
            <td>997160</td>
            <td>ATM Error muncul kode C02</td>
            <td>23/03/2020</td>
            <td>15.45 WIB</td>
            <td><button type="button" class="btn btn-outline-success"><i class="fas fa-fw fa-pencil-alt"></i>Edit</button>&nbsp<button type="button" class="btn btn-outline-danger"><i class="fas fa-fw fa-trash-alt"></i>hapus</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>567820</td>
            <td>ATM tidak bisa transaksi tarik tunai</td>
            <td>10/04/2020</td>
            <td>10.50 WIB</td>
            <td><button type="button" class="btn btn-outline-success"><i class="fas fa-fw fa-pencil-alt"></i>Edit</button>&nbsp<button type="button" class="btn btn-outline-danger"><i class="fas fa-fw fa-trash-alt"></i>hapus</button></td>

          </tr>
          <tr>
            <td>4</td>
            <td>567820</td>
            <td>ATM Dispenser Failure</td>
            <td>15/04/2020</td>
            <td>20.15 WIB</td>
            <td><button type="button" class="btn btn-outline-success"><i class="fas fa-fw fa-pencil-alt"></i>Edit</button>&nbsp<button type="button" class="btn btn-outline-danger"><i class="fas fa-fw fa-trash-alt"></i>hapus</button></td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
