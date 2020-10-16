<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Bidang Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Bidang</li>
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
				<i class="fas fa-plus-square"></i>Tambah Data Bidang</button>
			</div>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Bidang</th>
						<th>Nama Bidang</th>
						<th>Nama Golongan</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
						<tr>
							<td><?php echo $row->KdRek2; ?></td>
							<td><?php echo $row->Nama_Kelompok; ?></td>
							<td><?php echo $row->Nama_Akun; ?></td>
							<td><?php echo anchor('bidang/detail/'.$row->KdRek2,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('bidang/edit/'.$row->KdRek2,'<div class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus ?')"<?php echo anchor('golongan/hapus/'.$row->KdRek2,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


  

</section>
    <!-- /.content -->