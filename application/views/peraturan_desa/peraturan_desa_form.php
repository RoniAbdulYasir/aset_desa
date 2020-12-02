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
					<li class="breadcrumb-item active">Peraturan Desa</li>
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
              <h3 class="card-title"><?=ucfirst($page)?> Peraturan Desa</h3>

              
            </div>
            <form action="<?=site_url('peraturan_desa/process') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="Id_Ref_Perdes" value="<?=$row->Id_Ref_Perdes?>">
                <input type="hidden" name="Kd_Desa_FK" value="<?=$row->Kd_Desa_FK?>" class="form-control" >
                <div class="form-group">
                    <label for="inputDescription">Nomor Peraturan Desa</label>
                    <input type="text" name="No_Perdes" value="<?=$row->No_Perdes?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="inputDescription">Tanggal Peraturan Desa</label>
                    <input type="date" name="Tgl_Perdes" value="<?=$row->Tgl_Perdes?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="inputDescription">Uraian Peraturan Desa</label>
                    <input type="text" name="Uraian_Perdes" value="<?=$row->Uraian_Perdes?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="inputDescription">Status</label>
                    <input type="text" name="Status" value="<?=$row->Status?>" class="form-control" >
                    <!--<select name="Status" class="form-control ">
                        <option value="Induk">Induk</option>
                        <option value="Perubahan 1">Perubahan 1</option>
                        <option value="Perubahan 2">Perubahan 2</option>
                        <option value="Perubahan 3">Perubahan 3</option>
                        <option value="Perubahan 4">Perubahan 4</option>
                    </select>-->
                </div>
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>
      </div>
        <div class="row">
            <div class="col-12">
                <a href="<?=site_url('peraturan_desa')?>" button class="btn btn-warning btn-flat">
                <i class="fas fa-undo"></i>Back</button></a>
                <button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
      </div>

</section>
<!-- /.content -->



