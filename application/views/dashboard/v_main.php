 <!-- Begin Page Content -->
 <div class="container-fluid">

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
        <div class="inner">
            <h3><?php echo $totalUser; ?></h3>

            <p>Tamu</p>
        </div>
        <div class="icon">
            <i class="ion ion-android-person"></i>
        </div>
        <a href="<?php echo base_url('admin/dataTamu') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
        <div class="inner">
            <h3><?php echo $totalTransaksi; ?></h3>

            <p>Transaksi</p>
        </div>
        <div class="icon">
            <i class="ion ion-android-person"></i>
        </div>
        <a href="<?php echo base_url('admin/dataTamu') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
