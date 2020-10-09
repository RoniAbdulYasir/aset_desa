<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Kecamatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">

<div class="box">
		<div class="box_header">
			<h3 class="box-title">Data Kecamatan</h3>
			<div class="pull-right">
				<!--<a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus nav-icon"></i>Tambah Data
                </a>-->
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-borderes table-striped">
				<thead>
					<tr>
						<th>Kode Kecamatan</th>
						<th>Nama Kecamatan</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $row) : ?>
						<tr>
							<td><?php echo $row->Kd_Kec; ?></td>
							<td><?php echo $row->Nama_Kecamatan; ?></td>
							<td></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


</section>
    <!-- /.content -->