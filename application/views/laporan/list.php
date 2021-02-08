
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Harian</h3>
        </div>
        <div class="box-body">
        	<?php if($this->session->userdata('akses_level') == 'Tengkulak'){ echo form_open('laporan/lap_harian');
        }else{
        	echo form_open('laporan/admin_harian');
        	} ?>
          <div class="row">
            <div class="col-sm-4">
              <label>Tanggal</label>
              <select name="tanggal" class="form-control">
              	<?php 
              	$mulai = 1;
              	for ($i= $mulai; $i < $mulai + 31; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Bulan</label>
              <select name="bulan" class="form-control">
              	<?php 
              	$mulai = 1;
              	for ($i= $mulai; $i < $mulai + 12; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Tahun</label>
              <select name="tahun" class="form-control">
              	<?php 
              	$mulai = date('Y') - 1;
              	for ($i= $mulai; $i < $mulai + 5; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
          </div> 
        </div>
        <div class="box-footer">
          	<div class="col-sm-12">
             <button type="submit" class="btn btn-primary btn-block">Cetak Laporan</button>
            </div>
          </div>
          <?php echo form_close() ?>
      </div>
    </div>

    <div class="col-md-4">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Bulanan</h3>
        </div>
        <div class="box-body">
        	<?php if($this->session->userdata('akses_level') == 'Tengkulak'){ echo form_open('laporan/lap_bulanan');
        }else{
        	echo form_open('laporan/admin_bulanan');
        	} ?>
          <div class="row">
          	<div class="col-sm-6">
              <label>Bulan</label>
              <select name="bulan" class="form-control">
              	<?php 
              	$mulai = 1;
              	for ($i= $mulai; $i < $mulai + 12; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Tahun</label>
              <select name="tahun" class="form-control">
              	<?php 
              	$mulai = date('Y') - 1;
              	for ($i= $mulai; $i < $mulai + 5; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
          </div>
        </div>
        <div class="box-footer">
          	<div class="col-sm-12">
             <button type="submit" class="btn btn-primary btn-block">Cetak Laporan</button>
            </div>
        </div>
          <?php echo form_close() ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Tahunan</h3>
        </div>
        <div class="box-body">
        	<?php if($this->session->userdata('akses_level') == 'Tengkulak'){ echo form_open('laporan/lap_tahunan');
        }else{
        	echo form_open('laporan/admin_tahunan');
        	} ?>
          <div class="row">
          	<div class="col-sm-12">
              <label>Tahun</label>
              <select name="tahun" class="form-control">
              	<?php 
              	$mulai = date('Y') - 1;
              	for ($i= $mulai; $i < $mulai + 5; $i++) { 
              		echo '<option value = "' . $i . '">' . $i . '</option>';
              	}
              	 ?>
              </select>
            </div>
          </div>
      </div>
      <div class="box-footer">
          	<div class="col-sm-12">
             <button type="submit" class="btn btn-primary btn-block">Cetak Laporan</button>
            </div>
        </div>
          <?php echo form_close() ?>
      </div>
    </div>
  </div>
</section>