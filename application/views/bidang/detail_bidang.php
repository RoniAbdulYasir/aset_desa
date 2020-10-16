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
    <h4><strong>DETAIL BIDANG BARANG</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Bidang</th>
                <td><?php echo $detail->KdRek2 ?></td>
            </tr>
            <tr>
                <th>Nama Bidang</th>
                <td><?php echo $detail->Nama_Kelompok ?></td>
            </tr>
            <tr>
                <th>Nama Golongan</th>
                <td><?php echo $detail->KdRek1 ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('bidang');?>" class="btn btn-primary">Kembali</a>
    
	</div>

</section>
<!-- /.content -->



