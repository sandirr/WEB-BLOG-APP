<?php $this->load->view('partials/header'); ?>
<script id="dsq-count-scr" src="//irsandi-id.disqus.com/count.js" async></script>
    <!-- Page Header -->
    <?php

    if (empty($data['cover']))
    	$cover = base_url().'assets/img/baca.jpg' ;
	else
    	$cover = base_url().'uploads/'.$data['cover'];
     ?>
    <header class="masthead" style="background-image: url('<?php echo $cover; ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $data['title']; ?></h1>
              <span class="meta subheading">Posted by
                <a href="<?php echo base_url(); ?>">Andi Irsandi</a>
                <?php echo $data['date']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 mx-auto" style="margin-bottom: 50px">
            <div style="text-align: justify" class="artikel">
            <?php echo $data['content']; ?>
            </div>

            
            <div id="disqus_thread"></div>
                    <script>
                    
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://irsandi-id.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
          </div>
     
          <?php $this->load->view('partials/sidebar'); ?>
        </div>
      </div>
    </article>
    <hr>




<?php  $this->load->view('partials/footer');?>