<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-shopping-cart"></i> <?= $title ?>
        <small class="pull-right">Tanggal: <?= $tanggal  ?>/<?=$bulan ?>/<?= $tahun ?></small>
      </h2>
    </div>
    <!-- /.col -->
  </div>

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Kode Transaksi</th>
          <th>Product</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total Harga</th>
        </tr>
        </thead>
        <tbody>
          <?php 
          $no=1; 
          $total = 0;
          foreach ($lap_harian as $lap_harian) {
            $total +=$lap_harian->total_harga;
           ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $lap_harian->kode_transaksi ?></td>
          <td><?php echo $lap_harian->nama_product ?></td>
          <td>Rp. <?php echo number_format($lap_harian->harga, '0',',','.') ?></td>
          <td><?php echo $lap_harian->jumlah ?></td>
          <td>Rp. <?php echo number_format($lap_harian->total_harga, '0',',','.') ?></td>
        </tr>
        <?php } ?>
        </tbody>
      </table>

      <h3>Total Penjualan : Rp. <?php echo number_format($total, '0',',','.') ?></h3>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <button class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
    </div>
  </div>
</section>