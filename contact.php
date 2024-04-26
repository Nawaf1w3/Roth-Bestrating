<!DOCTYPE html>
<html lang="en">
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
      <div class="contact_section layout_padding justify-content-center">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-md-12 ">
                  <h1 class="contact_taital">Of u nu op zoek bent naar een elegante oprit</h1>
                  <p>Sfeervolle sierbestrating of een functioneel terras.
                      Wij staan klaar om u buitenruimte te transformeren met prachtige bestrating. Laat pns weten welke stijl,
                       kleuren en patronen u in gedachten hebt,
                        en wij zullen onze expertise inzetten om een meesterwerk te creëren dat niet alleen mooi is,
                         maar ook duurzaam en functioneel. Vul het <strong><a class="font-weight-bold scroll-to-btn" href="#contact_section_2">formulier</a></strong>  in en geef uw straatwerk richting en karakter!</p>
               </div>
            </div>
         </div>
         <div class="container-fluid justify-content-center">
            <div class="contact_section_2 " id="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <form action="send_email.php" method="post">
                        <div class="mail_section_1">
                           <div class="row">
                              <div class="col">
                              <input type="text" class="voornaam" placeholder="Voornaam" name="voornaam">
                              </div>
                              <div class="col">
                              <input type="password" class="achternaam" placeholder="Achternaam" name="achternaam">
                              </div>
                           </div>
                           <input type="text" class="mail_text" placeholder="Telefoon" name="telefoon">
                           <input type="text" class="mail_text" placeholder="Adres" name="adres"> 
                           <input type="text" class="mail_text" placeholder="Email" name="email">
                           <textarea class="massage-bt" placeholder="Uw vraag of opmerking" rows="5" id="comment" name="opmerking"></textarea>
                           <button class="form-btn-submit"  type="submit">verzend</button>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_left_15">
                     <div class="contact_img"><img src="images/contact-img.png"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="1">
            <div class="map_main justify-content-center">
               <div class="map-responsive ">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.164045289348!2d5.729100723052699!3d52.51237023679408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c62b186d305203%3A0xf30859ede33f3106!2sRoth%20Bestrating!5e0!3m2!1sar!2snl!4v1714117862745!5m2!1sar!2snl" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
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
   </body>
</html>