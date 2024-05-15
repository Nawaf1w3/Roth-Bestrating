
<?php
   include ('header-nav.html')
?>
      <div class="banner_section layout_padding">
         <video autoplay muted loop playsinline disablePictureInPicture id="video-background">
               <source src="IMG/videoss/Sequence02.mp4" type="video/mp4">
         </video>
         <div class="overlay"></div>
         <div id="my_slider" class="">
            <div class="slide-inner">
               <div class="slide-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">BESTRATING
                                 AANLEG &
                                 ONDERHOUD</h1>
                              <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                              <div class="btn_main">
                                 <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                 <div class="started_text"><a href="#section_about">About Us</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">DESKUNDIGE
                                 TUINBESTRATING
                              &meer</h1>
                              <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                              <div class="btn_main">
                                 <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                 <div class="started_text"><a href="#section_about">About Us</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">
                                 SCHUTTING
                                 LATEN PLAATSEN</h1>
                              <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                              <div class="btn_main">
                                 <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                 <div class="started_text"><a href="#section_about">About Us</a></div>
                              </div>
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


      <?php
         include ('sections/services.html');
   
         include ('sections/about.html');

         include ('sections/projects.html');

         include ('sections/testimonial.html');
  
         include ('sections/contact.php');

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
            intervalId = setInterval(showNextSlide, 5000);
         }

         document.querySelector(".prev_slide").addEventListener("click", showPrevSlide);
         document.querySelector(".next_slide").addEventListener("click", showNextSlide);
      });



      document.addEventListener("DOMContentLoaded", function() {
         var filterLinks = document.querySelectorAll('.project-fliter');
         var projectItems = document.querySelectorAll('.werk-item-1, .werk-item-2');
         
         function filterProjects(category) {
            projectItems.forEach(function(item) {
               var itemCategory = item.dataset.category;
               if (category === 'alle' || category === itemCategory) {
                  item.style.display = 'block';
               } else {
                  item.style.display = 'none';
               }
            });
         }
         filterLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
               event.preventDefault();
               filterLinks.forEach(function(link) {
                  link.classList.remove('active');
               });
               this.classList.add('active');
               var category = this.textContent.trim();
               filterProjects(category);
            });
         });
         var initialActiveFilter = document.querySelector('.project-fliter.active');
         if (initialActiveFilter) {
            var initialCategory = initialActiveFilter.textContent.trim();
            filterProjects(initialCategory);
         }
      });

      $(function() {
         $(".box-2[data-orientation!='vertical']").twentytwenty({default_offset_pct:0.5})
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
                  text.style.maxHeight = '130px'; 
                  showMoreBtn.textContent = 'Lees Meer';
            }
         }

      function validateForm() {
        var form = document.getElementById("contactForm");
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }

   </script>
