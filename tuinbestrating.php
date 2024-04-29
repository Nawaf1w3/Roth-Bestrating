   <?php
      include('header-nav.html');
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
                                 <div class="box-1">
                                    <img src="IMG/tuinbestrating/Tuin_Voor.jpg" >
                                    <img src="IMG/tuinbestrating/tuin-na.jpg">
                                 </div>
                              </div> 
                            </div>
                            <div class="col-md-6 order-md-1 align-self-center"> <!-- Swap the order of the columns for smaller screens -->
                                <h1 class="about_taital">Tuinbestrating op Maat</h1>
                                <p class="about_text">Bij Bestratingbedrijf ROTH bieden we professionele tuinbestrating op maat. Onze ervaren vakmensen staan garant voor hoogwaardige diensten en streven naar perfectie in elk project. Van terrassen tot tuinpaden, wij realiseren duurzame oplossingen die uw tuin transformeren tot een oase van schoonheid en functionaliteit.</p>
                            </div>
                        </div>
                          <!-- Second row -->
                        <div class="col-md-6">
                           <div class="after_before">  
                              <div class="box-1">
                                 <img src="IMG/tuinbestrating/tuin_Svoor1.png" >
                                 <img src="IMG/tuinbestrating/tuin-Sna.png">
                              </div>
                           </div> 
                        </div>
                        <div class="col-md-6 align-self-center">
                            <h1 class="about_taital">Totaal Tuinaanleg Services</h1>
                            <p class="about_text">Ontdek de uitgebreide tuinaanlegservices van Bestratingbedrijf ROTH. Van ontwerp tot realisatie, wij bieden een totaaloplossing voor uw tuinprojecten. Met aandacht voor detail en vakmanschap transformeren we uw buitenruimte tot een harmonieus geheel dat perfect aansluit op uw wensen en levensstijl.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      

     


      <!-- projects section end -->
      <?php
      include ('footer.html');
      ?>
      <!-- Javascript files-->
       
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