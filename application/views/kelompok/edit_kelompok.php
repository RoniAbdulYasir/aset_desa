<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Kelompok Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Kelompok</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>UPDATE KELOMPOK BARANG</strong></h4>
    <?php foreach($kelompok as $klp){ ?>
    <form action="<?php echo base_url().'kelompok/update'; ?>" method="post">
    <div class="form-group">  
    <label>Kode Kelompok</lebal>
    <input type="text" name="KdRek3" class="form-control" value="<?php echo $klp->KdRek3 ?>">
    </div>
    <div class="form-group">    
    <label>Nama Kelompok</lebal>
    <input type="text" name="Nama_Jenis" class="form-control" value="<?php echo $klp->Nama_Jenis?>">
    </div>
    <div class="form-group">    
    <label>Nama Bidang</lebal>
    <input type="text" name="KdRek2_FK" class="form-control" value="<?php echo $klp->KdRek2_FK ?>">
    </div>
    <a href="<?php echo base_url('kelompok');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



