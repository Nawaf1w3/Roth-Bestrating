
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
                                <h1 class="about_taital">Meesterlijke Sierbestrating: Verfijnde Oplossingen voor Tijdloze Schoonheid</h1>
                                <p class="about_text">Ontdek het toppunt van verfijning met onze sierbestratingoplossingen bij Bestratingbedrijf ROTH.
                                  Wij zijn gespecialiseerd in het creëren van prachtige bestratingsontwerpen die de esthetische aantrekkingskracht en functionaliteit van elke buitenruimte verhogen.
                                   Van tijdloze klassiekers tot eigentijdse wonderen, ons vakmanschap en oog voor detail zorgen voor een naadloze integratie van schoonheid en duurzaamheid.
                                    Laat ons uw landschap transformeren tot een meesterwerk dat de tand des tijds doorstaat.</p>
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
                            <h1 class="about_taital">Sierbestrating van Unieke Kwaliteit: Ontdek de Kunst van Buitenruimte-Transformatie</h1>
                            <p class="about_text">Verwen uzelf met verfijning met ons assortiment elegante sierbestratingsopties bij Bestratingbedrijf ROTH.
                               Onze zorgvuldig samengestelde selectie van bestratingsstijlen biedt een perfecte balans tussen vorm en functie,
                                waardoor de visuele aantrekkingskracht en bruikbaarheid van uw buitenruimte worden verbeterd. 
                                Of u nu de voorkeur geeft aan tijdloze allure of eigentijdse charme,
                               ons vakmanschap garandeert onberispelijke resultaten die uw omgeving naar nieuwe hoogten van elegantie en verfijning tillen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- projects section end -->

      <?php
         include('footer.html');
      ?>
      <!-- Javascript files-->
       
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- <script src="js/plugin.js"></script> -->

      <script>
            
    
            $(function() {
               $(".box-1[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
            });

     </script>
   </body>
</html>