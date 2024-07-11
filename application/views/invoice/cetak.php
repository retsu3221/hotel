<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-body">
          <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
              <div class="col-xl-9">
                <p style="color: #7e8d9f;font-size: 20px;">Invoice &gt;&gt; <strong>ID: <?php echo  $invoice['invoice_id']; ?></strong></p>
              </div>
            </div>
            <div class="container">
              <div class="col-md-12">
                <div class="text-center">
                  <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
                  <p class="pt-2">Royale Hotel</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-8">
                  <ul class="list-unstyled">
                    <li class="text-muted">Nama : <span style="color:#8f8061 ;"><?php echo $invoice['invoice_nama']; ?></span></li>
                    <li class="text-muted">Check In : <?php echo $invoice['invoice_dari']; ?></li>
                    <li class="text-muted">Check Out : <?php echo $invoice['invoice_sampai']; ?></li>
                    <li class="text-muted"><i class="fas fa-phone"></i>No.Whatssap : <?php echo $invoice['invoice_hp']; ?></li>
                  </ul>
                </div>
                <div class="col-xl-4">
                  <p class="text-muted">Invoice</p>
                  <ul class="list-unstyled">
                    <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i> <span
                        class="fw-bold">ID:</span>#<?php echo $invoice['invoice_id']; ?></li>
                    <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i> <span
                        class="fw-bold">Creation Date: </span><?php echo $invoice['invoice_tanggal']; ?></li>
                    <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061;"></i> <span
                        class="me-1 fw-bold">Status:</span><?php if($invoice['invoice_status'] == 1) { ?>
                          <span class="badge bg-warning text-black fw-bold">
                          Unpaid</span></li>
                        <?php }else { ?>
                          <span class="badge bg-success fw-bold">
                          Paid</span></li>
                        <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="row my-2 mx-1 justify-content-center">
                <div class="col-md-2 mb-4 mb-md-0">
                  <div class="
                              bg-image
                              ripple
                              rounded-5
                              mb-4
                              overflow-hidden
                              d-block
                              " data-ripple-color="light">
                    <img src="<?php echo base_url('assets/hotel/img/') . $invoice['img']; ?>"
                      class="w-100" height="100px" alt="Elegant shoes and shirt" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-7 mb-4 mb-md-0">
                  <p class="fw-bold">Duluxe Room</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                  <!-- <h5 class="mb-2">
                    <s class="text-muted me-2 small align-middle"></s><span class="align-middle">Rp.<?php echo $harga; ?>,00</span>
                  </h5> -->
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xl-8">
                  <p class="ms-3">Terimakasih karena telah menggunakan layanan kami. </p>
                </div>
                <!-- <div class="col-xl-3">
                  <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                      style="font-size: 25px;">Rp.<?php echo $harga; ?>,00</span></p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>