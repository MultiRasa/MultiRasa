<body>
    
        <section class="site-section bg-light" >
      <div class="container">
        <div class="row">

          <div class="col-md-12 mb-5 site-animate">
            <h3>Hai, <?php echo $this->session->userdata("username"); ?></h3>
          </div>
        </div>
      </div>
 

     <section class="site-section bg-light" >
      <div class="container">
        <div class="row">

          <div class="col-md-12 mb-5 site-animate">
            <p>Silahkan tinggalkan komentar anda.</p>
          </div>

          <div class="col-md-5 mb-3 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Komentar</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tuliskan Komentar Anda"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="KIRIM PESAN">
              </div>
            </form>
          </div>

          
        </div>
      </div>
    </section>
    <!-- END section -->
    <a href="<?php echo base_url(); ?>login">Logout</a>
</body>
