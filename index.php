
<?php
   include ('header-nav.html')
?>
         <!-- banner section start -->
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
               <button class="prev_slide">&lt;</button>
               <button class="next_slide">&gt;</button>
            </div>
         </div>
      </div>


      <!-- services section start -->
      <?php
         include ('sections/services.html');
      ?>
      <!-- services section end -->
      <!-- about sectuion start -->
      <?php
         include ('sections/about.html');
      ?>

      <!-- about sectuion end -->
      <!-- projects section start -->
      <?php
            include ('sections/projects.html')
      ?>
      <!-- projects section end -->
      <!-- testimonial section start -->
      <?php
         include ('sections/testimonial.html')
      ?>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <?php
         include ('sections/contact.php');
      ?>
      <!-- contact section end -->
       <!-- footer section start -->
      <?php
      include('footer.html');
      ?>


   <script>

document.addEventListener("DOMContentLoaded", function() {
    const carouselItems = document.querySelectorAll(".slide-item");
    let currentIndex = 0;

    function showNextSlide() {
        // Hide the current item by moving it to the left
        carouselItems[currentIndex].classList.remove("active", "slide-in");
        carouselItems[currentIndex].classList.add("slide-out-left");

        // Calculate the index of the next item
        const nextIndex = (currentIndex + 1) % carouselItems.length;

        // Show the next item by moving it in from the right
        carouselItems[nextIndex].classList.remove("slide-out-left");
        carouselItems[nextIndex].classList.add("active", "slide-in");

        // Update the current index
        currentIndex = nextIndex;
    }

    function showPrevSlide() {
        // Hide the current item by moving it to the right
        carouselItems[currentIndex].classList.remove("active", "slide-in");
        carouselItems[currentIndex].classList.add("slide-out-right");

        // Calculate the index of the previous item
        const prevIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;

        // Show the previous item by moving it in from the left
        carouselItems[prevIndex].classList.remove("slide-out-right");
        carouselItems[prevIndex].classList.add("active", "slide-in");

        // Update the current index
        currentIndex = prevIndex;
    }

    // Set interval to switch carousel items every 3 seconds
    setInterval(showNextSlide, 4000);

    // Add event listeners to the prev and next buttons
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
                  text.style.maxHeight = '130px'; // Set the initial max height here
                  showMoreBtn.textContent = 'Lees Meer';
            }
         }

               // Form validation function
      function validateForm() {
        var form = document.getElementById("contactForm");
        if (!form.checkValidity()) {
            // If form is invalid, prevent form submission
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }

    // Add event listener to form submission
    document.getElementById("contactForm").addEventListener("submit", validateForm);
   </script>
