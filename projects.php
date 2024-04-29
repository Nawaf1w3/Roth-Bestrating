
         <?php
            include ('header-nav.html')
         ?>
         <!-- banner section start -->
         <div class="banner_section preload-background layout_padding">
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
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
      <!-- header section end -->
      <!-- projects section start -->
      <?php
            include ('sections/projects.html')
         ?>
      <!-- projects section end -->

      <?php
      include('footer.html');
      ?>

      <!-- <script src="js/plugin.js"></script> -->
      <script src="js/custom.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/plugin.js"></script>

      <script>
            
    
            $(function() {
               $(".box-1[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
            });

     </script>

   </body>
</html>