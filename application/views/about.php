<?php $this->load->view('partials/header'); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/sandi.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Andi Irsandi</h1>
              <span class="subheading">Fullstack Web Developer | Content Creator | Admin</span>
            </div>
          </div>
        </div>
      </div>
    </header>

       <!-- Biar Keren -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <a href="<?php echo site_url() ?>kategori/webdesign">
                <img src="<?php echo base_url(); ?>assets/img/desain2.png" class="float-left">
              <h4>Web Design</h4></a>
              <p>Belajar HTML, CSS, dan Bootstrap</p>
            </div>
            <div class="col-lg">
              <a href="<?php echo site_url() ?>kategori/programming">
              <img src="<?php echo base_url(); ?>assets/img/programming.png" class="float-left">
              <h4>Programming</h4></a>
              <p>Belajar Pascal, C++, PHP, dan CodeIgniter</p>
            </div>
            <div class="col-lg">
              <a href="<?php echo site_url() ?>kategori/teknonews">
              <img src="<?php echo base_url(); ?>assets/img/news2.png" class="float-left">
              <h4>Tekno News</h4></a>
              <p>Berita dan Info terbaru seputar Teknologi</p>
            </div>
          </div>
        </div>
      </div>
    

    <!-- Main Content -->
    
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto" style="text-align: justify;">
          <br>
          <p>Hi, saya Andi Irsandi biasanya disapa "Sandi". Disaat teman-teman saya bergabung dengan beragam study club untuk menambah skill coding mereka, saya malah ingin belajar otodidak untuk menambah skill coding saya sehingga oleh teman, saya dikenal sebagai solo player.</p>
          <p>Karena saya seorang solo player, makanya saya membuat situs ini bagi kalian yang juga suka belajar secara otodidak. Dan apabila kalian suka dengan konten di situs ini, alias suka belajar pemrograman dan desain web di situs ini, Selamat kita sama-sama solo player.</p>
          <p><img title='irsandi' alt='irsandi.id icon' src='<?php echo base_url(); ?>assets/img/irsandi.png' style='float:left; width:30px; height: 30px;'> Irsandi.id adalah media edukasi dan informasi tentang <strong>Web Design</strong> yang dengannya kita dapat membaca banyak artikel untuk mempelajari bagaimana kita bisa membuat desain web yang keren dengan HTML CSS dan salah satu frameworknya yaitu Bootstrap, <strong>Programming</strong> dimana kita bisa belajar banyak bahasa program seperti Pascal C++ PHP dan salah satu framework PHP yaitu CodeIgniter, <strong>Tekno News</strong> yang berisi tentang berita maupun informasi terbaru seputar teknologi, dan <strong>Tips & Tricks</strong> yang merupakan niche penting untuk menambah wawasan dan kreativitas.</p>

          <p>Without the Box</p>

        </div>
      </div>
    </div>

    <hr>
<?php $this->load->view('partials/footer'); ?>