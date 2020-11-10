<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Rincian Sub Kelompok Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Rincian Sub Kelompok</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>DETAIL RINCIAN SUB KELOMPOK BARANG</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Rincian Sub Kelompok</th>
                <td><?php echo $detail->KdRek5 ?></td>
            </tr>
            <tr>
                <th>Nama Rincian Sub Kelompok</th>
                <td><?php echo $detail->Nama_Rincian ?></td>
            </tr>
            <tr>
                <th>Nama Sub Kelompok</th>
                <td><?php echo $detail->Nama_Obyek ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('rincian_sub_kelompok');?>" class="btn btn-primary">Kembali</a>
    
	</div>

</section>
<!-- /.content -->



