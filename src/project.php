<?php

include('header.php');

$project=$_GET["project"];
$block_url = '../src/json/block.json';
$block_json = file_get_contents($block_url);
$block_data = json_decode($block_json,true);
$block = $block_data['blocks'][$project];

?>

<style>

nav {

}

.slash-nav {
	height:160px;
	background-color:<?php echo $block['bcolor']?>;
}

footer {

}

#project {
	padding-top: 175px;
}

</style>

<nav class="slash-nav">
  <div class="container">
      <a style="display:inline-flex" class="transition brand" href="../">
        <img alt="Slash Art" src="img/salogow.png" class="slash-logo"/>
        <h5 class="white-text thin-text">Slash Art | Projects</h5>
      </a>

			<div class="menu">
				<a href="../" class="item transition">
				    <img src="img/icons/home.png" class=""/>
				    <div class="hidden-text transition">Home</div>
			  	</a>
			  	<a href="../about" id="btn-about" class="item transition">
				    <img src="img/icons/about.png" class=""/>
				    <div class="hidden-text text transition">About</div>
			  	</a>
			  	<a href="../portfolio" id="btn-port" class="item transition">
				    <img src="img/icons/portfolio.png" class=""/>
				    <div class="hidden-text transition">Portfolio</div>
			  	</a>
			  	<a href="../contact" id="btn-con" class="item transition">
				    <img src="img/icons/contact.png" class=""/>
				    <div class="hidden-text transition">Contact</div>
			  	</a>
			</div>
  		</br>
      <img class="project-logo" alt="Hometek" src="img/<?php echo $block['key']?>logo.png" height="40px" />
  </div>
</nav>

<div id="project">
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
				<img src="img/<?php echo $block['key']?>web.png" class="materialboxed responsive-img z-depth-1">
				<div class="row">
					<div class="col s12 m12 l6">
						<img src="img/<?php echo $block['key']?>web2.png" class="materialboxed responsive-img z-depth-1">
					</div>
					<div class="col s12 m12 l6">
						<img src="img/<?php echo $block['key']?>web3.png" class="materialboxed responsive-img z-depth-1">
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<h5 class="thin-text no-margin-bottom"><?php echo $block['title']?></h5>
				<h6><?php echo $block['webtype']?> - <?php echo $block['projtype']?></h6>
				<div class="divider"></div>
				<p class="justify"><?php echo $block['projdesc']?></p>
				<h6>Tools Used</h6>
				<div class="divider"></div>
				<h6><?php echo $block['tools']?></h6>
				<p class="thin-text"><?php echo $block['date']?></p>
			</div>
		</div>
	</div>
</div>

<?php

include('footer.php');

?>
