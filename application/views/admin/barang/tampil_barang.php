
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA BARANG</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tampil Data Barang</h3>
            <a href="<?php echo base_url(); ?>Barang/form_barang" class="btn btn-sm btn-primary float-right">Tambah Barang</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">No</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Barang">Nama Barang</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Harga Barang">Harga Barang</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Stok">Stok Barang</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Stok">Tanggal Order</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Stok">QR Code</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Keterangan">Keterangan</th>
                  
                </tr>
              </thead>
              <tbody>
                
                 <?php 
                    $no = 1;
                    $kodenya = 'kendaricoding.id';
                 ?>

                Jumlah data adalah : <?= $data_barang->num_rows(); ?>
                <hr>

                <?php foreach ($data_barang->result() as $db): ?>

                  
                <tr role="row" class="odd">
                  <td><?= $no++ ?></td>
                  <td><?= $db->nama_barang ?></td>
                  <td><?= $db->harga_barang ?></td>
                  <td><?= $db->stok ?></td>
                  <td><?= dateindo($db->tanggal_order) ?></td>
                  <td><img src="<?php echo site_url('Barang/qrcode/'.$kodenya);?>" alt=""></td>
                  <td><?= kosong($db->ket) ?></td>
                </tr>

                <?php endforeach ?>
              </tbody>

            </table>

          </div>
        </div>
        </div>
            </div>
            <!-- /.card-body -->
          </div>

        </div>
      </section>
    </div>