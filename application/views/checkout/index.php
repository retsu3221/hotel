<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/checkout/') ?>styles.css">
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
        <!-- <div class="content-first">
            <div class="cont">
                <h2>Akun</h2>
                <p>Home > <span>Akun</span></p>
            </div>
        </div> -->

        <div class="second-content mt-5">
            <div class="conta">
                <h4>DETAIL BOOKING</h4>
                <hr>
                <div class="content-booking">
                    <img src="<?php echo base_url('assets/hotel/img/') . $kamar['img']; ?>" alt="">
                    <div class="desc-booking">
                        <h5><?php echo $kamar['nama_kamar']; ?></h5>
                        <p> <?php echo $kamar['jns_kamar']; ?> | Ranjang : <?php echo $kamar['ranjang']; ?> | Ukuran Kamar : <?php echo $kamar['ukuran']; ?> m2</p>
                        <p>Harga : <b>Rp. <?php echo number_format($harga['harga'], 0, '.', '.'); ?>,- / mlm</b></p>  
                    </div>
                </div>
                <hr>
                <form action="<?php echo base_url('home/invoice/') . $kamar['id']; ?>" method="post">
                    <div class="tgl-booking">
                        <div class="field-check">
                            <div class="field">
                                <p class="">Tgl. Check-In <span>*</span></p>
                                <!-- <label for=""></label> -->
                                <input type="date" value="<?php echo $dari; ?>" readonly name="dari">
                            </div>
                            <div class="field">
                                <p class="">Tgl. Check-Out <span>*</span></p>
                                <!-- <label></label> -->
                                <input name="sampai" type="date" value="<?php echo $sampai; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="tgl-booking mt-4">
                        <div class="field-check">
                            <div class="field">
                                <p>Nama Lengkap <span>*</span></p>
                                <input type="text" id="" name="invoice_nama" value="">
                            </div>
                            <div class="field">
                                <p>No.whatssap <span>*</span></p>
                                <input type="text" id="" name="invoice_hp">
                            </div>
                        </div>
                        <div class="tombol">
                            <input type="submit" value="Booking" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-text">
            @Web Programing III : Kelompok 8
        </div>
    </footer>
    
</body>
</html>