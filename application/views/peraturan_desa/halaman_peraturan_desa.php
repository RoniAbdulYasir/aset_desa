<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Peraturan Desa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Peraturan Desa</li>
				</ol>
			</div>
		</div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">

<div class="box">
		<div class="box_header">
		<?php if($this->session->userdata('Level') == 3) { ?>	
		<div class="pull-right">
				<a href="<?=site_url('peraturan_desa/add')?>" button class="btn btn-primary">
				<i class="fas fa-plus-square"></i>Tambah Data Peraturan Desa</button></a>
			</div>
		<?php } ?> 
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Peraturan Desa</th>
						<th>Nama Desa</th>
						<th>No Peraturan Desa</th>
						<th>Tanggal Peraturan Desa</th>
						<th>Uraian Peraturan Desa</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query->result()  as $row) : ?>
						<tr>
							<td><?php echo $row->Id_Ref_Perdes; ?></td>
							<td><?php echo $row->Nama_Desa; ?></td>
							<td><?php echo $row->No_Perdes; ?></td>
							<td><?php echo $row->Tgl_Perdes; ?></td>
							<td><?php echo $row->Uraian_Perdes; ?></td>
							<td><?php echo $row->Status; ?></td>
							<td><?php echo anchor('peraturan_desa/detail/'.$row->Id_Ref_Perdes,'<div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="nav-icon fas fa-info-circle"></i></div>')?>
        					<?php echo anchor('peraturan_desa/edit/'.$row->Id_Ref_Perdes,'<div class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i></div>')?>
        					<a onclick="return confirm('Anda Yakin Hapus Data ?')"<?php echo anchor('peraturan_desa/hapus/'.$row->Id_Ref_Perdes,'<div class="btn btn-danger btn-sm"><i class="nav-icon far fa-trash-alt"></i></div>') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


</section>
    <!-- /.content -->

