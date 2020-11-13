
  <script src="<?php echo base_url();?>js/contactUs.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>css/contactUs.css">

        <div class="mycontainer">
          <img class="contactimg" src='<?php echo base_url();?>assets/banner3.jpg' alt="background image" width="100%" height="20%">
          <div class="centered"><h1 class="display-4">CONTACT</h1><br><p><strong>HOME / CONTACT</strong></p></div>  
        </div>
      <section>
        <div class="my-5 container">
          <p>REACHING OUR OFFICE</p>
          <h1 >Find Our Location</h1>
          <div class="row mt-5">
            <div class="col-sm-12 col-md-4">
              <div class="servicebox">
              <span class="service-icon"><i class="fas fa-map-marker-alt"></i></span>
              <h5 class="mt-4">VISIT OUR OFFICE</h5>
              <p>881 C Faisal Town, Maulana Shaukat Ali Road, Lahore</p>
            </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="servicebox">
              <span class="service-icon"><i class="fas fa-envelope"></i></span>
              <h5 class="mt-4">EMAIL US</h5>
              <p>info@mitbyte.com</p>
              <br>
            </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="servicebox">
              <span class="service-icon"><i class="fas fa-phone-square"></i></span>
              <h5 class="mt-4">CALL US</h5>
              <p>+92 (333) 444 2545</p><br>
            </div>
            </div>

          </div>
          
          <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5304.959332165909!2d74.29914567422196!3d31.475053168970103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190351cee261fd%3A0xb3e732cc1cd34e5f!2sMITBYTE!5e0!3m2!1sen!2s!4v1601824690692!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <h4 id="contactform" class="text-left">We love to hear from you.</h4>

          <?php echo form_open('mitbyte/contactUs'); ?>
            <div class="form-row">
              <div class="col-sm-12 col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="John" name="name" required>
                
              </div>
              <div class="col-sm-12 col-md-4">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="abc@abc.com" name="email" required><br>
                <?php echo validation_errors(); ?>
                
              </div>
              <div class="col-sm-12 col-md-4">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" placeholder="Rates Inquiry" name="subject" required>
                
              </div>
              <div class="mt-3 col-sm-12 col-md-12">
                <label for="Message" >Message:</label>
                <textarea rows="5" class="form-control" placeholder="Write your message" name="message" required></textarea>
              </div>
              <button type="submit" class="btn btn-warning mt-3 ml-2">Send Message</button>
          </form>
        </div>

      </section>
        