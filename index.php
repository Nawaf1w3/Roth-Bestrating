
<?php
   include ('header-nav.html')
?>
         <!-- banner section start -->
         <div class="banner_section preload-background layout_padding">
         <video autoplay muted loop id="video-background">
                  <source src="img/videos/Sequence 02.mp4" type="video/mp4">
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
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="#contact_section_2">Contact US</a></div>
                                    <div class="started_text"><a href="#section_about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
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
                  <div class="carousel-item">
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
               <a class="carousel-control-prev" alt="my_slider" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" alt="my_slider" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
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
