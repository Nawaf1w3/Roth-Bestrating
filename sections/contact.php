
<!-- Your HTML code for the contact section -->
<div class="contact_section layout_padding justify-content-center">
    <div class="container">
       <div class="row justify-content-center text-center">
          <div class="col-md-12 ">
             <h1 class="contact_taital">Of u nu op zoek bent naar een elegante oprit</h1>
             <p class="contact_taital-p">Sfeervolle sierbestrating of een functioneel terras.
                 Wij staan klaar om u buitenruimte te transformeren met prachtige bestrating. Laat ons weten welke stijl,
                  kleuren en patronen u in gedachten hebt,
                   en wij zullen onze expertise inzetten om een meesterwerk te creëren dat niet alleen mooi is,
                    maar ook duurzaam en functioneel. Vul het <strong><a class="font-weight-bold scroll-to-btn" href="#contact_section_2">formulier</a></strong>  in en geef uw straatwerk richting en karakter!
            </p>
          </div>
       </div>
    </div>
    <div class="container-fluid justify-content-center">
       <div class="contact_section_2 " id="contact_section_2">

          <div class="row">
                    <div class="col-md-6">
                        <form action="send_email.php" method="POST" id="contactForm" enctype="multipart/form-data">
                            <div class="mail_section_1">
                                <div class="row">
                                    <div class="col">
                                    <span class="error-message text-danger"></span>
                                        <input type="text" class="voornaam" placeholder="Voornaam" name="voornaam">
                                        
                                    </div>
                                    <div class="col">
                                       <span class="error-message text-danger"></span>
                                        <input type="text" class="achternaam" placeholder="Achternaam" name="achternaam">
                                        
                                    </div>
                                </div>
                                <div>
                                    <span class="error-message text-danger"></span>
                                    <input type="text" class="mail_text" placeholder="Telefoon" name="telefoon">
                                    
                                </div>
                                <div>
                                    <span class="error-message text-danger"></span>
                                    <input type="text" class="mail_text" placeholder="Adres" name="adres">
                                    
                                </div>
                                <div>
                                    <span class="error-message text-danger"><?php echo isset($errors['voornaam']) ? $errors['voornaam'] : ''; ?></span>
                                    <input type="text" class="mail_text" placeholder="Email" name="email">
                                    
                                </div>
                                <div>
                                    <span class="error-message text-danger"></span>
                                    <textarea class="massage-bt" placeholder="Uw vraag of opmerking" rows="5" id="comment" name="opmerking"></textarea>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto erbij (optional)</label><br>
                                    <input class="" type="file" id="formFile" name="formFile">
                                </div>
                                <button class="form-btn-submit" type="submit">verzend</button>
                            </div>
                        </form>
                    </div>

             <div class="col-md-6 padding_left_15">
                <div class="contact_img"><img src="IMG/contact-img.jpg" alt="contact-form-image" style="width: 80%; border-radius:30px;"></div>
             </div>
          </div>
       </div>
    </div>
    <div class="1">
       <div class="map_main justify-content-center">
          <div class="map-responsive ">
             <iframe title="Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.164045289348!2d5.729100723052699!3d52.51237023679408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c62b186d305203%3A0xf30859ede33f3106!2sRoth%20Bestrating!5e0!3m2!1sar!2snl!4v1714117862745!5m2!1sar!2snl" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
       </div>
    </div>
 </div>

 <script>

      
document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    var form = document.querySelector('form');

    // Add submit event listener to the form
    form.addEventListener('submit', function (event) {
        // Prevent default form submission
        event.preventDefault();

        // Clear previous error messages
        var errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function (errorMessage) {
            errorMessage.textContent = '';
        });

        // Get form data
        var formData = new FormData(form);

        // Create fetch request
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Check if response is successful
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Parse the response JSON
            return response.json();
        })
        .then(data => {
            // Handle response data
            if (data.success) {
                window.location.href = 'index.php?success=true';
            } else {
                // If there are errors, display them next to corresponding input fields
                Object.keys(data.errors).forEach(function (fieldName) {
                    var inputField = form.querySelector('[name="' + fieldName + '"]');
                    var errorMessage = inputField.parentElement.querySelector('.error-message');
                    errorMessage.textContent = data.errors[fieldName];
                });
            }
        })
        .catch(error => {
            // Handle fetch errors
            console.error('Fetch error:', error);
        });
    });
});


</script>