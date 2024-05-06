
         <?php
            include ('header-nav.html')
         ?>
         <!-- banner section start -->
         <div id="project-section" class="banner_section layout_padding">
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
                  <div class="carousel-item ">
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
                  <div class="carousel-item ">
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
      
      <!-- header section end -->
      <!-- projects section start -->
      <?php
            include ('sections/projects.html')
         ?>
      <!-- projects section end -->

      <?php
      include('footer.html');
      ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
         // Get all carousel items
         const carouselItems = document.querySelectorAll(".carousel-item");
         let currentIndex = 0;

         // Set interval to switch carousel items every 3 seconds
         setInterval(function() {
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
         }, 4000);
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
                  showMoreBtn.textContent = 'Lees Meer...';
            }
         }
     </script>