<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Sub Kelompok Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Sub Kelompok</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>UPDATE SUB KELOMPOK BARANG</strong></h4>
    <?php foreach($rincian_sub_kelompok as $sklp){ ?>
    <form action="<?php echo base_url().'rincian_sub_kelompok/update'; ?>" method="post">
    <div class="form-group">  
    <label>Kode Sub Kelompok</lebal>
    <input type="text" name="KdRek5" class="form-control" value="<?php echo $sklp->KdRek5 ?>">
    </div>
    <div class="form-group">    
    <label>Nama Sub Kelompok</lebal>
    <input type="text" name="Nama_Rincian" class="form-control" value="<?php echo $sklp->Nama_Rincian?>">
    </div>
    <div class="form-group">    
    <label>Nama Kelompok</lebal>
    <input type="text" name="KdRek4_FK" class="form-control" value="<?php echo $sklp->KdRek4_FK ?>">
    </div>
    <a href="<?php echo base_url('rincian_sub_kelompok');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



