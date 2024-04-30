<!DOCTYPE html>
<html lang="en">
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
                                 <h1 class="banner_taital">
                                    Our Services
                                 </h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
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
      <!-- services section start -->
    
        
      <?php
         include('sections/services.html');
      ?>

      <!-- <script src="js/jquery.min.js"></script> -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- <script src="js/jquery-3.0.0.min.js"></script> -->
      <!-- <script src="js/plugin.js"></script> -->

      <?php
      include('footer.html');
      ?>
      <script>

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
