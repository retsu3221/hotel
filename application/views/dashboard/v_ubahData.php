 <!-- Begin Page Content -->
 <div class="container-fluid">

    <form action="<?php echo base_url('admin/actionUbah') ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $user['id']; ?>" name="id" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $user['username']; ?>" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $user['email']; ?>" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $user['tgl_lahir']; ?>" name="tgl_lahir">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $user['password']; ?>" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
