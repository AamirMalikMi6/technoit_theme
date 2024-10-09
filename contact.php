<?php include('header.php');
include('Pages-Heros.php');
?>

<div class="single-page">

<div id="contact-am" class="contact-am contact-section">
    <div class="max-width-container">
      <div class="contact-main flex-main">
        <div class="contact-text-area">
          <div class="contact-information-box">
            <div class="contact-information-main">

              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                  <div class="contact-info">
                    <h6>Address:</h6>
                    <p>11 West Town</p>
                    <p>PBo 12345, United States</p>
                  </div>
                </div>
              </div>
              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                  <div class="contact-info">
                    <h6>Phone:</h6>
                    <p>+1 1234 56 789</p>
                    <p>+1 1234 56 780</p>
                  </div>
                </div>
              </div>
              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                  <div class="contact-info">
                    <h6>Email:</h6>
                    <p>info@example.com</p>
                    <p>email@example.com</p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="contact-form-area">
          <div class="contact-form-box contact-form">
            <form class="contact-form form" id="contact-form">
              <!-- add name and email in one row then subject message and submit -->
              <div class="form-name-email">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
              </div>
              <div class="form-sub-msg-btn">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                <textarea class="form-control" id="message" name="message" placeholder="Message*" rows="7"
                  required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?> 