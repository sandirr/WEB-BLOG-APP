<?php $this->load->view('partials/header'); ?>
    <!-- Page Header -->
    <script id="dsq-count-scr" src="//irsandi-id.disqus.com/count.js" async></script>
    <header class="masthead" style="background-image: url('<?php echo base_url().'assets/img/tt.jpg'; ?>')">
      <div class="overlay"></div>
      <div class="container">

        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Tips & Tricks</h1>
              <span class="subheading">Kumpulan Tips & Tricks dalam<br>Kegiatan Sehari-hari biar Tambah Kreatif</span>
            </div>
          </div>
        </div>
      </div>
    </header>
 

    <!-- Main Content -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-11 panel-blog">
        	<?php echo $this->session->flashdata('message'); ?>
    <!-- urutan -->
            <div class="row" align="center">
              <div class="col-12">
                <div class="btn-group btn-group-sm" role="group">
                  
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark" data-toggle="dropdown">
                      Urutkan Berdasarkan &raquo;
                    </button>
                    <div class="dropdown-menu" style="width: 100%">
                      <a class="dropdown-item" href="<?php echo site_url() ?>kategori/tipstricks">
                        <button class="btn btn-dark btn-sm"><p>Terbaru</p></button> </a>
                      <a class="dropdown-item" href="<?php echo site_url() ?>kategori/tipstricksasc">
                        <button class="btn btn-dark btn-sm"><p>Terlama</p></button> </a>
                    </div>
                 
                </div>
              </div>
            </div>
            <br>
    <!-- akhir urutan -->
<?php foreach ($blogss as $key => $blog) :?>
          <div class="row">
            <div class="col-12">
                          <?php if (isset($_SESSION['login'])) : ?>
                            
                              <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>"> Edit </a> 
                              <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>" 
                                onclick = "return confirm('Hi Programmer Handal, Yakin Mau Hapus ?')"> Hapus</a>
                            
                          <?php endif; ?>
                                       <?php              
                                                          if (empty($blog['cover']))
                                                              $cover = base_url().'assets/img/read.jpg' ;
                                                          else
                                                              $cover = base_url().'uploads/'.$blog['cover'];
                                       ?>

              <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                <img src="<?php echo $cover; ?>">
              </a>
              <h2><a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>"><?php echo $blog['title']; ?></a></h2>
              <p><strong><?php echo $blog['kategori']; ?></strong> | <?php echo $blog['date']; ?><br>Posted by: Andi Irsandi</p>
              <div class='konten'><?php echo $blog['contents']; ?>
                <br>
              <p style="display: inline-block;margin:10px 0 -5px; font-weight: bold; "><i><a href="<?php echo site_url('blog/detail/'.$blog['url']).'#disqus_thread'; ?>" 
              style='text-decoration:none;'>0 Comment</a></i></p>
                <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                    <button style="float: right; 
                    background-color: #17a2b8;  
                    border-color: #17a2b8;
                    color: #fff;">Lanjutkan Baca!</button></a>
              </div>

            </div>
          </div>
          <hr>
          
<?php endforeach; ?>
          <div class="row justify-content-center">
            <?php echo $this->pagination->create_links(); ?>
            <br>
          </div>
          <br>
        </div>

   <?php $this->load->view('partials/sidebar'); ?>

  </div>
         
</div>
<hr>

<?php $this->load->view('partials/footer'); ?>


