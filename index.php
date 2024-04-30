
<?php
   include ('header-nav.html')
?>
         <!-- banner section start -->
         <div class="banner_section preload-background layout_padding">
         <div class="overlay"></div>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">BESTRATING
                                    AANLEG &
                                    ONDERHOUD</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">DESKUNDIGE
                                    TUINBESTRATING
                                 &meer</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                    SCHUTTING
                                    LATEN PLAATSEN</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" alt="my_slider" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" alt="my_slider" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>


      <!-- services section start -->
      <?php
         include ('sections/services.html');
      ?>
      <!-- services section end -->
      <!-- about sectuion start -->
      <?php
         include ('sections/about.html');
      ?>

      <!-- about sectuion end -->
      <!-- projects section start -->
      <?php
            include ('sections/projects.html')
      ?>
      <!-- projects section end -->
      <!-- testimonial section start -->
      <?php
         include ('sections/testimonial.html')
      ?>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <?php
         include ('sections/contact.html');
      ?>
      <!-- contact section end -->

      <?php
      include('footer.html');
      ?>

      <!-- footer section start -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/custom.js"></script>

   <script>
      $(function() {
         $(".box-2[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
      });

      function toggleText(button) {
            const container = button.closest('.services_item').querySelector('.services_text_container');
            const text = container.querySelector('.services_text');
            const showMoreBtn = button;
            container.classList.toggle('expanded');
            if (container.classList.contains('expanded')) {
                  text.style.maxHeight = 'none';
                  showMoreBtn.textContent = 'Show Less';
            } else {
                  text.style.maxHeight = '130px'; // Set the initial max height here
                  showMoreBtn.textContent = 'Lees Meer';
            }
         }
   </script>
