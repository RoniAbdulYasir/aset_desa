<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendataan Aset Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Pendataan Aset Desa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">


<!-- /.col -->
<div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#tanah" data-toggle="tab">Tanah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#peralatandanmesin" data-toggle="tab">Peralatan dan Mesin</a></li>
                  <li class="nav-item"><a class="nav-link" href="#gedungdanbangunan" data-toggle="tab">Gedung dan Bangunan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#jalanirigasidanjaringan" data-toggle="tab">Jalan, Irigasi dan Jaringan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#asettetaplainnya" data-toggle="tab">Aset Tetap Lainnya</a></li>
                  <li class="nav-item"><a class="nav-link" href="#konstruksidalampekerjaan" data-toggle="tab">Konstruksi Dalam Pekerjaan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#asettidakberwujud" data-toggle="tab">Aset Tidak Berwujud</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="tanah">
                    <div class="box_header">
                      <div class="pull-right">
                      <a href="<?=site_url('pendataan_aset_desa/add/tanah')?>" button class="btn btn-primary">
				                  <i class="fas fa-plus-square"></i>Tambah Tanah</button></a>
                      </div>
                    </div>
                    <div class="box-body table-responsive">
                    <table id="example1" class="table table-borderes table-striped">
                      <thead>
                        <tr>
                          <th>Tahun</th>
                          <th>Nama Desa</th>
                          <th>Kode Brg</th>
                          <th>Nama Barang</th>
                          <th>Kuantitas</th>
                          <th>Satuan</th>
                          <th>Harga Satuan</th>
                          <th>Nilai</th>
                          <th>Asal</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($query1 as $row) : ?>
                          <tr>
                            <td><?php echo $row->Tahun; ?></td>
                            <td><?php echo $row->Nama_Desa; ?></td>
                            <td><?php echo $row->KdRek5; ?></td>
                            <td><?php echo $row->Nama_Rincian; ?></td>
                            <td><?php echo $row->Kuantitas; ?></td>
                            <td><?php echo $row->Satuan; ?></td>
                            <td><?php echo $row->Hrg_Satuan; ?></td>
                            <td><?php echo $row->Nilai; ?></td>
                            <td><?php echo $row->AsalAset; ?></td>
                            <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="peralatandanmesin">
                    <div class="box_header">
                        <div class="pull-right">
                        <a href="<?=site_url('pendataan_aset_desa/add/peralatandanmesin')?>" button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>Tambah Peralatan dan Mesin</button></a>
                        </div>
                      </div>
                      <div class="box-body table-responsive">
                      <table id="example2" class="table table-borderes table-striped">
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Nama Desa</th>
                            <th>Kode Brg</th>
                            <th>Nama Barang</th>
                            <th>Kuantitas</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Nilai</th>
                            <th>Asal</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($query2 as $row) : ?>
                            <tr>
                              <td><?php echo $row->Tahun; ?></td>
                              <td><?php echo $row->Nama_Desa; ?></td>
                              <td><?php echo $row->KdRek5; ?></td>
                              <td><?php echo $row->Nama_Rincian; ?></td>
                              <td><?php echo $row->Kuantitas; ?></td>
                              <td><?php echo $row->Satuan; ?></td>
                              <td><?php echo $row->Hrg_Satuan; ?></td>
                              <td><?php echo $row->Nilai; ?></td>
                              <td><?php echo $row->AsalAset; ?></td>
                              <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                  <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                  <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="gedungdanbangunan">
                    <div class="box_header">
                        <div class="pull-right">
                        <a href="<?=site_url('pendataan_aset_desa/add/gedungdanbangunan')?>" button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>Tambah Gedung dan Bangunan</button></a>
                        </div>
                      </div>
                      <div class="box-body table-responsive">
                      <table id="example3" class="table table-borderes table-striped">
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Nama Desa</th>
                            <th>Kode Brg</th>
                            <th>Nama Barang</th>
                            <th>Kuantitas</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Nilai</th>
                            <th>Asal</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($query3 as $row) : ?>
                            <tr>
                              <td><?php echo $row->Tahun; ?></td>
                              <td><?php echo $row->Nama_Desa; ?></td>
                              <td><?php echo $row->KdRek5; ?></td>
                              <td><?php echo $row->Nama_Rincian; ?></td>
                              <td><?php echo $row->Kuantitas; ?></td>
                              <td><?php echo $row->Satuan; ?></td>
                              <td><?php echo $row->Hrg_Satuan; ?></td>
                              <td><?php echo $row->Nilai; ?></td>
                              <td><?php echo $row->AsalAset; ?></td>
                              <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                  <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                  <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>')?></a></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="jalanirigasidanjaringan">
                    <div class="box_header">
                        <div class="pull-right">
                        <a href="<?=site_url('pendataan_aset_desa/add/jalanirigasidanjaringan')?>" button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>Tambah Jalan, Irigasi dan Jaringan</button></a>
                        </div>
                      </div>
                      <div class="box-body table-responsive">
                      <table id="example4" class="table table-borderes table-striped">
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Nama Desa</th>
                            <th>Kode Brg</th>
                            <th>Nama Barang</th>
                            <th>Kuantitas</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Nilai</th>
                            <th>Asal</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($query4 as $row) : ?>
                            <tr>
                              <td><?php echo $row->Tahun; ?></td>
                              <td><?php echo $row->Nama_Desa; ?></td>
                              <td><?php echo $row->KdRek5; ?></td>
                              <td><?php echo $row->Nama_Rincian; ?></td>
                              <td><?php echo $row->Kuantitas; ?></td>
                              <td><?php echo $row->Satuan; ?></td>
                              <td><?php echo $row->Hrg_Satuan; ?></td>
                              <td><?php echo $row->Nilai; ?></td>
                              <td><?php echo $row->AsalAset; ?></td>
                              <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                  <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                  <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="asettetaplainnya">
                    <div class="box_header">
                        <div class="pull-right">
                        <a href="<?=site_url('pendataan_aset_desa/add/asettetaplainnya')?>" button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>Tambah Aset Tetap Lainnya</button></a>
                        </div>
                      </div>
                      <div class="box-body table-responsive">
                      <table id="example5" class="table table-borderes table-striped">
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Nama Desa</th>
                            <th>Kode Brg</th>
                            <th>Nama Barang</th>
                            <th>Kuantitas</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Nilai</th>
                            <th>Asal</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($query5 as $row) : ?>
                            <tr>
                              <td><?php echo $row->Tahun; ?></td>
                              <td><?php echo $row->Nama_Desa; ?></td>
                              <td><?php echo $row->KdRek5; ?></td>
                              <td><?php echo $row->Nama_Rincian; ?></td>
                              <td><?php echo $row->Kuantitas; ?></td>
                              <td><?php echo $row->Satuan; ?></td>
                              <td><?php echo $row->Hrg_Satuan; ?></td>
                              <td><?php echo $row->Nilai; ?></td>
                              <td><?php echo $row->AsalAset; ?></td>
                              <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                  <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                  <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="konstruksidalampekerjaan">
                    <div class="box_header">
                          <div class="pull-right">
                          <a href="<?=site_url('pendataan_aset_desa/add/konstruksidalampekerjaan')?>" button class="btn btn-primary">
                              <i class="fas fa-plus-square"></i>Tambah Konstruksi Dalam Pekerjaan</button></a>
                          </div>
                        </div>
                        <div class="box-body table-responsive">
                        <table id="example6" class="table table-borderes table-striped">
                          <thead>
                            <tr>
                              <th>Tahun</th>
                              <th>Nama Desa</th>
                              <th>Kode Brg</th>
                              <th>Nama Barang</th>
                              <th>Kuantitas</th>
                              <th>Satuan</th>
                              <th>Harga Satuan</th>
                              <th>Nilai</th>
                              <th>Asal</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($query6 as $row) : ?>
                              <tr>
                                <td><?php echo $row->Tahun; ?></td>
                                <td><?php echo $row->Nama_Desa; ?></td>
                                <td><?php echo $row->KdRek5; ?></td>
                                <td><?php echo $row->Nama_Rincian; ?></td>
                                <td><?php echo $row->Kuantitas; ?></td>
                                <td><?php echo $row->Satuan; ?></td>
                                <td><?php echo $row->Hrg_Satuan; ?></td>
                                <td><?php echo $row->Nilai; ?></td>
                                <td><?php echo $row->AsalAset; ?></td>
                                <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                    <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                    <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="asettidakberwujud">
                  <div class="box_header">
                          <div class="pull-right">
                          <a href="<?=site_url('pendataan_aset_desa/add/asettidakberwujud')?>" button class="btn btn-primary">
                              <i class="fas fa-plus-square"></i>Tambah Aset Tidak Berwujud</button></a>
                          </div>
                        </div>
                        <div class="box-body table-responsive">
                        <table id="example7" class="table table-borderes table-striped">
                          <thead>
                            <tr>
                              <th>Tahun</th>
                              <th>Nama Desa</th>
                              <th>Kode Brg</th>
                              <th>Nama Barang</th>
                              <th>Kuantitas</th>
                              <th>Satuan</th>
                              <th>Harga Satuan</th>
                              <th>Nilai</th>
                              <th>Asal</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($query7 as $row) : ?>
                              <tr>
                                <td><?php echo $row->Tahun; ?></td>
                                <td><?php echo $row->Nama_Desa; ?></td>
                                <td><?php echo $row->KdRek5; ?></td>
                                <td><?php echo $row->Nama_Rincian; ?></td>
                                <td><?php echo $row->Kuantitas; ?></td>
                                <td><?php echo $row->Satuan; ?></td>
                                <td><?php echo $row->Hrg_Satuan; ?></td>
                                <td><?php echo $row->Nilai; ?></td>
                                <td><?php echo $row->AsalAset; ?></td>
                                <td><?php echo anchor('pendataan_aset_desa/detail/'.$row->IdTran,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
                                    <?php echo anchor('pendataan_aset_desa/edit/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
                                    <a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('pendataan_aset_desa/hapus/'.$row->IdTran,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <!-- /.tab-pane -->
                  
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom --> 
</div>
<!-- /.col -->

</section>
    <!-- /.content -->

