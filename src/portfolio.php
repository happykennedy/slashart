<?php

include('header.php');

$block_url = '../src/json/block.json';
$block_json = file_get_contents($block_url);
$block_data = json_decode($block_json,true);
$block = $block_data['blocks'];

usort($block, function($a, $b) {
    return $a['order'] - $b['order'];
});

$page = "Portfolio"

?>

<?php
include("navbar.php");
?>
<div class="rect z-depth-1">
</div>
<div id="portfolio">
  <div class="container">
    <h5 style="font-weight:300;margin-bottom:20px;" class="white-text valign-wrapper">
      <img style="margin-right:15px;" src="img/icons/star.png"/>
      Featured Projects
    </h5>
    <div class="grid">
      <div class="grid-sizer"></div>
         <div id="whometek" class="grid-item w50 h3">
            <a href="../project/?project=hometek" id="hometek" class="waves-effect waves-light portfolio-grid grid-content valign-wrapper rounded z-depth-1" style="background-image:url(img/hometekback.png);">
              <img src="img/hometeklogo.png" />
            </a>
          </div>
          <div id="wleague" class="grid-item w50 h3">
            <a href="../project/?project=league" id="league" class="waves-effect waves-light portfolio-grid grid-content  valign-wrapper rounded z-depth-1" style="background-image:url(img/leagueback.png);">
              <img src="img/leaguelogo.png" />
            </a>
          </div>
          <div id="wvoala" class="grid-item w50 h3">
            <a href="../project/?project=voala" id="voala" class="waves-effect waves-light portfolio-grid grid-content valign-wrapper rounded z-depth-1" style="background-image:url(img/voalaback.png);">
              <img src="img/voalalogo.png" />
            </a>
          </div>
          <div id="wedge" class="grid-item w50 h3">
            <a href="../project/?project=edge" id="edge" class="waves-effect waves-light portfolio-grid grid-content  valign-wrapper rounded z-depth-1" style="background-image:url(img/edgeback.png);">
              <img src="img/edgelogo.png" />
            </a>
          </div>
      </div>

      <h5 style="margin:20px 0;" class="thin-text">Other Projects</h5>

      <div class="grid">
        <div class="grid-sizer"></div>
        <div  id="wqrc" class="grid-item w25 h2">
          <a id="qrc" class="waves-effect waves-light rounded z-depth-1 portfolio-grid grid-content  valign-wrapper tooltipped" data-position="bottom" data-delay="50" data-tooltip="CC Sherbrooke - Logo Design" style="background-image:url(img/ccsherbyback.png);">
            <img src="img/cclogo.png" />
          </a>
        </div>
        <div  id="wqrc" class="grid-item w25 h2">
          <a id="qrc" class="waves-effect waves-light rounded z-depth-1 portfolio-grid grid-content  valign-wrapper tooltipped" data-position="bottom" data-delay="50" data-tooltip="Quebec Regional Conference 2014 - Logo and Web Design" style="background-image:url(img/qrcback.png);">
            <img src="img/qrclogo.png" />
          </a>
        </div>
        <div id="wgripfit" class="grid-item w25 h2">
          <a id="gripfit" class="waves-effect waves-light rounded z-depth-1 portfolio-grid grid-content valign-wrapper tooltipped" data-position="bottom" data-delay="50" data-tooltip="Gripfit - Logo Design" style="background-image:url(img/gripfitback.png);">
            <img src="img/gripfitlogo.png" />
          </a>
        </div>
        <div id="wasecure" class="grid-item w25 h2">
          <a id="asecure" class="waves-effect waves-light rounded z-depth-1 portfolio-grid grid-content  valign-wrapper tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arcane Secure - Logo and Website Design" style="background-image:url(img/asback.png);">
            <img src="img/asecurelogo.png" />
          </a>
        </div>
        <div id="wfinissants" class="grid-item w25 h2">
          <a id="finissants" class="waves-effect waves-light rounded z-depth-1 portfolio-grid grid-content  valign-wrapper tooltipped" data-position="bottom" data-delay="50" data-tooltip="Finissants Sherbrooke 2014 - Logo Design" style="background-image:url(img/finiback.png);">
            <img src="img/logofinissants.png" />
          </a>
        </div>
      </div>
  </div>
</div>

<?php

include('footer.php');

?>
