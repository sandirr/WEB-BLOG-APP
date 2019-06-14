     <!-- sidebar -->
<style>
    .info-sidebar button{
        width: 100%;
    }
    .biarkeren{
        font-size:12px;
        background-color:aqua;
        border-radius:8px;
    }
    

</style>
        <div class="col-lg-3 col-md-4 col-12 info-sidebar" >
            <div class="card" style="width: 100%;">
              <div class="card-body">
                  <h5 class="card-title">Baca Juga !</h5>
                  <div class="list-group cord">
              
                        <?php  foreach ($data2 as $key => $value) :?>
                          <a href="<?php  echo site_url().'blog/detail/'.$value['url']; ?>" class="list-group-item" style='background-color: #f5f5f5; font-size: 14px; color:#17a2b8'>
                        <?php  echo $value['title']; ?>
                      
                          </a>
                        <?php endforeach; ?>
                  </div>
                  <br><br>
                  
                <h5 class="card-title">Kategori</h5>

    <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" >Web Design</button>
    <div class="collapse multi-collapse biarkeren" id="multiCollapseExample2">
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/html">HTML</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/css">CSS</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/bootstrap">Bootstrap</a>  
    </div>
    
    <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" >Programming</button>
    <div class="collapse multi-collapse biarkeren" id="multiCollapseExample1">
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/pascal">Pascal</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/c">C++</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/php">PHP</a>
        <a class="dropdown-item" href="<?php echo site_url() ?>kategori/ci">CodeIgniter</a>
    </div>


               
                  <a href="<?php echo site_url() ?>kategori/teknonews">
                    <button type="button" class="btn btn-outline-info btn-sm" >Tekno News</button>
                  </a>
                  <a href="<?php echo site_url() ?>kategori/tipstricks">
                    <button type="button" class="btn btn-outline-info" >Tips & Tricks</button>
                  </a>
              </div>
            </div>
        </div>
      <!-- sidebar -->