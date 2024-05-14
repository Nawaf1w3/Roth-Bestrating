<!DOCTYPE html>
<html lang="en">
<?php
   include ('header-nav.html')
?>
         <!-- banner section start -->
         <div class="banner_section preload-background-services layout_padding">
         <div class="overlay"></div>
            <div id="my_slider" class="">
               <div class="slide-inner">
                  <div class="slide-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                              <h1 class="banner_taital">
                                 TUIN AANLEG/SIERBESTRATING
                                 </h1>
                                 <p class="banner_text"> Onze tuinaanlegdiensten combineren vakmanschap en creativiteit om uw droomtuin tot leven te brengen. Met hoogwaardige sierbestrating als kern van ons aanbod, streven we ernaar om jouw buitenruimte te transformeren tot een waar paradijs. </p>
                              </div>
                              <div class="btn_main">
                                    <div class="started_text active"><a href="tuinbestrating.php">meer weten</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide-item ">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12 classss">
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
               <button class="prev_slide">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35">
                     <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                     <path fill="none" d="M0 0h24v24H0z"/>
                  </svg>
               </button>
               <button class="next_slide">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35">
                     <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                     <path fill="none" d="M0 0h24v24H0z"/>
                  </svg>
               </button>
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

    // Call toggleSlideDisplay after changing the opacity
    toggleSlideDisplay();
}

function showPrevSlide() {
    resetTimer();

    carouselItems[currentIndex].classList.remove("active", "slide-in", "slide-in-right");
    carouselItems[currentIndex].classList.add("slide-out-right");

    const prevIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;

    carouselItems[prevIndex].classList.remove("slide-out-right", "slide-out-left");
    carouselItems[prevIndex].classList.add("active", "slide-in-right");
    currentIndex = prevIndex;

    // Call toggleSlideDisplay after changing the opacity
    toggleSlideDisplay();
}


    function handleTransitionEnd(event) {
        event.target.classList.remove("slide-out-left", "slide-out-right");
    }

    carouselItems.forEach(item => {
        item.addEventListener("transitionend", handleTransitionEnd);
    });

    function resetTimer() {
        clearInterval(intervalId);
        intervalId = setInterval(showNextSlide, 7000000);
        toggleSlideDisplay();
    }

    function toggleSlideDisplay() {
      setInterval(() => {
         carouselItems.forEach(item => {
               const computedStyle = window.getComputedStyle(item);
               const opacity = parseFloat(computedStyle.getPropertyValue('opacity'));

               if (opacity === 0) {
                  item.style.display = "none";
               } else {
                  item.style.display = "block"; // Set display to block when opacity is not 0
               }
         });
      }, 100); // Adjust the interval as needed
   }

    document.querySelector(".prev_slide").addEventListener("click", function() {
        showPrevSlide();
        toggleSlideDisplay();
    });
    document.querySelector(".next_slide").addEventListener("click", function() {
        showNextSlide();
        toggleSlideDisplay();
    });
});


      </script>
