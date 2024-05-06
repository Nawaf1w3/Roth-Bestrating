
   <?php
   include ('header-nav.html');
   ?>
         <!-- banner section start -->
      <div class="banner_section preload-background layout_padding">
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
      <!-- header section end -->
      <!-- contact section start -->
      <?php
         include('sections/contact.php');
      ?>
      <!-- contact section end -->

   

<script>
    var selectedFiles = []; // Array to store selected files

   // Function to display selected files
   function displaySelectedFiles(files) {
   var selectedFilesDiv = document.getElementById('selected-files');
   selectedFilesDiv.innerHTML = ''; // Clear previous selection
   selectedFiles = []; // Clear previous selection

   if (files.length > 0) {
      var fileList = document.createElement('ul');
      fileList.classList.add('list-unstyled');

      for (var i = 0; i < files.length; i++) {
         var listItem = document.createElement('li');
         listItem.textContent = files[i].name;
         fileList.appendChild(listItem);
         selectedFiles.push(files[i]); // Add file to the selected files array

         // Create (X) button for each file
         var deleteButton = document.createElementNS("http://www.w3.org/2000/svg", "svg");
         deleteButton.innerHTML = '<circle cx="10" cy="10" r="9" fill="white" /><text x="6" y="15" fill="white">X</text>';
         deleteButton.setAttribute('class', 'delete-icon');
         deleteButton.setAttribute('data-index', i);
         deleteButton.setAttribute('viewBox', '0 0 20 20');
         deleteButton.setAttribute('width', '20');
         deleteButton.setAttribute('height', '20');
         deleteButton.onclick = function() {
         var index = this.getAttribute('data-index');
         removeFile(index);
         };

         // Create container for (X) button
         var buttonContainer = document.createElement('div');
         buttonContainer.appendChild(deleteButton);
         listItem.appendChild(buttonContainer);
      }

      selectedFilesDiv.appendChild(fileList);
   }
   }

   // Function to remove file from selection
   function removeFile(index) {
   selectedFiles.splice(index, 1); // Remove file from array
   displaySelectedFiles(selectedFiles); // Redisplay files
   }

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
