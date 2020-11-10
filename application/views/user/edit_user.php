<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>User Aset Desa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">User</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
    <h4><strong>UPDATE USER ASET DESA</strong></h4>
    <?php foreach($user as $usr){ ?>
    <form action="<?php echo base_url().'user/update'; ?>" method="post">
    <div class="form-group">  
    <label>ID User</lebal>
    <input type="text" name="IDUser" class="form-control" value="<?php echo $usr->IDUser ?>">
    </div>
    <div class="form-group">    
    <label>Level</lebal>
    <input type="text" name="Level" class="form-control" value="<?php echo $usr->Level?>">
    </div>
    <div class="form-group">    
    <label>Nama</lebal>
    <input type="text" name="Nama" class="form-control" value="<?php echo $usr->Nama ?>">
    </div>
    <div class="form-group">    
    <label>Username</lebal>
    <input type="text" name="Username" class="form-control" value="<?php echo $usr->Username ?>">
    </div>
    <div class="form-group">    
    <label>Password</lebal>
    <input type="text" name="Password" class="form-control" value="<?php echo $usr->Password ?>">
    </div>
    <div class="form-group">    
    <label>Keterangan</lebal>
    <input type="text" name="Keterangan" class="form-control" value="<?php echo $usr->Keterangan ?>">
    </div>
    <div class="form-group">    
    <label>Nama Kecamatan</lebal>
    <input type="text" name="Kd_Kec" class="form-control" value="<?php echo $usr->Kd_Kec ?>">
    </div>
    <div class="form-group">    
    <label>Nama Desa</lebal>
    <input type="text" name="Kd_Desa" class="form-control" value="<?php echo $usr->Kd_Desa ?>">
    </div>
    <a href="<?php echo base_url('user');?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <?php } ?>
   
	</div>

</section>
<!-- /.content -->



