<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Data -> Kecamatan</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Kecamatan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>UPDATE KECAMATAN</strong></h4>
    <?php foreach($kecamatan as $kcm){ ?>
    <form action="<?php echo base_url().'kecamatan/update'; ?>" method="post">
    <div class="form-group">  
    <label>Kode Kecamatan</lebal>
    <input type="text" name="Kd_Kec" class="form-control" value="<?php echo $kcm->Kd_Kec ?>">
    </div>
    <div class="form-group">    
    <label>Nama Kecamatan</lebal>
    <input type="text" name="Nama_Kecamatan" class="form-control" value="<?php echo $kcm->Nama_Kecamatan ?>">
    </div>
    <a href="<?php echo base_url('kecamatan');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



