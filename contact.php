
   <?php
   include ('header-nav.html');
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
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#">Contact US</a></div>
                                    <div class="started_text"><a href="#">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <?php
         include('sections/contact.html');
      ?>
      <!-- contact section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- <script src="js/plugin.js"></script> -->

      <script>

         document.querySelector('.scroll-to-btn').addEventListener('click', function(e) {
            e.preventDefault();
            var targetSection = document.querySelector(this.getAttribute('href'));
            console.log(targetSection);
            var targetOffset = targetSection.offsetTop; // Adjust this value as needed
            var scrollPosition = targetOffset - 100; // Adjust this value as needed (for example, to offset for a fixed header)

            window.scrollTo({
               top: scrollPosition,
               behavior: 'smooth'
            });
         });

      </script>

      <?php
         include('footer.html');
      ?>
