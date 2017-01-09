<?php

//Include header
include( "header.php");
$page="Home"
?>

<script>


</script>

<style>
body {
  overflow: hidden;
}
@media only screen and (max-width: 992px) {
  body {
    overflow: hidden;
  }
}
</style>

<!-- Page Content -->
<?php
include("navbar.php");
?>
<div id="home" class="">
	<video autoplay loop id="vid">
		<source src="video/skateloop.mp4" type="video/mp4">
	</video>
	<div id="intro">
		<div class="intro-text">
			<h1 class="white-text thn-text">Express yourself.</h1>
			<a href="../portfolio" class="btn waves-effect waves-light">View Projects</a>
		</div>
	</div>
  <footer>
    <div class="container">
      <div class="row social-row">
        <a href="https://ca.linkedin.com/in/sébastien-audet-a2583194" class="social-icons"><img src="img/icons/linkedin.png"/></a>
        <a href="http://codepen.io/slashart/" class="social-icons"><img src="img/icons/codepen.png"/></a>
        <a href="https://dribbble.com/sebaudet" class="social-icons"><img src="img/icons/dribbble.png"/></a>
        <a href="https://github.com/happykennedy" class="social-icons"><img src="img/icons/github.png"/></a>
      </div>
      <div class="row no-margin-bottom">
        <div class="contact">
          <h6 class="white-text">Contact: <a class="white-text" href="mailto:seb.audet@slashart.ca">seb.audet@slashart.ca</a></h6>
        </div>
      </div>
      <div class="row">
        <div class="copyright">
          <h6 class="white-text">© 2016 Slash Art - <a class="white-text" href="https://icons8.com">Icons</a></h6>
        </div>
      </div>

    </div>
  </footer>
</div>
</body>


<!-- End of Page Content -->
