    <section class="site-section bg-light" >
      <div class="container">
        <div class="row">

          <div class="col-md-12 mb-5 site-animate">
            <h3 class="display-12">Riwayat Pembelanjaan</h3>

      <form action="Riwayat" method="post">
      </form>
      <p align="center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Tgl Pesan</th>
          <th>Jumlah Roti</th>
          <th>Total Belanja</th>
          <th> <center> Aksi </center></th>
        </tr>
        <!-- <?php  
        $no = 1;
        foreach ($data as $row){ ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->tgl_pesan;?></td>
          <td><?php echo $row->jumlah;?></td>
          <td><?php echo $row->total;?></td>
        
          <td><a href="<?php echo base_url(); ?>Pesanan/detail/<?php echo $row->id_pesan;?>">Detail</a></td>
          
        </tr>
        <?php $no++;
      }?> -->
      </table>
    </p>

          </div>
        </div>
      </div>

<!-- isi -->


      <!-- end -->
