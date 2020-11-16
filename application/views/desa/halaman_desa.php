<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Data -> Desa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Desa</li>
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
				<a href="<?=site_url('desa/add')?>" button class="btn btn-primary">
				<i class="fas fa-plus-square"></i>Tambah Data Desa</button></a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Desa</th>
						<th>Nama Desa</th>
						<th>Nama Kecamatan</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query->result()  as $row) : ?>
						<tr>
							<td><?php echo $row->Kd_Desa; ?></td>
							<td><?php echo $row->Nama_Desa; ?></td>
							<td><?php echo $row->Nama_Kecamatan; ?></td>
							<td><?php echo anchor('desa/detail/'.$row->Kd_Desa,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('desa/edit/'.$row->Kd_Desa,'<div class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus Data ?')"<?php echo anchor('desa/hapus/'.$row->Kd_Desa,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


</section>
    <!-- /.content -->

