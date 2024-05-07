<?php
      include('header-nav.html');
   ?>
         <!-- banner section start -->
         <div class="banner_section preload-background layout_padding">
         <video autoplay muted loop playsinline disablePictureInPicture id="video-background">
               <source src="IMG/videoss/bestrating-grondwerk.mp4" type="video/mp4">
         </video>
         <div class="overlay"></div>
            <div id="my_slider" class="carousel slide" >
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
      </div>
      <!-- header section end -->



      <!-- projects section start -->
      <div class="projects_section layout_padding">
         <div class="container">
                <div class="container">
                    <div class="row">
                        <!-- First row -->
                        <div class="row">
                            <div class="col-md-6 order-md-2"> <!-- Swap the order of the columns for smaller screens -->
                              <div class="after_before">  
                              <div class="box-2">
                                 <img src="IMG/grondwerk/grondwerk-voor.jpg" class="image " alt="">
                                 <img src="IMG/grondwerk/grondwerk-na.jpg" class="image " alt="">
                              </div>
                              </div> 
                            </div>
                            <div class="col-md-6 order-md-1 align-self-center"> <!-- Swap the order of the columns for smaller screens -->
                                <h1 class="about_taital">Lorem ipsum dolor sit </h1>
                                <p class="about_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, quasi. Odit error numquam ea fuga quasi quidem aperiam? Dolorum nemo cumque ea, maxime repellendus pariatur at delectus eveniet architecto odio.</p>
                            </div>
                        </div>
                          <!-- Second row -->
                        <div class="col-md-6">
                           <div class="after_before">  
                              <div class="">
                                 <img style="max-height: 300px;" src="IMG/grondwerk-image.jpg" >
                              </div>
                           </div> 
                        </div>
                        <div class="col-md-6 align-self-center">
                           <h1 class="about_taital">Lorem ipsum dolor sit </h1>
                           <p class="about_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, quasi. Odit error numquam ea fuga quasi quidem aperiam? Dolorum nemo cumque ea, maxime repellendus pariatur at delectus eveniet architecto odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      

     


      <!-- projects section end -->
      <?php
      include ('footer.html');
      ?>


      <script>
            
    
            $(function() {
               $(".box-1[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
            });

               
            $(function() {
               $(".box-2[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
            });

     </script>
