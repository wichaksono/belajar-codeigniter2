<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Belajar Bootstrap pada CodeIgniter</title>

  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet"/>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container header-container">
  	<div class="row">
  	  <header class="header col-md-4">
  		<h1 class="title-site">Belajar Codeigniter</h1>
  		<h4 class="description">Menggunakan Bootstrap di Codeigniter</h4>
  	  </header>
  	  <nav class="menus col-md-8">
  	  	<ul>
  	  		<li><a href="#">Home</a></li>
  	  		<li><a href="#">Contact Us</a></li>
  	  		<li><a href="#">About Us</a></li>
  	  	</ul>
  	  </nav>
  	</div>
  </div>
  <!-- end header -->
  
  <!-- body content -->
  <div class="container wrap-container">
  	<div class="row">
  	  <div class="col-md-9 content">
  	  	<article class="article">
  	  	  <a href="#" class="permalink"><h2 class="title-post">Lorem ipsum dolor sit amet</h2></a>
  	  	  <div class="entry">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ducimus ut, dolor velit aperiam soluta earum non qui ea a nulla cumque ab fugiat illum asperiores ipsa odit? Expedita, rerum.</div>
  	  	</article>

  	  	<article class="article">
  	  	  <a href="#" class="permalink"><h2 class="title-post">Ladipisicing elit. Eum ducimus ut, dolor velit aperiam</h2></a>
  	  	  <div class="entry">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ducimus ut, dolor velit aperiam soluta earum non qui ea a nulla cumque ab fugiat illum asperiores ipsa odit? Expedita, rerum.</div>
  	  	</article>

  	  	<article class="article">
  	  	  <a href="#" class="permalink"><h2 class="title-post">Lorem ipsum consectetur adipisicing sit amet</h2></a>
  	  	  <div class="entry">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ducimus ut, dolor velit aperiam soluta earum non qui ea a nulla cumque ab fugiat illum asperiores ipsa odit? Expedita, rerum.</div>
  	  	</article>

  	  	<article class="article">
  	  	  <a href="#" class="permalink"><h2 class="title-post">Lorem ipsum illum asperiores ipsa odit?</h2></a>
  	  	  <div class="entry">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ducimus ut, dolor velit aperiam soluta earum non qui ea a nulla cumque ab fugiat illum asperiores ipsa odit? Expedita, rerum.</div>
  	  	</article>

  	  	<article class="article">
  	  	  <a href="#" class="permalink"><h2 class="title-post">Lorem ipsum dolor sit amet</h2></a>
  	  	  <div class="entry">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ducimus ut, dolor velit aperiam soluta earum non qui ea a nulla cumque ab fugiat illum asperiores ipsa odit? Expedita, rerum.</div>
  	  	</article>
  	  </div>

  	  <div class="col-md-3 sidebar">
  	  	<aside class="widget-area categories_class">
  	  		<h3 class="title-widget">Categories</h3>
  	  		<ul>
  	  			<li><a href="#">Tutorial PHP</a></li>
  	  			<li><a href="#">Tutorial Bootstrap</a></li>
  	  			<li><a href="#">Tutorial Codeigniter</a></li>
  	  		</ul>
  	  	</aside>
  	  </div>

  	</div>
  </div>

  <!-- end body content -->
   
  <!-- footer -->
  <div class="container footer-container">
  	<div class="row">
  		<footer class="footer">
  			<p class="text-center">copyright &copy; 2016 <a href="//www.onphpid.com" target="_target">onphpid.com</a></p>
  		</footer>
  	</div>
  </div>

  <!-- SCRIPT -->
  <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>