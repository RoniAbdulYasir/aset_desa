<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>USER</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">User</li>
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
				<i class="fas fa-plus-square"></i>Tambah Data User</button>
			</div>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
            <th>ID User</th>
            <th>Level</th>
            <th>Nama</th>
            <th>Username</th>
						<th>Password</th>
            <th>Keterangan</th>
            <th>Nama Desa</th>
            <th>Nama Kecamatan</th>
            <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?> 
						<tr>
              <td><?php echo $row->IDUser; ?></td>
              <td><?php echo $row->Level; ?></td>
              <td><?php echo $row->Nama; ?></td>
              <td><?php echo $row->Username; ?></td>
							<td><?php echo $row->Password; ?></td>
              <td><?php echo $row->Keterangan; ?></td>
              <td><?php echo $row->Nama_Kecamatan; ?></td>
              <td><?php echo $row->Nama_Desa; ?></td>
							<td><?php echo anchor('user/detail/'.$row->IDUser,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('user/edit/'.$row->IDUser,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('user/hapus/'.$row->IDUser,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('user/tambah_aksi'); ?> 

            <div class="form-group">
                <label>ID User</label><input type="text" name="IDUser" class="form-control">
            </div>
            <div class="form-group">
                <label>Level</label><input type="text" name="Level" class="form-control">
            </div>
			      <div class="form-group">
                <label>Nama</label><input type="text" name="Nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label><input type="text" name="Username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label><input type="text" name="Password" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label><input type="text" name="Keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Kecamatan</label><input type="text" name="Kd_Kec" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Desa</label><input type="text" name="Kd_Desa" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          <?php echo form_close(); ?>
      </div>
      
    </div>
  </div>
</div>