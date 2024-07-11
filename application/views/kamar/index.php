<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/kamar/') ?>style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/kamar/css/') ?>style.css">
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
        </div> 
        <div class="content-first">
            <div class="cont">
                <h2>Kamar</h2>
                <p>Home > <span>Kamar</span></p>
            </div>
        </div>
        <div class="content-two">
            

            <div class="container py-5">
                <h2 class="text-center">Pilih Kamar Terbaikmu</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                    <?php
                        foreach($infoKamar as $kamar) { ?>
                            <div class="col">
                                <div class="card">
                                    <img src="<?php echo base_url('assets/hotel/img/') . $kamar['img']; ?> " class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $kamar['nama_kamar']; ?></h5>
                                        <p class="card-text"><?php echo $kamar['desk']; ?></p>
                                    </div>
                                    <div class="mb-5 d-flex justify-content-around">
                                        <h3><?php echo number_format($kamar['harga'], 0, '.', '.'); ?>/ Malam</h3>
                                        <a href="<?php echo base_url('home/bookingKamar/') . $kamar['id']; ?>"><button class="btn btn-primary">Book Now</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>

                </div>
                </div>
                    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
        </div>
        <footer>
            <div class="footer-text">
                @Web Programing III : Kelompok 8
            </div>
        </footer>
    </div>
</body>