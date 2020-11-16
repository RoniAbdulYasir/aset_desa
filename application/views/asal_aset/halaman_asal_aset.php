<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Asal Aset</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Asal Aset</li>
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
				<a href="<?=site_url('asal_aset/add')?>" button class="btn btn-primary">
				<i class="fas fa-plus-square"></i>Tambah Asal Aset</button></a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Asal Aset</th>
						<th>Nama Asal Aset</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query->result()  as $row) : ?>
						<tr>
							<td><?php echo $row->Id_AsalAset; ?></td>
							<td><?php echo $row->AsalAset; ?></td>
							<td><?php echo anchor('asal_aset/detail/'.$row->Id_AsalAset,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('asal_aset/edit/'.$row->Id_AsalAset,'<div class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus Data ?')"<?php echo anchor('asal_aset/hapus/'.$row->Id_AsalAset,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


</section>
    <!-- /.content -->
