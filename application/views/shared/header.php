<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma Brasil</title>
    <link rel="icon" href="<?=site_url();?>img/favicon.gif" type="image/gif" />
    <!-- <link rel="stylesheet" href="<?=site_url();?>assets/css/bootstrap.css" /> -->
    <!-- <link rel="stylesheet" href="<?php //echo site_url();?>assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="<?=site_url();?>assets/css/bootswatch.min.css" />
    <link href="<?=site_url();?>assets/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=site_url();?>assets/css/styles-site.css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?=site_url();?>assets/js/bsa.js"></script>
    <script src="<?=site_url();?>assets/js/jquery.smooth-scroll.min.js"></script>
    <script src="<?=site_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=site_url();?>assets/js/bootswatch.js"></script>
    <script src="<?=site_url();?>assets/js/main.js" type="text/javascript"></script>
</head>

<body>
 <div class="container navbar navbar-fixed-top">
 	<div class="row navbar-inner">
           <h1 class="span4"><a href="<?=site_url();?>home"><img src="<?=site_url();?>assets/img/logo-soma.png" /></a></h1>
           <div class="span8 nav-collapse collapse">
            <ul class="nav pull-right main-menu" id="main-menu-right">
				<li><a href="<?=site_url();?>home">HOME</a></li>
				<li><a href="<?=site_url();?>laminas">L&Acirc;MINAS</a></li>
				<li><a href="<?=site_url();?>qualidade">QUALIDADE</a></li>
				<li><a href="<?=site_url();?>processos">PROCESSOS</a></li>
				<li><a href="<?=site_url();?>sobre-nos">SOBRE N&Oacute;S</a></li>
				<li><a href="<?=site_url();?>contato">CONTATO</a></li>
				<li class="dropdown menu-idioma" id="preview-menu">
					<a class="dropdown-toggle cinza-666" data-toggle="dropdown" href="#">ESCOLHA UM IDIOMA <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a target="_blank" href="bootstrap.min.css">bootstrap.min.css</a></li>
						<li><a target="_blank" href="bootstrap.css">bootstrap.css</a></li>
						<li class="divider"></li>
						<li><a target="_blank" href="variables.less">variables.less</a></li>
						<li><a target="_blank" href="bootswatch.less">bootswatch.less</a></li>
					</ul>
				</li>
            </ul>
         </div>
       </div>
   </div>
 </div>
  
<div class="row-fluid">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="active item">
        	<div class="container">
        		<div class="item-desc">
        			<h3>soma.<br />presente onde a tecnologia<br />e qualidade fazem a <span>diferença</span></h3>
        			<p>
    					Lâminas que oferecem Valor e produtividade para a indústria.<br />
						Durabilidade e segurança com o produto final.
					</p>
					<a href="#" class="btn-large">&rsaquo; &nbsp;Saiba Mais</a>
        		</div>
        	</div>
        	<img src="<?=site_url();?>assets/img/home/slider1.jpg" />
    	</div>
        <div class="item">
        	<img src="<?=site_url();?>assets/img/home/slider2.jpg" />
    	</div>
        <div class="item">
    		<img src="<?=site_url();?>assets/img/home/slider3.jpg" />
		</div>
      </div>
      <div class="carousel-configs">
            <ol class="carousel-indicators carousel-indicadores">
            	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            	<li data-target="#myCarousel" data-slide-to="1"></li>
            	<li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-controle carousel-controladores">
                <a class="carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control" href="#myCarousel" data-slide="next" style="margin-left: 108px;">&rsaquo;</a>
            </div>
      </div>
</div>
