<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Aset Desa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Aset Desa</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>DETAIL ASET DESA</strong></h4>
        <table class="table">
            <tr>
                <th>Tahun</th>
                <td><?php echo $detail->Tahun ?></td>
            </tr>
            <tr>
                <th>Nama Desa</th>
                <td><?php echo $detail->Nama_Desa ?></td>
            </tr>
            <tr>
                <th>Nama Kecamatan</th>
                <td><?php echo $detail->Nama_Kecamatan ?></td>
            </tr>
            <tr>
                <th>Kode Barang</th>
                <td><?php echo $detail->KdRek5 ?></td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td><?php echo $detail->Nama_Rincian ?></td>
            </tr>
            <tr>
                <th>Kuantitas</th>
                <td><?php echo $detail->Kuantitas ?></td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td><?php echo $detail->Satuan ?></td>
            </tr>
            <tr>
                <th>Harga Satuan</th>
                <td><?php echo number_format($detail->Hrg_Satuan,0,",","."); ?></td>
            </tr>
            <tr>
                <th>Nilai</th>
                <td><?php echo number_format($detail->Nilai,0,",","."); ?></td>
            </tr>
            <tr>
                <th>Nomor Perdes</th>
                <td><?php echo $detail->No_Perdes ?></td>
            </tr>
            <tr>
                <th>Tanggal Perdes</th>
                <td><?php echo $detail->Tgl_Perdes ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('pendataan_aset_desa');?>" class="btn btn-primary">Kembali</a>
    
	</div>

</section>
<!-- /.content -->



