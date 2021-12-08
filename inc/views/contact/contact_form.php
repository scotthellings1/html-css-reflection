

<section class="contact-info">
  <div class="container">
    <div class="contact-info">
      <p class="email">
        Email us on:
      </p>
      <p class="email-address">
        <a href="mailto:sales@netmatters.com">sales@netmatters.com</a>
      </p>
      <p class="business-hours">
        Business hours:
      </p>
      <p class="times">
        Monday - Friday 07:00 - 18:00
      </p>
      <div class="out-of-hours">
        <p>Out of Hours IT Support</p>
        <svg xmlns="http://www.w3.org/2000/svg" class="down-chevron" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/>
        </svg>

      </div>
    </div>

  </div>
</section>

<div class="container">
  <section class="contact-form">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <?php
         echo renderFormSuccess();


      if  ($emptyFields) {
        foreach ($emptyFields as $emptyField) {
          echo "<span class=''> <ul> " . renderEmptyFieldError($emptyField) . "</ul></span>";
        }
      }
      ?>
      <div class="input-group">
        <label class="required" for="name">Your Name </label>
        <input type="text" id="name" name="name" value="<?php if (isset($formData["name"])) { echo $formData["name"]; }
        ?>">
      </div>
      <div class="input-group">
        <label class="required" for="email">Your Email </label>
        <input type="text" id="email" name="email" value="<?php if (isset($formData["email"])) { echo
        $formData["email"]; }
        ?>">
      </div>
      <div class="input-group">
        <label class="required" for="phone">Your Telephone Number </label>
        <input type="text" id="phone" name="phone" value="<?php if (isset($formData["phone"])) { echo
        $formData["phone"]; }
        ?>">
      </div>
      <div class="input-group">
        <label class="required" for="subject">Subject </label>
        <input type="text" id="subject" name="subject" value="<?php if (isset($formData["subject"])) { echo
        $formData["subject"]; }
        ?>">
      </div>
      <div class="input-group message">
        <label class="required" for="message">Message </label>
        <textarea name="message" id="message" cols="" rows=""><?php if (isset($formData["message"])) { echo
          $formData["message"]; }
          ?></textarea>
      </div>
      <div class="label">
        <label for="marketing">
                <span class="check-holder">
                    <span class="checkbox">
                    <input class="cb" id="marketing" name="marketing" type="checkbox" value="1">
                    <span class="check"></span>
                    </span>
                    <span class="text">
                    <span>Please tick this box if you wish to receive marketing information from us. Please see our
                        <a href="#">Privacy Policy</a>
                        for more information on how we use your data.
                    </span>
                    </span>
                </span>
        </label>
      </div>
      <div class="submit">
        <button type="submit" class="btn btn-service-web">send enquiry</button>
      </div>
    </form>
  </section>
</div>
