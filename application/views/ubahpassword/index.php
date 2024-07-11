<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/ubahpassword/') ?>style.css">
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
                <p>Home > Akun > <span>Ubah Password</span></p>
            </div>
        </div>
        <div class="second-content">
            <div class="cont">
                <form method="post" action="<?php echo base_url('user/actionUbah'); ?>">
                    <div class="form-group col-lg-4">
                      <label for="exampleInputPassword1" class="h4 mb-3 text-secondary">Masukan Password Baru</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
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