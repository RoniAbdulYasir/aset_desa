<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Golongan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box_header">
			<h3 class="box-title">Golongan Barang</h3>
			<div class="pull-right">
				<!--<a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus nav-icon"></i>Tambah Data
                </a>-->
			</div>
		</div>
		<div class="box body table-responsive">
			<table class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Barang</th>
						<th>Nama Akun</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
						<tr>
							<td><?php echo $row->Akun; ?></td>
							<td><?php echo $row->Nama_Akun; ?></td>
							<td></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</section>
<!-- /.content -->
