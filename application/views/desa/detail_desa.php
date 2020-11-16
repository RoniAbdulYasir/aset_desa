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
    <h4><strong>DETAIL DESA</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Desa</th>
                <td><?php echo $detail->Kd_Desa ?></td>
            </tr>
            <tr>
                <th>Nama Desa</th>
                <td><?php echo $detail->Nama_Desa ?></td>
            </tr>
            <tr>
                <th>Nama Kecamatan</th>
                <td><?php echo $detail->Nama_Kecamatan ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('desa');?>" class="btn btn-primary">Kembali</a>
    
	</div>

</section>
<!-- /.content -->



