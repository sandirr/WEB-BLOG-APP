<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="google-site-verification" content="0XJf3x9YpINBb66YJ7GUHmiVoWYqNNOj-X3oP_1hUII" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" CONTENT="Author: IRSANDI, Web design | programming | tekno news | tips & tricks">
    <meta name="author" content="Irsandi">
    <meta name="site-name" content="IRSANDI">
                    <?php
                    if (empty($data['title']) && empty($_GET['judul']))
                        $it = 'IRSANDI' ;
                    else if (!empty($data['title']))
                        $it = $data['kategori'].': '.$data['title'];
                    else 
                        $it = $_GET['judul'];
                    ?>
    <title><?php echo $it; ?></title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/css/clean-blog.css" rel="stylesheet">
    <link rel="icon" type="image" href="<?php echo base_url(); ?>assets/img/irsandi.png">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
 

  </head>

  <body style="background-color: #F5F5F5;">
      

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img title='irsandi' alt='irsandi.id icon' src='<?php echo base_url(); ?>assets/img/irsandi.png' style='float:left; width:27px; height: 27px;'>
        IRSANDI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>index/contact">Contact</a>
            </li>
            <?php if (isset($_SESSION['login'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('blog/add'); ?>">+Tambah artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('blog/logout'); ?>">Logout</a>
              </li>
          <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('blog/login'); ?>">Login</a>
              </li>
            <?php endif; ?>
            <li>
              <form>
                      <div class="input-group input-group-sm mb-3" >
                          <input type="search" name="cari" class="form-control" placeholder="Masukkan kata kunci">
                          <div class="input-group-append">
                              <button class="btn btn-info">Cari</button>
                          </div>
                      </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

