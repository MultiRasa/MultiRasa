     <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <!-- <div class="item">  
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/images/manis.png" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">ROTI Manis</h5>
                     <p class="mb-4">Roti yang mempunyai rasa manis yang menonjol, bertekstur empuk dan umumnya dapat ditambahkan bermacam isi.</p> 
                     <a href="<?php echo base_url ();?>Keranjang" class="btn btn-secondary">Tambah</a>
                    
                  </div>
                </div>
              </div> -->

              <form action="Riwayat" method="post">
                </form>
                  <p align="center">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>No.</th>
                      <th>Nama Roti</th>
                      <th>Harga</th>
                      <th> <center> Aksi </center></th>
                    </tr>
                    <?php  
                    $no = 1;
                    foreach ($data as $row){ ?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row->nama_roti;?></td>
                      <td><?php echo $row->harga;?></td>
                    
                      <a href="javascript:;"
                            data-id_roti="<?php echo $row->id_roti ?>"
                            data-nama_roti="<?php echo $row->nama_roti ?>"
                            data-harga="<?php echo $row->harga ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button></a></td>
                      
                    </tr>
                    <?php $no++;
                  }?>
                  </table>
                </p>

                 <!-- Modal Edit -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Keranjang</h4>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('Dashboard/ubah')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-4 col-sm-2 control-label">Nama Roti</label>
                                <div class="col-lg-10">
                                  <!-- <input type="hidden" id="id_roti" name="id_roti"> -->
                                  <input class="form-control" id="nama_roti" name="nama_roti" placeholder="Tuliskan Nama"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Tuliskan harga">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-sm-2 control-label">Jumlah</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                          </div></form></div></div></div>


              
            </div>
          </div>
          
        </div>
      </div>
    </section>      
    <!-- END section -->
   
