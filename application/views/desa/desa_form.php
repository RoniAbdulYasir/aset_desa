<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
                <h1></h1>
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
 

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?=ucfirst($page)?> Desa</h3>

              
            </div>
            <form action="<?=site_url('desa/process') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Kode Desa</label>
                    <input type="text" name="Kd_Desa" value="<?=$row->Kd_Desa?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Nama Desa</label>
                    <input type="text" name="Nama_Desa" value="<?=$row->Nama_Desa?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <!--<input type="text" name="Kd_Kec" value="<?=$row->Kd_Kec?>" class="form-control" required>-->
                    <select name="kecamatan" class="form-control">
                    <option value="">- Pilih Kecamatan</option>
                    <?php foreach ($kecamatan->result() as $key => $data ) : ?>
                      <option value="<?=$data->Kd_Kec?>"<?=$data->Kd_Kec == $row->Kd_Kec ? "selected" : null?>><?=$data->Nama_Kecamatan?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
              
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>
      </div>
        <div class="row">
            <div class="col-12">
                <a href="<?=site_url('desa')?>" button class="btn btn-warning btn-flat">
                <i class="fas fa-undo"></i>Back</button></a>
                <button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
      </div>

</section>
<!-- /.content -->



