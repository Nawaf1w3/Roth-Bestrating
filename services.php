<!DOCTYPE html>
<html lang="en">
<?php
   include ('header-nav.html')
?>
         <!-- banner section start -->
         <div class="banner_section preload-background-services layout_padding">
         <div class="overlay"></div>
            <div id="my_slider" class="carousel slide" >
               <div class="carousel-inner">
                  <div class="slide-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                    Bestrating
                                 </h1>
                                 <p class="banner_text">Bij Bestratingsbedrijf Roth begrijpen we dat de juiste bedrijfsbestrating essentieel is voor een professionele uitstraling en optimale functionaliteit van uw bedrijfsomgeving. </p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="Bestrating.php">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item ">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                 TUIN AANLEG / SIERBESTRATING
                                 </h1>
                                 <p class="banner_text"> Onze tuinaanlegdiensten combineren vakmanschap en creativiteit om uw droomtuin tot leven te brengen. Met hoogwaardige sierbestrating als kern van ons aanbod, streven we ernaar om jouw buitenruimte te transformeren tot een waar paradijs. </p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="tuinbestratin.php">meer weten</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item ">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                 Grondwerk
                                 </h1>
                                 <p class="banner_text"> Professionele Grondwerkzaamheden en Zandlevering" Welkom bij Bestratingsbedrijf Roth, uw partner voor professionele grondwerkzaamheden en zandlevering </p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="grondwerk.php">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item ">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                 MATERIALEN LEVEREN
                                 </h1>
                                 <p class="banner_text"> Bij Bestratingsbedrijf Roth zijn we gepassioneerd over het creëren van prachtige buitenruimtes die zowel functioneel als esthetisch zijn. Met trots leveren we een breed scala aan hoogwaardige materialen en diensten om aan al jouw bestratingsbehoeften te voldoen. </p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="material.delivery.php">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item ">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">
                                 REPIRATIE / HERBESTRATING
                                 </h1>
                                 <p class="banner_text">Bij Bestratingsbedrijf Roth staan we voor u klaar, of het nu gaat om het herstraten van uw oprit, tuinpaden of het uitvoeren van kleine reparaties zoals het ophogen van gedeeltes.</p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="repiratie.php">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="prev_slide">&lt;</button>
               <button class="next_slide">&gt;</button>
            </div>
         </div>
     
   
      <!-- header section end -->
      <!-- services section start -->
    
        
      <?php
         include('sections/services.html');
      ?>


      <?php
      include('footer.html');
      ?>
      <script>


document.addEventListener("DOMContentLoaded", function() {
         const carouselItems = document.querySelectorAll(".slide-item");
         let currentIndex = 0;
         let intervalId;

            intervalId = setInterval(showNextSlide, 1000);

         function showNextSlide() {
            resetTimer();
            carouselItems[currentIndex].classList.remove("active", "slide-in", "slide-in-right");
            carouselItems[currentIndex].classList.add("slide-out-left");

            const nextIndex = (currentIndex + 1) % carouselItems.length;

            carouselItems[nextIndex].classList.remove("slide-out-left", "slide-out-right");
            carouselItems[nextIndex].classList.add("active", "slide-in");
            currentIndex = nextIndex;
         }

         function showPrevSlide() {
            resetTimer();

            carouselItems[currentIndex].classList.remove("active", "slide-in", "slide-in-right");
            carouselItems[currentIndex].classList.add("slide-out-right");

            const prevIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;

            carouselItems[prevIndex].classList.remove("slide-out-right", "slide-out-left");
            carouselItems[prevIndex].classList.add("active", "slide-in-right");

            currentIndex = prevIndex;
         }

         function handleTransitionEnd(event) {

            event.target.classList.remove("slide-out-left", "slide-out-right");
         }

         carouselItems.forEach(item => {
            item.addEventListener("transitionend", handleTransitionEnd);
         });



         function resetTimer() {
            clearInterval(intervalId);
            intervalId = setInterval(showNextSlide, 7000);
         }

         document.querySelector(".prev_slide").addEventListener("click", showPrevSlide);
         document.querySelector(".next_slide").addEventListener("click", showNextSlide);
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
