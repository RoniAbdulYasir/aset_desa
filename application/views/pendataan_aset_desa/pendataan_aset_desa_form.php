<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
                <h1>Pendataan Aset Desa</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
					<li class="breadcrumb-item active">Pendataan Aset Desa</li>
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
              <h3 class="card-title"><?=ucfirst($page)?> Pendataan Aset Desa</h3>

              
            </div>
            <form action="<?=site_url('pendataan_aset_desa/process') ?>" method="post">
            <div class="card-body">
              
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="hidden" name="IdTran" value="<?=$row->IdTran?>" >
                    <input type="number" name="Tahun" value="<?=$row->Tahun?>" class="form-control" required>
                </div>
                
                <input type="hidden" name="Kd_Desa_FK" value="<?=$row->Kd_Desa_FK?>" class="form-control" >
                <div class="form-group">
                    <label>Nama Barang</label>
                    
                    <select name="KdRek5_FK" class="form-control " class="js-example-basic-single">
                    <option value="">- Pilih Nama Barang -</option>
                    <?php foreach ($rincian_sub_kelompok as $key => $data ) : ?>
                      <option value="<?=$data->KdRek5?>"<?=$data->KdRek5 == $row->KdRek5_FK ? "selected" : null?>><?=$data->Nama_Rincian?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Asal Aset</label>
                    
                    <select name="Id_AsalAset_FK" class="form-control ">
                    <option value="">- Pilih Asal Aset -</option>
                    <?php foreach ($asal_aset->result() as $key => $data ) : ?>
                      <option value="<?=$data->Id_AsalAset?>"<?=$data->Id_AsalAset == $row->Id_AsalAset_FK ? "selected" : null?>><?=$data->AsalAset?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kondisi Aset</label>
                    
                    <select name="Id_Kondisi_FK" class="form-control ">
                    <option value="">- Pilih Kondisi Aset -</option>
                    <?php foreach ($kondisi->result() as $key => $data ) : ?>
                      <option value="<?=$data->Id_Kondisi?>"<?=$data->Id_Kondisi == $row->Id_Kondisi_FK ? "selected" : null?>><?=$data->Kondisi?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status Aset</label>
                    
                    <select name="Id_StatusAset_FK" class="form-control ">
                    <option value="">- Pilih Status Aset -</option>
                    <?php foreach ($statusaset->result() as $key => $data ) : ?>
                      <option value="<?=$data->Id_StatusAset?>"<?=$data->Id_StatusAset == $row->Id_StatusAset_FK ? "selected" : null?>><?=$data->Status_Aset?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Identitas Barang 1</label>
                    <input type="text" name="Identitas_Barang1" value="<?=$row->Identitas_Barang1?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Identitas Barang 2</label>
                    <input type="text" name="Identitas_Barang2" value="<?=$row->Identitas_Barang2?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Identitas Barang 3</label>
                    <input type="text" name="Identitas_Barang3" value="<?=$row->Identitas_Barang3?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Kuantitas</label>
                    <input type="text" name="Kuantitas" value="<?=$row->Kuantitas?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Harga Satuan</label>
                    <input type="text" name="Hrg_Satuan" value="<?=$row->Hrg_Satuan?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" name="Nilai" value="<?=$row->Nilai?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Satuan</label>
                    <input type="text" name="Satuan" value="<?=$row->Satuan?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Peraturan Desa</label>
                    
                    <select name="Id_Ref_Perdes_FK" class="form-control ">
                    <option value="">- Pilih Peraturan Desa -</option>
                    <?php foreach ($peraturandesa->result() as $key => $data ) : ?>
                      <option value="<?=$data->Id_Ref_Perdes?>"<?=$data->Id_Ref_Perdes == $row->Id_Ref_Perdes_FK ? "selected" : null?>><?=$data->No_Perdes?>/<?=$data->Uraian_Perdes?></option>
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
                <a href="<?=site_url('pendataan_aset_desa')?>" button class="btn btn-warning btn-flat">
                <i class="fas fa-undo"></i>Back</button></a>
                <button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
      </div>

</section>
<!-- /.content -->
<script>



