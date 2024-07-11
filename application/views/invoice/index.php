<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/invoice/') ?>style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="cont">
            <nav class="kepala">
                <div class="logo"><a href="#" class="">ROYALE<span>.</span></a></div>
                <div class="list">
                    <ul>
                        <li><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('home/kamar'); ?>">Kamar</a></li>
                        <li><a href="">Tentang</a></li>
                        <?php
                            if($user) { ?>
                                <li><a href="<?php echo base_url('user/informasiAkun'); ?>">Akun Saya</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url('user'); ?>">Login</a></li>
                                
                            <?php }
                        ?>
                    </ul>
                </div>
            </nav>
        </div> 
        <div class="content-first">
            <div class="cont">
                <h2>Akun</h2>
                <p>Home > <span>Akun</span></p>
            </div>
        </div>
        <div class="container mt-4">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
        <div class="content-two mt-5">
            <div class="cont d-flex gap-5">
                <?php foreach($invo as $inv) { ?>
                    <div class="card col-md-3">
                    <h5 class="card-header text-primary text-center"><?php echo $inv['invoice_nama_kamar']; ?></h5>
                    <div class="card-body">
                      <p class="card-text">Check-In : <?php echo $inv['invoice_dari']; ?></p>
                      <p class="card-text">Check-Out : <?php echo $inv['invoice_sampai']; ?></p>
                      <img src="<?php echo base_url('assets/hotel/img/') . $inv['img']; ?>" alt="" height="150" width="200" class="mb-4">
                      <a href="<?php echo base_url('user/infoinv/') . $inv['invoice_id']; ?>" class="btn btn-primary">Invoice</a>
                      <?php if($inv['invoice_status'] == 1) { ?>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $inv['invoice_id']; ?>">Bayar</a>
                      <?php } ?>
                      
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
        
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $inv['invoice_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $inv['invoice_id']; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('user/pembayaran/') . $inv['invoice_id']; ?>">
            <input type="file" name="bukti">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>