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
    <h4><strong>UPDATE DESA</strong></h4>
    <?php foreach($desa as $ds){ ?>
    <form action="<?php echo base_url().'desa/update'; ?>" method="post">
    <div class="form-group">  
    <label>Kode Desa</lebal>
    <input type="text" name="Kd_Desa" class="form-control" value="<?php echo $ds->Kd_Desa ?>">
    </div>
    <div class="form-group">    
    <label>Nama Desa</lebal>
    <input type="text" name="Nama_Desa" class="form-control" value="<?php echo $ds->Nama_Desa?>">
    </div>
    <div class="form-group">    
    <label>Nama Kecamatan</lebal>
    <input type="text" name="Kd_Kec" class="form-control" value="<?php echo $ds->Kd_Kec ?>">
    </div>
    <a href="<?php echo base_url('desa');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



