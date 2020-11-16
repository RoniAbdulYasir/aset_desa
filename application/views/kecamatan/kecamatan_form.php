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
					<li class="breadcrumb-item active">Kecamatan</li>
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
              <h3 class="card-title"><?=ucfirst($page)?> Kecamatan</h3>

              
            </div>
            <form action="<?=site_url('kecamatan/process') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Kode Kecamatan</label>
                    <input type="text" name="Kd_Kec" value="<?=$row->Kd_Kec?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Nama Kecamatan</label>
                    <input type="text" name="Nama_Kecamatan" value="<?=$row->Nama_Kecamatan?>" class="form-control" required>
                </div>
              
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>
      </div>
        <div class="row">
            <div class="col-12">
                <a href="<?=site_url('kecamatan')?>" button class="btn btn-warning btn-flat">
                <i class="fas fa-undo"></i>Back</button></a>
                <button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
      </div>

</section>
<!-- /.content -->



