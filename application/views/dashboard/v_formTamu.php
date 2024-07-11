 <!-- Begin Page Content -->
 <div class="container-fluid">

    <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mb-3">Tambah User</a>
    
    <div class="col col-lg-3">

        <?php echo $this->session->flashdata('message'); ?>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($cekTamu as $tamu) { ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $tamu['username']; ?></td>
                    <td><?php echo $tamu['email']; ?></td>
                    <td><?php echo $tamu['password']; ?></td>
                    <td><?php echo $tamu['tgl_lahir']; ?></td>
                    <td><?php echo $tamu['jns_kelamin']; ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/ubahTamu/') . $tamu['id']; ?>" class="btn btn-success">Ubah</a>
                        <a href="<?php echo base_url('admin/hapusTamu/') . $tamu['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/tambahTamu'); ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-control" name="jns_kelamin" required>
                            <option>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name ="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="buton" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
