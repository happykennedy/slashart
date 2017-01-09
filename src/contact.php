<?php

include('header.php');
$page="Contact"
?>

<?php
include("navbar.php");
?>
<div class="rect z-depth-1">
</div>
  <div id="contact">
  	<div class="container">
  		<div class="row">
  			<div class="col s12 m12 l7">
          <div class="contact-block white rounded z-depth-1">
            <h5 class="thin-text">For any type of inquiry, please don't hesitate to contact me!</h5>
            <form id="contact-form">
              <h6 class="successContent valign-wrapper">
                  <img src="img/icons/check.png" />Your message has been sent successfully.
              </h6>
              <h6 class="errorContent">
                  <img src="img/icons/error.png" />There was a problem validating the form please check!
              </h6>
              <div class="row">
                <div class="input-field col s12">
                  <input id="form-name" name="name" type="text" class="validate">
                  <label for="name">Your full name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="form-email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="form-subject" name="subject" type="text" class="validate">
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="form-message" name="message" type="text" class="validate materialize-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>
              </div>
              <button id="form-submit" class="contact-btn btn waves-effect waves-dark btn" type="submit">
              Send >
              </button>
            </form>
  			</div>
      </div>
  	</div>
  </div>
</div>

<?php

include("footer.php")

?>
