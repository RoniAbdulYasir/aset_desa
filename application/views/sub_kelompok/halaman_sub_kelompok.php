<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Sub kelompok Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Sub Kelompok</li>
				</ol>
			</div>
		</div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">

<div class="box">
		<div class="box_header">
			<div class="pull-right">
				<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				<i class="fas fa-plus-square"></i>Tambah Data Sub Kelompok</button>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Sub Kelompok</th>
						<th>Nama Sub Kelompok</th>
						<th>Nama Kelompok</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
						<tr>
							<td><?php echo $row->KdRek4; ?></td>
							<td><?php echo $row->Nama_Obyek; ?></td>
							<td><?php echo $row->Nama_Jenis; ?></td>
							<td><?php echo anchor('sub_kelompok/detail/'.$row->KdRek4,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('sub_kelompok/edit/'.$row->KdRek4,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('sub_kelompok/hapus/'.$row->KdRek4,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</section>
    <!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Sub Kelompok Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('sub_kelompok/tambah_aksi'); ?> 

            <div class="form-group">
                <label>Kode Sub Kelompok</label><input type="text" name="KdRek4" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Sub Kelompok</label><input type="text" name="Nama_Obyek" class="form-control">
            </div>
			<div class="form-group">
                <label>Nama Kelompok</label><input type="text" name="KdRek3_FK" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          <?php echo form_close(); ?>
      </div>
      
    </div>
  </div>
</div>