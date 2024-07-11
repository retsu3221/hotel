<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/style.css'); ?>">

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="box">
        <div class="cont">
            <nav class="kepala">
                <div class="logo"><a href="#" class="">ROYALE<span>.</span></a></div>
                <div class="list">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="<?php echo base_url('home/kamar'); ?>">Kamar</a></li>
                        <li><a href="">Tentang</a></li>
                        <!-- <li><a href="<?php echo base_url('user'); ?>">Login</a></li> -->
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
            <section class="content-box">
                <div class="content">
                    <div class="offer">
                        <div class="isi">
                            <div class="offer-title">Penawaran Khusus</div>
                            <div class="offer-one"><h1>Waktunya Liburan</h1></div>
                            <div class="offer-detail"><p class="p">Booking sekarang, ada penawaran terbatas. Nikmati waktu liburan bersama orang tercinta di waktu liburan.</p></div>
                            <div class="pencet">
                                <button><a href="<?php echo base_url('home/kamar/'); ?>" class="btn btn-primary">BOOKING</a></button>
                             </div>
                        </div>
                    </div>
                    <div class="gambar">
                        <div class="hello">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>1.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>2.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>3.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>4.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>5.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>6.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>7.jpg" alt="">
                            <img src="<?php echo base_url('assets/hotel/img/'); ?>8.jpg" alt="">
                            <!-- <img src="assets/1.jpg" alt="">
                            <img src="assets/2.jpg" alt="">
                            <img src="assets/3.jpg" alt="">
                            <img src="assets/4.jpg" alt="">
                            <img src="assets/5.jpg" alt="">
                            <img src="assets/6.jpg" alt="">
                            <img src="assets/7.jpg" alt="">
                            <img src="assets/8.jpg" alt=""> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="footer-text">
                @Web Programing III : Kelompok 8
            </div>
        </footer>
    </div>
    
</body>
</html>