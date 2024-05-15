
<?php
   include ('header-nav.html')
?>

      <div class="banner_section preload-background layout_padding">
      <div class="overlay"></div>
         <div id="my_slider" class="carousel slide" >
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Bestrating
                                 &
                                 Totaal Straataanleg</h1>
                              <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                           </div>
                        </div>
                     </div>
                  </div>   
               </div>
            </div>
         </div>
      </div>
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
                        <h1 class="about_taital">Straatbestrating op Maat</h1>
                        <p class="about_text">Bij Bestratingbedrijf ROTH bieden we professionele straatbestrating op maat. Onze ervaren vakmensen staan garant voor hoogwaardige diensten en streven naar perfectie in elk project. Van trottoirs tot parkeerplaatsen, wij realiseren duurzame oplossingen die uw straat transformeren tot een veilige, functionele en esthetisch aantrekkelijke omgeving.</p>
                     </div>
                  </div>
                     <!-- Second row -->
                  <div class="col-md-6">
                     <div class="after_before">  
                        <div class="box-1">
                           <img src="IMG/tuinbestrating/Tuin_Voor.jpg" >
                           <img src="IMG/tuinbestrating/tuin-na.jpg">
                        </div>
                     </div> 
                  </div>
                  <div class="col-md-6 align-self-center">
                        <h1 class="about_taital">Totaal Straataanleg Services</h1>
                        <p class="about_text">Ontdek de uitgebreide straataanlegservices van Bestratingbedrijf ROTH. Van ontwerp tot realisatie, wij bieden een totaaloplossing voor uw straatprojecten. Met aandacht voor detail en vakmanschap transformeren we uw buitenruimte tot een harmonieus geheel dat perfect aansluit op uw behoeften en de stedelijke omgeving.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>


      
   <!--footer-->
      <?php
         include('footer.html');
      ?>
   <!--footer-->


      <!-- projects section end -->


      <script>
         $(function() {
            $(".box-1[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
         });
     </script>

