<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Kode Barang -> Golongan Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Golongan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>UPDATE GOLONGAN BARANG</strong></h4>
    <?php foreach($golongan as $glg){ ?>
    <form action="<?php echo base_url().'golongan/update'; ?>" method="post">
    <div class="form-group">  
    <label>Kode Golongan</lebal>
    <input type="text" name="KdRek1" class="form-control" value="<?php echo $glg->KdRek1 ?>">
    </div>
    <div class="form-group">    
    <label>Nama Golongan</lebal>
    <input type="text" name="Nama_Akun" class="form-control" value="<?php echo $glg->Nama_Akun ?>">
    </div>
    <a href="<?php echo base_url('golongan');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



