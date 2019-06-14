   <?php $this->load->view('partials/header'); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/email.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Setiap pertanyaan ada jawabannya</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 mx-auto">
          <?php echo $this->session->flashdata('message'); ?>
          <p align='justify'>Ada yang bisa saya bantu? Silahkan masukkan pesan anda pada form di bawah ini atau anda bisa mengirim pesan ke email <b>admin@irsandi.id</b> Saya akan membalasnya sesegera mungkin.</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" validate method="post" >
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Nama</label>
                <input type="name" class="form-control" placeholder="Nama (wajib)"  required data-validation-required-message="Please enter your name." name="nama" id='nama'>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address (wajib)"  required data-validation-required-message="Please enter your email address." name="email" id='email'>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Nomor Handphone</label>
                <input type="tel" class="form-control" placeholder="Nomor Handphone (isi dengan 0 jika tidak ada)"  name="nohp" id='nohp'>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Pesan</label>
                <textarea rows="5" class="form-control" placeholder="Pesan (wajib)"  required data-validation-required-message="Please enter a message." name="pesan" id='pesan'></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
        
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="border-radius: 8px;">Kirim Pesan</button>
            </div>
          </form>
        </div>
        <?php $this->load->view('partials/sidebar'); ?>
      </div>
    </div>

    <hr>
    <?php $this->load->view('partials/footer'); ?>