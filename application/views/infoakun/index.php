<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/infoakun/') ?>style.css">
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

        <div class="content-two mt-5">
            <div class="cont">
                <div class="content-button mb-3">
                    <a href="<?php echo base_url('user/ubahPassword') ?>" class="btn btn-primary">Ubah Password</a>
                    <a href="<?php echo base_url('user/riwayat') ?>" class="btn btn-success">Pesanan saya</a>
                    <a href="<?php echo base_url('user/logout') ?>" class="btn btn-danger">Logout</a>
                </div>

                <?php echo $this->session->flashdata('message'); ?>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th><?php echo $user['id']; ?></th>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['password']; ?></td>
                            <td><?php echo $user['tgl_lahir']; ?></td>
                            <td><?php echo $user['jns_kelamin']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>