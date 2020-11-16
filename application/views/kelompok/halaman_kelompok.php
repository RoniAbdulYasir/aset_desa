<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Kelompok Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Kelompok</li>
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
				<i class="fas fa-plus-square"></i>Tambah Data Kelompok</button>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Kelompok</th>
						<th>Nama Kelompok</th>
						<th>Nama Bidang</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
						<tr>
							<td><?php echo $row->KdRek3; ?></td>
							<td><?php echo $row->Nama_Jenis; ?></td>
							<td><?php echo $row->Nama_Kelompok; ?></td>
							<td><?php echo anchor('kelompok/detail/'.$row->KdRek3,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('kelompok/edit/'.$row->KdRek3,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('kelompok/hapus/'.$row->KdRek3,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Kelompok Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('kelompok/tambah_aksi'); ?> 

            <div class="form-group">
                <label>Kode Kelompok</label><input type="text" name="KdRek3" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Kelompok</label><input type="text" name="Nama_Jenis" class="form-control">
            </div>
			<div class="form-group">
                <label>Nama Bidang</label><input type="text" name="KdRek2_FK" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          <?php echo form_close(); ?>
      </div>
      
    </div>
  </div>
</div>