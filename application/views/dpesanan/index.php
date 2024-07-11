<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/dpesanan/css/stylee.css'); ?>">
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
                            <li><a href="<?php echo base_url('user/informasiAkun') ?>">Akun Saya</a></li>
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
                <h2>Check Out</h2>
                <p>Home > Booking > <span>Check Out</span></p>
            </div>
        </div>

        <div class="second-content">
            <div class="conta">
                <?php echo $this->session->flashdata('message') ?>
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
                <form action="<?php if(!$dari and !$sampai) {echo base_url('home/cekKetersediaan/') . $kamar['kamar_id'];}else {echo base_url('home/nextBooking/') . $kamar['id'];} ?>" method="post">
                    <div class="tgl-booking">
                        <div class="field-check">
                            <div class="field">
                                <p>Tgl. Check-In <span>*</span></p>
                                <input type="date" id="tanggal" name="dari" value="<?php if(!$dari) {echo "";}else {echo $dari;} ?>" <?php if($dari){echo "readonly";} ?>>
                            </div>
                            <div class="field">
                                <p>Tgl. Check-Out <span>*</span></p>
                                <input type="date" id="tanggal" name="sampai" value="<?php if(!$sampai) {echo "";}else {echo $sampai;} ?>" <?php if($sampai){echo "readonly";} ?>>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tombol">     
                        <?php if(!$dari and !$sampai) { ?>
                            <input type="submit" value="CEK KETERSEDIAAN KAMAR" class="btn btn-dark">
                        <?php }else { ?>
                            <!-- <div class="messageku">
                                
                            </div>
                            <div class="tmbl"> -->

                                <a href="<?php echo base_url('home/kembali/') . $kamar['id']; ?>" class="btn btn-secondary kembali">Kembali</a>
                                <!-- <a href="" class="btn btn-success mr-5">Booking Sekarang</a> -->
                                <input type="submit" value="Booking Kamar" class="btn btn-success">
                            </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>                      

        <footer>
            <div class="footer-text">
                @Web Programing III : Kelompok 8
            </div>
        </footer>
    </div>
</body>
</html>